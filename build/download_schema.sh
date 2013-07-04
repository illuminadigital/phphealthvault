#!/bin/sh

if [ "x$1" = "x" ]
then
	case $0 
	in 
		/*) 
			BUILDPATH="`dirname $0`";; 
		*) 
			BUILDPATH="`pwd`";; 
	esac
else
	BUILDPATH="$1"
fi

XSDDIR="$BUILDPATH/schema/platform/web/xsd"

# Create a working area
mkdir -p $XSDDIR

# Copy in our master files
cp -r master/schema/* $XSDDIR

cd $XSDDIR

rm *.xsd

# Fetch the list of methods
wget -O - http://developer.healthvault.com/pages/methods/methods.aspx | perl -ne 'use HTML::HTML5::Entities; BEGIN {$output=0;} $line = $_; if ($line =~ s#.*<pre lang="XML">##) { $output=1; } if ( $line =~ s#</pre>.*##) { $output = 2; } if ($output) { print decode_entities($line); } if ($output == 2) { $output = 0 };' > healthvault-methods.xsd 

# Download the referenced schemas, along with the request and response schemas
perl -ne '/<(common-schema|request-schema-url|response-schema-url)>(.*?)<\/\1>/ && do { $urls{$2} = $2; }; END { foreach $url (keys(%urls)) { print "$url\n" ; } } ' healthvault-methods.xsd | xargs wget --random-wait --wait 2

# This appears to be missing from the method page now
wget -O - https://platform.healthvault-ppe.com/platform/XSD/request.xsd | sed -e 's#<!DOCTYPE.*>##' > request.xsd

# This appears to actually exist (now)
#ln -s response.xsd.master response.xsd
#wget -O - https://platform.healthvault-ppe.com/platform/XSD/response.xsd | sed -e 's#<!DOCTYPE.*>##' > response.xsd

for i in `wget -O - http://developer.healthvault.com/pages/types/types.aspx | perl -ne 's#.*href="type.aspx\?id=(.*?)".*#$1# && do { print; }'`
do
	# $line =~ s#urn:com.microsoft.wc.thing.types#urn:com.microsoft.wc.types#; 
	wget -O - "http://developer.healthvault.com/pages/types/type.aspx?id=$i" | perl -ne 'use HTML::HTML5::Entities; BEGIN {$output=0;} $line = $_; if ($line =~ s#.*<pre lang="XML">##) { $output=1; } if ( $line =~ s#</pre>.*##) { $output = 2; } if ($output) { $line = decode_entities($line); $line =~ s/(encoding=)(.?)UTF-16\2/\1\2UTF-8\2/i; print $line; } if ($output == 2) { $output = 0 };' > "thingtype-$i.xsd"

	# Get a random delay between 0 and 2 seconds
	SEED=`( echo $$ ; ps ; w ; date ) | cksum | cut -f1 -d" " `
	SLEEPTIME=`expr $SEED % 3`

	sleep $SLEEPTIME;
done

# The Base schema is in the base thing XSD
ln -s thingtype-3e730686-781f-4616-aa0d-817bba8eb141.xsd base.xsd

# Bring down the related schemas
wget -nc http://www.w3.org/TR/xmldsig-core/xmldsig-core-schema.xsd
wget -O - http://www.w3.org/2001/03/xml.xsd | sed -e 's#<!DOCTYPE.*>##' > xml.xsd
wget -O - http://www.w3.org/2001/XMLSchema.xsd | sed -e '/<!DOCTYPE.*\[/,/.*\] *>/d; s#schemaLocation="http://www.w3.org/2001/xml.xsd"#schemaLocation="xml.xsd"#;' > XMLSchema.xsd

for i in *.diff
do
	echo "Applying patch $i"
	patch < $i
done

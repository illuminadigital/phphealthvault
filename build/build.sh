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

SCHEMABASE=$BUILDPATH/schema
XSD2PHPBASE=$BUILDPATH/vendor/illuminadigital/xsd-to-php

if [ "x$2" = "x" ]
then
	DESTBASE="$BUILDPATH/.."
else
	DESTBASE="$2"
fi

TMPFOLDER="/tmp/$$"

echo "Building base structure"
mkdir $TMPFOLDER
cp -r $SCHEMABASE $TMPFOLDER

echo "Generating master classes"

DEFDIR=`pwd`

cd $TMPFOLDER

for i in `find . -name 'healthvault-methods.xsd' -prune -o -type f -name 'method*.xsd' -print -o -type f -name 'request*.xsd' -print -o -type f -name 'response*.xsd' -print -o -type f -name 'thingtype-*.xsd' -print -o -name response.xsd -print`
do
	echo $i
	if grep -q "Note: Please use the new version" $TMPFOLDER/$i
	then
		echo "Skipping old thing"
	else
		cd /tmp/$$/`dirname $i`
		php $XSD2PHPBASE/src/tools/legko.php compile-schema --schema `basename $i` --dest $DESTBASE/src --binding hv
	fi
done

echo "Cleaning up"
cd $DEFDIR
rm -rf $TMPFOLDER

echo "Creating missing Any classes"
for i in `find $DESTBASE/src -type f -print0 | xargs -0 egrep -h 'type="[^"]*Any(Mixed|Type)"' | perl -ne '/type="([^"]*Any(Mixed|Type))"/ && do { $class = $1; $class =~ s#\\\\#\\/#g; print "$class\n"; }' | sort -u` 
do
	echo $i
	FNAME=$DESTBASE/src$i.php
	NSPACE=`dirname $i | cut -c2- | tr '/' '\\\\'`
	CNAME=`basename $i`
	
	cat > $FNAME << EOC
<?php
namespace $NSPACE;

/**
 * @XmlEntity(xml="*")
 */ 
class $CNAME {
}
EOC
done	


echo "Fixing up method inheritance"

# Don't want to catch "response"
for i in $DESTBASE/src/com/microsoft/wc/methods/[A-Z]*/Info.php
do
	echo $i
	sed -i 's#class Info {#class Info extends \\com\\microsoft\\wc\\request\\Info {#' $i
done 

for i in $DESTBASE/src/com/microsoft/wc/methods/response/*/Info.php
do
	echo $i
	sed -i 's#class Info {#class Info extends \\com\\microsoft\\wc\\response\\AnyMixed {#' $i
done 

for i in `find $DESTBASE/src/com/microsoft/wc/thing -type f -name '*.php' -print`
do
	echo $i
	sed -i 's#extends Com\.microsoft\.wc\.thing\.Thing {#extends \\com\\microsoft\\wc\\thing\\AnyMixed {#' $i
done 

####
#echo "Header fix"
#for i in $DESTBASE/vendor/com/microsoft/wc/request/Header.php
#do
#		echo $i
#		sed -i~ 's#XmlElement	(type="\\com\\microsoft\\wc\\request\\DateTime#XmlText	(type="datetime#; s#is_string($msgTime)# $msgTime instanceof \\DateTime#' $i
#done

#echo "Force (non-default) namespace"
#for i in $DESTBASE/vendor/com/microsoft/wc/request/Request.php $DESTBASE/vendor/com/microsoft/wc/request/Header.php
#do
#		echo $i
#		sed -i~ 's#\(XmlNamespace.*prefix="\)#\1wc-request#; ' $i
#done
####

echo "Fix root element namespace"
for i in $DESTBASE/src/com/microsoft/wc/request/Request.php
do
	echo $i
	sed -i 's#^\(\s*\*\s*\)\(@XmlEntity.*xml="\)#\1@XmlNamespaces ({\n\1  @XmlNamespace(url="urn:com.microsoft.wc.request", prefix="wc-request")\n\1})\n\1\2wc-request:#; ' $i
done

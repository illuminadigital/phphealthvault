Building phphealthvault
=======================

Because the core code of the library is auto-generated it is possible to rebuild
the library when there are changes to the schema files.

The rebuild relies on a modified version of `xsd-to-php` which, amongst other 
things, includes a processor which is aware of the idiosyncracies and extra
features of the Microsoft HealthVault schemas. The latest version of this code
can be obtained simply by using the included `composer.json` file or by placing
a copy of the code from:

	https://github.com/illuminadigital/xsd-to-php.git
	
into `vendor/illuminadigital/xsd-to-php`.

It also requires a copy of the schema files, which can be obtained by using the
`download_schema.sh` script. This relies on `wget` and `perl`. (Perl needs to
have the `HTML/HTML5/Entities" module installed)

Once all the components are in place it is possible to simply run `build.sh` to
regenerate all the files. 

Assuming that `composer.phar` is installed somewhere and is executable on your 
system then the process is:

	$ composer.phar install
	$ ./download_schema.sh
	$ ./build.sh
	

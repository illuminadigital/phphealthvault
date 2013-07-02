PhpHealthVault Library
======================

The `phphealthvault` library is intended to give a simple to use interface for
Microsoft HealthVault. It does this through a combination of auto-generated 
classes that work at the HealthVault XML API level along with higher level Proxy
classes.

The lower level classes are based around the code developed as part of the 
Doctrine `OXM` project. This is designed to allow arbitrary XML structures to
be used for data storage in the same way that `ORM` stores data in a Relational
Database (eg MySQL) and `ODM` stores data in a Document-centric Database (eg 
MongoDB. The class metadata is used to determine the XML for both serialisation 
and deserialisation. In this implementation only the Annotation style is used. 
The `php-xml-marshalling` library is a fork of the original OXM code allowing it
to conform to the current Doctrine APIs and support additional functionality, 
such as the handling of unknown XML content. 

These classes are generated using the tools in 'build'. As such they provide the
components with which to interact with HealthVault but this does require 
knowledge of the underlying structures. They all appear in `src/com`, 
`src/hl7_org` or `src/org`. 

The remaining code provides the mechanism for sending requests to HealthVault
and processing the responses. It also provides proxy classes that hide the
underlying HealthVault structure, often flattening a section of the XML to a
set of methods at a single level. They are broadly broken down into the `Thing` 
proxies which work with a whole chunk of information and the `Type` proxies 
which work with a smaller group of information within.

Performance Considerations
--------------------------

The auto-generation process creates a lot of classes. Many of these are from 
the referencing of a number of different XML Schemas into the core Microsoft
HealthVault Schemas. Although only a few of these classes may be used the 
generation process builds them all.

Unlike the other Annotation-based components, which build proxy classes, the
base OXM library uses arrays of objects to carry the metadata. The generation
of this data on every request is very slow, with the result that an accelerator
such as `APC` should be used.

DLS\Healthvault
===============

The core configuration interface is defined here, along with a base 
implementation. The server specific ones are defined in the Configurations 
directory.

This is also the home of "Driver", the main entry point into the library. This
primarily provides access to the shell and platform methods, but also utility
methods such as the ThingFactory (converting IDs into Things) and ProxyFactory 
(coverting Things into their proxy)

DLS\Healthvault\Shell
=====================

Microsoft HealthVault shell methods result in a URL that the user must visit in
their browser. They typically provide account create, authorisation, and 
authentication services. `ShellMethod` provides the starting point and utility
methods for the different kinds of required and optional parameters. There are 
common patters for these methods, resulting in a number of specialisations of
this class before we reach the specific method. The file and class names follow
the convention the IntialCamelCase name of the method followed by "Method". 

Creation of a Shell Method is through the `ShellMethodFactory`. Having taken a
configuration during construction this can return an instance for any method from
the name.

Having obtained a Shell Method object and set the appropriate parameters the 
browser will need to be redirected to the URL returned by `getMethodUrl()`.

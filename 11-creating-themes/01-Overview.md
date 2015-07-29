How to create a theme with Zen Grid Framework V4.
====

This section of the Zen Grid Framework V4 documentation is designed to walk developers through the process of how to create a custom theme using the Zen Grid Framework v4.

## Create a new template
The first part of this process is to create your own template package from one of the starter templates in the Joomlabamboo catalogue. In this example we will be starting with the Xero template and will use this theme as the base for the new template.

The first step is to change the name of the template and any relevant files in order to make an installable package using the name of your new template. For the purpose of this documentation we are going to call this new theme - Orion.

## Unzip the template on your hard drive
1. Unzip the Xero template zip on your hard drive, I've added it's contents to a folder on my hard drive with the title Orion.

## Edit the templateDetails.xml
3. Open the file called templateDetails.xml and change the following details:
4. Change the template name from Xero to Orion
5. Change the version number to v1.0 
6. Enter the description of your template in the description tags
	
This description will display when the user has installed the template and it's wrapped in a class called hide-intro which will prevent the details here from appearing in the template admin.

7. Next scroll down to the language section and change the name of the language file used for the template. Change from en-GB.tpl_xero.ini to en-GB.tpl_orion.ini and en-GB.tpl_xero.sys.ini to en-GB.tpl_orion.sys.ini.

8. The last edit to be made in the templateDetails.xml is to change the path to the framework. Change the path in this params attribute at the bottom of the file from /templates/xero/zengrid/config to /templates/orion/zengrid/config

		
9. Save the changes made to the templateDetails.xml

## Rename the language files
10. In the languages/en-GB folder rename the language files. Change the xero language files from
		en-GB.tpl_xero.ini
		en-GB.tpl_xero.sys.ini
	
	to
	
		en-GB.tpl_orion.ini
		en-GB.tpl_orion.sys.ini

## Create the new zip file
11. Now zip the files into a new zip package using your favourite zip app. The files should not be nested in any folders in the zip.
12. Rename the zip for your convenience to tpl-orion.zip
13. Youu can now test that the zip is installable by installing the newly created zip file in your Joomla installation.



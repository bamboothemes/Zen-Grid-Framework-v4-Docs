Troubleshooting
======

 
Zen Grid Framework based themes have smart troubleshooting routines which can be found on the overview panel in the template settings. The warnings that can be found here provide further information for some common issues that can face some users.

<img src="{{ "troubleshooting.jpg" | asset_url }}">

If you are having trouble with some of your settings then it's advised that you look at the Overview panel to get an idea regarding some of your settings that may be causing the issue.

A description of the possible warnings follow below. 

Compile required
--------
Before you saved your theme settings you made some changes that will not display on the front end of your site unless you compile less to css. Click the compile less button in the toolbar to save your changes to the theme's css files.

When you click the save button in the top toolbar and have made changes to settings that require the less to be recompiled an alert box will appear with the following message:
You have made changes to your settings that require less files to be recompiled. Please save and compile your theme after the page loads.
As the message suggests simply click the compile less button in the template setting after the page reloads.

Load Template css enabled - Settings panel
--------
While this setting is enabled the theme options will not take any effect. This setting loads the css/template.css file instead of the css file specified in the Theme tab. This setting is useful for developers who want to work with an external compiler to compile the less/template.less file directly.

CDN urls enabled - Settings panel
--------
	
The CDN warning will show when the cdn option is enabled. The CDN option sets the template to look for it's asset files at the url specified in the cdn url setting.

In order for this option to work correctly you must ensure that the assets required by the template have been uploaded to the url specified in the cdn url setting. For help using this option please consult the Zen Grid Framework documentation.


The main content is hidden on the front page - Layout panel
--------

This setting hides all content assigned to the main content, sidebar1, sidebar2, abovecontent and belowcontent positions on the home page of your website.

In some cases this option will hide content on other pages if that content item or component does not have a menu item specified for it. It may appear that you are viewing the front page of your website however it is more likely that you are viewing the settings for your front page.Please read this blog post for further information on how to solve this issue.


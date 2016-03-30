---
title: Zen Shortcode Custom Syntax
taxonomy:
    category: docs
---

A new addition to the Zen Shortcode plugin is the ability to specify custom syntax for your content. This means that in addition to using the built in syntax to display the icons listed below it is possible to use your own custom syntax to render new markup and displays.

To add your own syntax you enter the new names for your classes in the plugin settings in your sites Joomla extension manager. To navigate to these settings navigate to extensions &gt; plugin manager and filter the results to display the Zen Shortcode settings. Once you have entered the edit panel click on the options menu tab. This will display the options available for the plugin.

## Using a Custom prefix

The custom prefix option determines how the tags are rendered in your markup. By default the syntax uses depends on the option you have set in the Load Font Awesome css option. 

**This option has been made available if you have compiled the Font Awesome css using your own unique prefix. If you have not done this and you are using a Zen Grid Framework v4 based theme this option should be either left blank or use the zen-icon zen-icon- syntax. **

The workflow for the way that the prefix for the icons is applied is as follows:

#### Loading from CDN or local version 
If you have selected the local version or CDN version then the prefix required for this option is **fa fa-**. This is because the css for Font Awesome is loaded from fixed resources which already have the default "fa" prefix set.

If you have opted to use this option then the custom prefix is overridden and will have no effect.

#### Font Awesome disabled (loaded via template)

**Using a Zen Grid Framework v4 theme**

If you are using a Zen Grid Framework v4 based theme then your template has the option to compile Font Awesome within the template's css file. This is ideal as it cuts down an external resource required for your website. If this is the case then you need to set the option to load Font Awesome css to disabled and then ensure that it is enabled in your template settings.

Using the template version of Font Awesome means that the custom prefix required is **zen-icon zen-icon-**.

**Using a non Zen Grid Framework v4 theme**

If you are using this plugin with a non Zen Grid Framework based theme that has the required Font Awesome assets then you need to set this option to the path used by your icons. In 99% of the time this will be the default **fa fa-**.


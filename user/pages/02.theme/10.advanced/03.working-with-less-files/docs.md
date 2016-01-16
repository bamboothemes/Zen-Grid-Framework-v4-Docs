---
title: Working directly with less files
menu: Working with less files
taxonomy:
    category: docs
---


If you prefer working with the less files directly you can bypass the use of the theme options by enabling an option called "Enable template.css" in the settings panel. This makes the template load the css/template.css file rather than the css/theme.your-theme-name.css file. By enabling this option it makes it possible to work with any 3rd party compiler to compile the main template.less file.

Your template does not include a css/template.css file by default however it is automatically generated when you enable this option. This makes it possible to update the template without overwriting any changes made to the template.css file. If this setting is disabled and then re-enabled your settings will not be overwritten.

> When the Enable template css option is enabled a warning will appear on the theme panel as well as the troubleshooting panel on the overview page. 

We recommend this option for advanced users who are comfortable with editing less files and prefer to work with the files directly. Please note that compiling less files with an external compiler requires a local server and can not be performed on a live server.
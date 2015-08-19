---
title: File Structure
taxonomy:
    category: docs
---

The file structure of a ZGFv4 based theme is typically as follow:

- ajax.php (Used to process administrator ajax functionality)
- component.php (standard Joomla component file)
- css (folder for all compiled less files and custom.css)
- html (standard Joomla html override folder)
- images 
- js 
	- includes 
	- script.js (any template specific js)
	- any generated template javascript files
	- lib folder
	- 	includes js files used for key template functionality
- language
- less 
	- includes any template less files
	- where you place a custom.less file to include in the compiler
- offline.php (standard offline file)
- settings
	- includes
	- assets.xml (used by template to load required javascript in the compressor)
	- config/ stores the default and saved configuration files
	- layouts/ stores the default and saved layouts
	- settings.xml xml file used to populate the template admin
	- themes/ stores any saved themes
	- themes/presets store the theme presets that come with the theme
- templateInfo.php (used to populate content in the overview panel)
- template preview and template_thumbnail.png (template preview images)
- tpls
	- holds files that govern the layout
	- default.php the main layout container
	- blocks/ (sub layout files that are included by the parent)
- zen (holds the ZGF4 files)


Zen framework file structure
----
- admin (css, fonts and js for admin)
- config (main config file that renders the fields)
- fields (various displays for parameter types)
- helpers (ajax helpers for framework functionality)
- libs (bootstrap, font awesome, zen less, mobile detect, less php, lessjs and more.)
- zen.php (the main zen class)
- zen.xml (holds release and version data)
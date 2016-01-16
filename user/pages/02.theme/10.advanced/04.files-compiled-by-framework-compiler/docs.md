---
title: Files compiled by the template admin
menu: Compiled Files
taxonomy:
    category: docs
---



Please note that there are some files in the template administrator that are included in the less compilation that are not included in the template.less file. Font Awesome, bootstrap and the css3 animate library are not imported by the template.less file and so you will need to import these files via the template.less file if you wish to use this less.

Files that can be added to template.less file if not using the template interface to compile less:

- @import "../zen/libs/zen/less/fontawesome/font-awesome-all.less";
- @import "../zen/libs/zen/less/fontawesome/font-awesome-min.less";
- @import "../zen/libs/zen/less/animate/animate-library.less";
- @import "../zen/libs/frameworks/bootstrap2/bootstrap.less";
- @import "../zen/libs/frameworks/bootstrap3/bootstrap.less";
	
The font awesome all and min less files are two instances of the font awesome library. The font-awesome-min.less requires the minimum number of icons required for the theme whereas the all file includes the entire library.

Please note that it may be necessary to overwrite the bootstrap less files in this case as they are generated dynamically based on the theme settings in the template administrator.

In your less/template.less file you should find syntax similar to the following:

	// VARIABLES & MIXINS
	// ------------------


	// Bootstrap files
	// Uncomment the version you wish to use if using a 3rd party compiler
	//@import "../zen/libs/frameworks/bootstrap2/less/bootstrap2.less";	
	//@import "../zen/libs/frameworks/bootstrap3/less/bootstrap.less";


	// Import Template Variables
	@import "variables.less";

	// Import template and framework mixins
	@import "../zen/libs/zen/less/_mixins.less";


	// Import Base Framework styling
	// Includes grids, reset, tools and other base style

	@import "../zen/libs/zen/less/zen-base.less";
	//@import "../zen/libs/zen/less/fontawesome/font-awesome-all.less";
	//@import "../zen/libs/zen/less/animate/animate-library.less";
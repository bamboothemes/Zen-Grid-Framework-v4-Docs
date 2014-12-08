Zen Grid Framework v4 theming
======
 
Zen Grid Framework 4 templates come with a flexible reusable theme system. Themes are able to be used across different instances of the template making it possible to use multiple themes for different menu items.

How is a theme created?
-----
Themes are built using less files to generate .css files that are ultimately loaded in the browser by the template. If you are unfamiliar with Less, it's essentially a shortcut language for generating css files. Less (as well as other preprocessor languages) allow for the use of variables to be used as a way to reduce the specificity of your code. For more information regarding less please check out the main less page at lesscss.org.

The theme variables are stored in json files in the settings/themes folder. The variables populate the administrator panel when a theme is loaded and are then passed to the less compiler when you press the compile less button or save your theme in the theme panel.

In order to save any changes to your theme via the template administrator it is necessary to compile less to css. When any change is made to a setting that requires the recompiling of your less files the compile less and save theme buttons turn red. Any changes made to these settings that require compilation will not show until you compile less to css.

Working directly with less files
----

If you prefer working with the less files directly you can bypass the use of the theme options by enabling an option called "Enable template.css" in the settings panel. This makes the template load the css/template.css file rather than the css/theme.your-theme-name.css file. By enabling this option it makes it possible to work with any 3rd party compiler to compile the main template.less file.

Your template does not include a css/template.css file by default however it is automatically generated when you enable this option. This makes it possible to update the template without overwriting any changes made to the template.css file. If this setting is disabled and then re-enabled your settings will not be overwritten.

> When the Enable template css option is enabled a warning will appear on the theme panel as well as the troubleshooting panel on the overview page. 

We recommend this option for advanced users who are comfortable with editing less files and prefer to work with the files directly. Please note that compiling less files with an external compiler requires a local server and can not be performed on a live server.

Files compiled by the template admin
----

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



Using development mode to load less files in the browser
----

If you are working on a live server though and wish to work directly with less files there is a development mode found in the settings panel which can be enabled for this use.

![Live Watch Mode](/zen-grid-framework-4/images/performance/less-live-watch.jpg")


When development mode is enabled all less files loaded by the template are loaded in the browser. So rather than loading the css/theme.my-theme-name.css file you will see template.less, menu.less etc loading if you were to view the page with the wen inspector.

This option requires no compiling so after a change is made to one of these files and then the browser is refreshed you will see the changes on your website.

This option is meant to be used purely for development purposes and should be disabled after making the changes required for your theme. After making these changes and disabling the development feature you will then need to compile less to css in your template admin.

Using watch mode to live reload changes to less files.
----
There is a somewhat experimental option called watch mode for times when the development mode is enabled. Watch mode is capable of refreshing the page when changes are made to less files without refreshing the browser. When a change is made to any of the template less file the less javascript listens for those changes and then renders the changes on the page.

This mode is marked as experimental because in some cases this can lead to high cpu usage on your computer. It is advised that if you wish to use this option to use it sparingly - ie turn it off when not directly making changes to the less files.


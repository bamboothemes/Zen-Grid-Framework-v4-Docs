Saving themes, styles and layouts in Zen Grid Framework v4
======

Zen Grid Framework v4 templates have an intelligent template settings panel that performs a number of different actions when the save button is clicked. The action that is performed depends on any changes that you have made to your template settings.

Clicking the "save" and "save and close" button performs the standard Joomla functions when this button is clicked, however before those processes are run, the template settings are saved to the corresponding settings file and if it is required, less is compiled to css. While these actions are occurring a blue message box appears at the top of the page indicating the stage of the save process you are currently at.

Saving and compiling changes in your templates will normally only take a few seconds and most of the time under 10.

Some of the messages include
----
![Save Success](/zen-grid-framework-4/images/save-theme/save-success.jpg)
![Compile Less](/zen-grid-framework-4/images/save-theme/compiling-less.jpg)
![Less has been compiled](/zen-grid-framework-4/images/save-theme/less-success.jpg)


When is compiling less to css required?
---
Less is automatically compiled to css on saving your settings when any changes to the template settings have been made that affect the display of the template and those settings are found in the template's css file.

That is if you change the width, primary colour, dropdown width then less will be compiled to css when hitting save.



Compiling less to css without saving settings
----

![Compile Less](/zen-grid-framework-4/images/save-theme/compile-less-button.png)

If you need to compile less to css without saving your settings you can do so by clicking the compile less button found in the settings > css panel. It's advised that you use the save button at the top of the page to save and compile however if you need to trigger the compilation of less manually this is how to do it.



Saving and compiling themes without saving settings
----

It is possible to save, update and create new themes within the theme panel of your template settings. 

A theme in ZGF4 templates is a subset of the template settings. Themes store color, layout and other information that are used by the less compiler to create the css file.

The name of the theme is the only part of the theme process that is saved in the main configuration file.

When a theme is saved a json file is created or updated in the settings/themes/ folder eg theme.my-new-theme.json. A css file is also created and added to the css folder in the form of theme.my-new-theme.css.

The creation of themes sits outside of the save setting process as described above.


How to create a new theme in ZGF4 templates
----

### Open the template settings panel to the theme panel.
![Theme Panel](/zen-grid-framework-4/images/save-theme/theme-panel.png)

### Select an existing theme you want to use as a base
![Select A Theme](/zen-grid-framework-4/images/save-theme/select-a-theme.png)

### Type the name of your new theme in the input box
![Type a name](/zen-grid-framework-4/images/save-theme/type-a-name.png)

### Click save and compile
![Save and compile button](/zen-grid-framework-4/images/save-theme/save-and-compile-button.png)


![Compile to less](/zen-grid-framework-4/images/save-theme/compile-to-less.png)

If you follow the steps above your new theme will be created and available for other template styles. If you wish to apply this theme to your current template style you would then need to click save in the top toolbar.

How to create a new layout in ZGF4 templates
----
Layout information is stored in the configuration file for the template style you are using on a particular page. The layout details are stored in json format in a json object called layout.

	"layout": {	
		"top": {
			"positions": {
				"top4":"12"
			},
			"classes": {
				"classes":""
			}
		},
		"header": {
			"positions": {
				"header1":"5",
				"header2":"2",
				"header3":"2",
				"header4":"3"
			},
			"classes": {
				"classes":""
			}
		} ....

The layout is retrieved via the template in the front end and the various classes are rendered in the layout.

If you want to save layouts for use in other template styles it is necessary to save your layout using the save layout button in the layout panel. Layouts are saved to the settings > layouts folder and once a new layout is saved it becomes available to all other template styles.

How to save a new layout in ZGF Templates
----

### Navigate to the layout panel in the template settings
![Layout Panel](/zen-grid-framework-4/images/save-theme/layout-panel.png)

### Select a layout to use as your base layout
![Select a layout](/zen-grid-framework-4/images/save-theme/select-a-layout.png)

### Click load layout
![Click load layout](/zen-grid-framework-4/images/save-theme/click-load-layout.png)

### Make changes to the layout widths by dragging the widths of the module positions or by clicking the eye or hide stack options.

### Type the name of your new layout in the save layout input box
![Type Layout name](/zen-grid-framework-4/images/save-theme/type-layout-name.png)

### Click Save layout
![Click save layout](/zen-grid-framework-4/images/save-theme/click-save-layout.png)

Following the steps outlined above will create a layout preset available for use in other template styles . However if you wish to apply this newly created layout to the current template style you will need to press the save button in the top toolbar.



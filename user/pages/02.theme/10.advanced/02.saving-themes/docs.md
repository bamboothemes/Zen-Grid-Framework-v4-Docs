---
title: Saving themes
menu: Saving themes
taxonomy:
    category: docs
---

Zen Grid Framework v4 based themes can be saved by clicking the Save and Compile theme button in the template admin. If you have made any changes to your theme setting the text for this button will be: "Please save changes".



**Please note: If you make any adjustments to the themes that are shipped with the template it is recommended that you create a custom theme for your template to avoid any of your changes being overwritten when the template is updated.**

## Creating a new theme
To create a new theme follow these steps:

1 - Type the name of your new theme in the theme input box. 

![New theme name](my-new-theme.png)

2 - Click the Save and Compile theme button. If your theme needs to be compiled this button will say Please save changes.

![Click save](save-name.png)

## What happens next?
Once you do this a few events take place:
1. The new theme name is now added to the Select a theme select box.
2. A new files called settings/my-new-theme.json is created.
3. Your css is created in the css folder via the following 3 files
	- theme.my-new-theme.css; // A standard css file
	- theme.my-new-theme.php; // The same css rendered in a php file used if the gzip css setting is enabled
	- theme.my-new-theme.map // A css map file which highlights the less files that are responsible for rendering that specific css rule.

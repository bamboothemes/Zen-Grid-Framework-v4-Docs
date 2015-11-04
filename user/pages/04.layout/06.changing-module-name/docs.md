---
title: Changing module names in the layout
menu: Changing position name
taxonomy:
    category: docs
---

This tutorial shows the user how to change the name of an existing module position in your template.

## Change the name of the position in the positions.json file

The first step is to open the settings/layout/positions.json file. In this example we will change the name of the top1 position to "opening."

In this case:

	"top": {
	    "top1": "3",
	    "top2": "3",
	    "top3": "3",
	    "top4": "3"
	},

becomes

	"top": {
	    "opening": "3",
	    "top2": "3",
	    "top3": "3",
	    "top4": "3"
	},

Once you have made that change you will see in the template admin that a position called opening is now available in the space where the top1 position had previously been.

![Added position](/images/adding-position/adding-opening.png)

To use the new module position in your layout simply click on it and save your template settings.


## Add the name of the positions to the templateDetails.xml

The last step is to change the templateDetails.xml file. Open this file and locate the position group of entries. Locate the top1 reference and change it to opening.  

	<position>top1</position>

becomes
	<position>opening</position>
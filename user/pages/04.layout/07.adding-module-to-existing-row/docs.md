---
title: Changing module names in the layout
menu: Add position to existing row
taxonomy:
    category: docs
---

This tutorial shows the user how to add a new position to a row of existing modules in the template.

## Add the new position in the positions.json file

The first step is to open the settings/layout/positions.json file. In this example we will add the top5 position to the top row.

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
	    "top4": "3",
	  	"top5": "3"
	},

Once you have made that change you will see in the template admin that the top5 position has been added to the layout tool.

![Added position](/images/adding-position/adding-top5.png)

To use the new module position in your layout simply click on it and save your template settings.

## Add the name of the positions to the templateDetails.xml

The nest step is to add the name of the new positions to the templateDetails.xml file. Open this file and locate the position group of entries eg starting with <position> and add the name of the new positions: 

	<position>top5</position>
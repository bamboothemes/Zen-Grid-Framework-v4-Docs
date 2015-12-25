---
title: Using module chrome to change the appearance of modules
menu: Module Chrome
taxonomy:
    category: docs
---

Module chrome is a way to create a specific type of display for your module content. All Zen Grid Framework v4 themes come with a standard set of module chromes.

## How do you assign a module chrome

Assigning a new module style to a module is as simple as selecting a style from the drop down list in the module manager.
>1. In your module manager edit the module you want to assign the new chrome to.
2. Click on the Advanced options tab
3. Scroll down the page and select the module style from the select list.
4. Click apply.

![Module Chrome](/images/documentation/chrome/chrome.png)

## Standard module chrome for ZGF4 themes

- zendefault - A default module chrome
- zentabs - a tabbed interface where the title of the module is used as the trigger for the tab
- zenslider - use the module title to slide open or closed a module
- Simple - A basic implementation of module markup				

## Developer note
The module chrome for each template can be found in the templates/[your template]/html/modules.php file of the template.
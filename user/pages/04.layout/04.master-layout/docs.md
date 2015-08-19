---
title: Adding a new master layout file
menu: Master layouts
taxonomy:
    category: docs
---


As of Zen Grid Framework v1.2 it is possible to specify a new master layout file to use with your template. This is a somewhat advanced feature that allows developers to create customised layouts that will not be overwritten upon update.

All templates are released with a single master layout file eg tpls/default.php which loads the relevant layout blocks (tpls/blocks). The new master layout functionality allows the developer to add a new .php file in the root of the templates/my-template/tpls/ folder and have it appear as an option in the template's layout settings. 

The Master layout select list will remain hidden until there are at least two master layout files in the tpls/ folder.
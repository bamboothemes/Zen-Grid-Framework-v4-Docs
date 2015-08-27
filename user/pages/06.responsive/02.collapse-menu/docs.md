---
title: Collapse menu options
taxonomy:
    category: docs
---

The collapsed menu setting determines the change in the display of the main menu when the browser is below or resized below the navcollapse value set in the breakpoints.

### Collapse Menu Settings
![Collapse Menu settings](/images/documentation/responsive/collapsemenu.jpg)
  
	
No Change
----
	
	
When this option is selected there the menu is not given any special treatment and will not collapse or change its display when the viewport is below the nav collapse value. This may be helpful for sites that have only a few menu items in their main menu. However in the vast majority of sites this will not be a suitable option.
	
	
Stacked
----

The stacked option adds a little more styling in that the menus items are forced to fill the entire width of the main container. All sub menu items are also hidden from view and are not available to your users.
	
This option may be applicable to some sites that have a small number of menu items, do not have important sub menu items and do not mind the menu taking up crucial area above the fold on small devices.
	
Select Menu
----



The select menu transforms the main navigation into a select box that contains all menu items that the user would see above the navcollapse breakpoint.
	
Menu items are displayed with sub menu items indented and nested beneath them. Any menu sub titles or menu icons will not show in the select menu.

Please be aware that the appearance of the select menu is markedly different across most browsers.

### Developer notes
The javascript for the select menu can be found in the js/libs/jquery.resmenu.min.js file. While the script is triggered in via javascript in the tpls/blocks/scripts.php file.
	
Toggle Menu
----


The toggle menu is displayed at the top of the page on browsers below the navcollapse breakpoint.
	
The script for the toggle menu dynamically adds the content of the main menu to the top of the page to create an accordion menu. Users can click on parent items to display child menu items.
	
If the top parent item is a link that link on first click will expand to reveal the contents of the child elements. When the user clicks the parent link again the link behaves as expected and directs the user to the link destination.
	
A toggle icon sits to the right of all parent icons and can be clicked to open and close the accordion panel regardless whether the parent item is a link, separator or menu heading.
	
### Developer notes

The togglemenu functionality uses the jQuery script called Meanmenu. The code for the toggle menu can be found in the js/libs/meanmenu.js and the script is triggered in the tpls/blocks/scripts.php file.
	
The togglemenu is styled via two separate less files. The core less /css required can be found in the zen/libs/zen/less/menu/meanmenu.less file. While the styling for the togglemenu can be found in the less/toggle.less file.
	
	
Offcanvas Menu
----
The offcanvas panel is a panel of content that sits off the main canvas of the page and is only revealed when the user clicks the offcanvas icon.

When offcanvas is selected as the collapse menu type the contents of the main navigation are dynamically added to the offcanvas panel.

The offcanvas menu is hidden from view on browsers wider than the navcollapse value and appears in the panel on browsers smaller than that breakpoint.	

The offcanvas panel can be displayed at any browser size. The setting for tha minimum width that the offcanvas panel is visible is controlled in the menus > offcanvas settings. In order to use this option for the navcollapse the offcanvas panel needs to have a minimum width of at least the nav collapse breakpoint. If it is below this threshold then the offcanvas panel will not appear when the menu is collapsed.
	
### Developer notes

The offcanvas functionality uses the jQuery script called Slidebars. The code for the offcanvas menu can be found in the js/libs/slidebars.js and the script is triggered in the tpls/blocks/scripts.php file.

The offcanvas panel is styled via two separate less files. The core less /css required can be found in the zen/libs/zen/less/_offcanvas.less file. While the styling for the offcanvas can be found in the less/offcanvas.less file.

The offcanvas panel has a number of color parameters set in the template settings.
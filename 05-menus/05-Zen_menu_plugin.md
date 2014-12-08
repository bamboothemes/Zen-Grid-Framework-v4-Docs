Zenmenu Plugin
====

The zenmenu plugin is a Joomla system plugin that adds mega menu functionality to your zen grid framework v4 based theme.

The plugin utilises special markup in your themes html overrides which means that you can add multiple columns, icons, subtitles and more to your menu using the core Joomla menu module.


Installing the Zenmenu plugin
-----
Installation of the Zenmenu plugin is performed via the Joomla extensions manager. 

The file can be downloaded via this link - <a href="http://joomlabamboo.com/index.php?option=com_docman&task=doc_download&gid=694&Itemid=">Download here</a>.

Publish the plugin
----
The plugin is not publish by default after installation so you will need to publish the plugin via the extension manager. Navigate to the the extensions > plugin manager and type "zen" into the search box. The Zen Menu plugin should appear in the filtered list. 

![Publish Zen Menu](/zen-grid-framework-4/images/menu/enable_zenmenu.png)
  
  
Click on the red status icon next to the plugin name to ensure it is published.


Edit a menu item
----

To see the menu params for the zenmenu plugin navigate to the menu manager and edit the menu item you wish to add mega menu functions to.

Click on the Zen Menu tab in the menu manager
----
![Publish Zen Menu](/zen-grid-framework-4/images/menu/zenmenu-tab.png)


Menu options
----
![Publish Zen Menu](/zen-grid-framework-4/images/menu/zenmenu-params.png)


### Subtitle
The subtitle option adds subtext to the menu item. 
The text is wrapped in a span tag with the class .zen-menu-caption.

### Icon
Select from any of the icons available in the Font Awesome library. See the Font Awesome website for a full list. <a href="http://fortawesome.github.io/Font-Awesome/">Visit Font Awesome</a>

In order to have Font Awesome icons display in your menu you need to be including the Font Awesome library in your template settings or via the Zen Shortcode plugin.

Please read the <a href="http://docs.joomlabamboo.com/zen-grid-framework-4/theme/working-with-font-awesome.html">working with Font Awesome</a> documentation for more information.

### Group sub menu items
This option displays any of the sub menu items from the current menu item without the need for the user to hover over the parent. When this option is disabled the menu behaves as a usual dropdown menu does - the sub menus are only shown when the user hovers over the parent.

When this option is enabled the child items are automatically displayed without the need to hover over the parent.

This option is not suitable for top level menu items and should only be added to sub or sub sub menu parent items.

### Multiple columns
The multiple column option turns any grouped sub menu items into a multiple column menu. Select to display the menu in up to 4 columns in the menu. 

This option is not applicable to ungrouped menu items.


### Fullwidth
This setting displays any child items in a full width menu that spans the entirety of the navigation div's width. This may or may not span the full width of the container depending on the way the theme is set up to display.

This setting can only be applied to parent items.

### Select a module
This setting adds a module to the menu item. The module is selected by name in the dropdown list and is then displayed below the menu title of the item the module is being assigned to.

Controlling the main content area
----

All Zen Grid Framework v4 (ZGF4) based themes provide the option to hide the main content area on the front page of your site.

This option is aimed at creating a frontpage that only uses content generated from modules. This can be an effective way to showcase your site's key information without using Joomla's own Featured view.

Enable the hide front page option
----
![Hide Main content](../../images/layout/hide-main-content.jpg)



Sometimes your content is hidden on pages other than the front page
----
Joomla uses an id based system for determining which modules to display on the page. THe id is derived form the site's menu structure and when there is no menu item for a particular view the setup for the front page view is displayed.

If you have the hide main content option enabled it is highly likely that your content will be hidden from view. To fix this you simply need to create a menu item that points to the content you wish to display - blog category, search component etc.

For a more indepth analysis on this issue and the work around please read our blog post on <a href="http://www.joomlabamboo.com/blog/how-to-joomla/implementing-a-fix-for-menu-item-ids-in-joomla">implementing a fix for the Joomla menu id issue</a>.
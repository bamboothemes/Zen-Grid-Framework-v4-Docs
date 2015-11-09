---
title: Zen Shortcode Effects
menu: Effects
taxonomy:
    category: docs
---

 
## Adding effects and using additional classes for Shortcode icons.

v1.3+ of the plugin allows the user to specify some of the options seen on the <a href="http://fortawesome.github.io/Font-Awesome/examples/">Font Awesome examples page</a>.

To take advantage of the effects in your content you need to follow the syntax specified below.

	{zen-iconname}effect1|effect2:Content{/zen-iconname}

A real world example of this may look like the following:

	{zen-heart}spin|3x:This is my content{/zen-heart}

Add that code to your content item will result in a heart icon being rendered on the page that also spins and is 3 three times the size of the standard font size for that tag. In addition to the words "This is my content" would be rendered after the icon.


Please Note:
Effects need to be separated using the | symbol.
Content must be preceded by the : symbol.

## Advanced delimiter option 
This is an option that was added to v1.4.0 of the plugin.

Enabling this option changes the delimiter to ||| rather than the default delimiter which is |.

To enable this go to the extensions manager in your Joomla site and edit the Zen Shortcode settings.


![htaccess maker](/images/shortcodes/shortcode-delimiter.png)

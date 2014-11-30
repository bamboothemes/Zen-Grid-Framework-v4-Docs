Working with the Font Awesome Font Library
====
 
Zen Grid Framework v4 themes use the <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a> font icon library to render some of it's elements on the page. The manner in which you want to use the template should determine the option required for the Font Awesome panel found at the bottom of the theme panel.

<img src="images/fontawesome.jpg" alt="image" />

There are three basic options for including Font Awesome with your theme.
- Do not include
- Minimum
- Full Library

Do not include
----
This option will not load any icons from the Font Awesome library into your css file when clicking the compile less button or saving your theme. If you do this then the required fonts for the following functions in the template will not show:

- Accordion
- Hidden Panel trigger
- Menu icons
- Social icons
	

If you are not using any of these functions with the template then it will be safe to use the do not include option.

Zen Shortcode plugin compatibility
----

If you intended to use the Zen Shortcode plugin to render icons then you will either need to set this option to at least the minumum level and most likely the full level, or include the font awesome library via the plugin settings. The Zen Shortcode plugin makes it possible to load the Font Awesome library via a local file or via the Font Awesome CDN.

Minimum
----

The minimum setting for Font Awesome library includes the icons required for functioning of the elements above plus some commonly used font icons.


Full
----

The full setting for Font Awesome library includes all of the font icons available in the v4.1 of Font Awesome fontlibrary.
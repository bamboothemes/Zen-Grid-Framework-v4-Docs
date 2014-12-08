Working with the Font Awesome Font Library
====
 
Zen Grid Framework v4 themes use the <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a> font icon library to render some of it's elements on the page. The manner in which you want to use the template and require the Font Awesome via 3rd party components should determine the option required for the Font Awesome panel found at the bottom of the theme panel.

![Font Awesome](/zen-grid-framework-4/images/theme/fontawesome.jpg)


Options
----

There are three basic options for including Font Awesome with your theme.
- Do not include
- Minimum
- Full Library

Font Awesome is required for the Zen Shortcode plugin
----

The Zen shortcode plugin makes it possible to use shortform snippets to render font icons as well as other types of displays and styling.

If you intend to use the Zen Shortcode plugin to render icons then you will either need to:
- set this option to at least the minimum level if only using a small selection of icons
- set this option to full library to include all of the icons. 
- set this option to none and include the font awesome library via the shortcode plugin settings. 
  
The Zen Shortcode plugin makes it possible to load the Font Awesome library via a local file, via the Font Awesome CDN and as well as specify a custom name space for the font prefix.

How to include Font Awesome library when using 3rd party components
---
If you are using a 3rd party component that requires the Font Awesome library that uses the default name space (fa) then you will need to do the following:
- Set the Font Awesome option in the template to none.
- Enable the Font Awesome settings in the Zen Shortcode plugin. 
- Ensure the prefix for the icons is fa-.


Understanding Font Awesome template options
----

Do not include
----
This option will not load any icons from the Font Awesome library into your css file when clicking the compile less button or saving your theme. If you do this then the required fonts for the following functions in the template will not show:

- Accordion
- Hidden Panel trigger
- Menu icons
- Social icons
	

If you are not using any of these functions with the template then it will be safe to use the do not include option.



Minimum
----

The minimum setting for Font Awesome library includes the icons required for functioning of the elements above plus some commonly used font icons.


Full
----

The full setting for Font Awesome library includes all of the font icons available in the v4.1 of Font Awesome fontlibrary.
---
title: Loading the latest Font Awesome library via CDN
taxonomy:
    category: docs
---

In some cases you may wish to load the latest version of the Font Awesome library rather than use the version of the Font Awesome library that is shipped with your template.

## Steps

a. Navigate to extensions > plugin manager 
b. Filter the results to show the shortcodes plugin

![Shortcodes](/images/font-awesome/shortcodes.png)

c. Edit the plugin settings and navigate to the options panel.

d. Set the Load Font Awesome CSS option to "Load latest via CDN".

![Font Awesome CDN](/images/font-awesome/latest-font-awesome-cdn.png)

e. Set the custom prefix for the plugin to fa fa-

![Font Awesome Prefix](/images/font-awesome/set-font-awesome-prefix.png)
 
e. Save the plugin settings.


## Disable Font Awesome icons in your template

If you are using a Zen Grid Framework v4 based theme then you will need to also disable the Font Awesome library in the template. This will prevent the template from loading it's own version of the Font Awesome library and will ensure that the syntax used for the remote / cdn version of the plugin is used for all elements int he template that use Font Awesome icons.

![Font Awesome Prefix](/images/font-awesome/disable-font-awesome.png)
 


---
title: Using development mode to load less files in the browser
menu: Development mode
taxonomy:
    category: docs
---

If you are working on a live server though and wish to work directly with less files there is a development mode found in the settings panel which can be enabled for this use.

![Live Watch Mode](/images/documentation/performance/less-live-watch.jpg)



When development mode is enabled all less files loaded by the template are loaded in the browser. So rather than loading the css/theme.my-theme-name.css file you will see template.less, menu.less etc loading if you were to view the page with the wen inspector.

This option requires no compiling so after a change is made to one of these files and then the browser is refreshed you will see the changes on your website.

This option is meant to be used purely for development purposes and should be disabled after making the changes required for your theme. After making these changes and disabling the development feature you will then need to compile less to css in your template admin.

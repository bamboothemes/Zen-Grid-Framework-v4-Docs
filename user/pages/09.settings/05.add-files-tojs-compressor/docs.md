---
title: Adding Javascript
taxonomy:
    category: docs
---


![Javascript Compressor](/images/documentation/performance/javascript-compressor.jpg)

## Add external javascript files to the template javascript
If you would like to compress external or additional javascript files inside the single template javascript file then you can add the relative path to the javascript file in the text area here. Each file needs to be entered on a new line.

In order to compress the new file into the template.js file you will need to also click the compress scripts button as seen in the screen shot and then proceed to save the template by clicking the save or save and close button at the top of the page.

## Compress js after updates
If you have recently updated your template either manually or updating the template package using one of our official releases you may need to re-compress scripts to have any updated javascript display oin your page.

After clicking on the compress scripts button a javascript file is created that references the id for this specific instance of the template. As an example if the id for the template is 78 (as specified in the Joomla installation) then a file called template-78.js will be written to the js folder of the template.
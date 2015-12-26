---
title: Using Google Fonts
taxonomy:
    category: docs
---

## Overview

Zen Grid Framework v4 themes have the ability to embed any of the google fonts found on the <a href="https://www.google.com/fonts">Google web font directory</a>.

Google fonts can be applied to any of the 5 areas of the template which include: body, logo, headings, menu and custom.

## Selecting the google font option?

The first step is to select google fonts from the drop down list of fonts in the template's font panel.

![Body Font](/images/documentation/fonts/body-font.png)


## Choosing a font to use
The next step is to add the name of the font you want to use for this rule. To find the correct syntax visit the page of the google font you want to embed.

For this example we will use the Open Sans font rule. To find the correct syntax visit the webfont directory and click ont he quick use icon.

![Quick Use](/images/documentation/fonts/quick-use.png)


The quick use page for Open Sans looks like this:

![Quick Use Page](/images/documentation/fonts/quick-use-page.png)

## Adding the correct code
Scroll down to the Add this code to your website section and look for the code that is highlighted in the screenshot below. The code we want to use in the template setting is the name of the font and any font weight we may have opted to use.

![Google Font Code](/images/documentation/fonts/font-example-code.png)

So in this example we want to use Open Sans and use the 700 font weight. 

![Font Name](/images/documentation/fonts/font-name.png)


The text we need to add for the font Google Font is Open+Sans. Please note that the + sign is required here to ensure the correct file is loaded. 

This is output in the head of the page in two places:

1. A link to the font file:

		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans" type="text/css" />
	
2. As a css rule 

		html > body {font-family: 'Open Sans';}

## Specifying the font weight

The font weight is applied by adding the desired font weight via the font weight setting as per the following:

![Font Weight](/images/documentation/fonts/weight.png)

The font weight is added to the less variables that are used in the template's css when you save or compile your theme. After compiling your theme using the settings above the css rules for the p tags in your site will look like this:

	p {
	    margin: 0 0 30px;
	    line-height: 1.68em;
	    font-weight: 700;
	    font-size: 13px;
	    color: #0c2436;
	}
	

## Developer Note

If you are using the font loader on your site then the code would be inserted into the bottom of the page and look like this:

	<script type="text/javascript">
				      WebFontConfig = {
				      
				      google: {
				          families: [ 
				          	'Open+Sans'  ]}
				      };
				      
				      (function() {
				        var wf = document.createElement('script');
				        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
				            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
				        wf.type = 'text/javascript';
				        wf.async = 'true';
				        var s = document.getElementsByTagName('script')[0];
				        s.parentNode.insertBefore(wf, s);
				      })();
				</script>
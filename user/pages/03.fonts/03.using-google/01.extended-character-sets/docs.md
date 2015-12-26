---
title: Using extended character sets
taxonomy:
    category: docs
---


Using extended character sets in Zen Grid Framework v4 themes is possible by simply using the code provided in the quick use page for your selected Google font.

The screenshot below highlights the code required to apply the Vietnamese character set for the Roboto font.

![Extended Character Sets](/images/documentation/fonts/extended-font.png)


The code required is:

	Roboto&subset=latin,vietnamese


This needs to be added to the font option as per the screenshot below:

![extended-setting](/images/documentation/fonts/extended-setting.png)

The font file is then loaded via this href link:

	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto&subset=latin,vietnamese" type="text/css" />
	  
And the following css is embedded into the page:

	html > body {font-family: 'Roboto'}

Now if we add a sample of Vietnamese Lorem Ipsum in the page you can see the text is rendered using the extended characters for the Vietnamese language.

![Vietnamese](/images/documentation/fonts/viet-sample.png)
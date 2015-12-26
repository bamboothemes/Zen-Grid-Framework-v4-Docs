---
title: Fonts
taxonomy:
    category: docs
---

# Font Panel

Zen Grid Framework version 4 themes have the ability to control the fonts in your template across five different area of your site. These areas are: body, headings, menu, logo and custom.

Css is inserted into the head of the template based on your settings in the template admin. The css that is created will look somethign like the following code snippets.


## Examples 
### body
	html > body {
		font-family: 'Open Sans';
	}
	

### headings
	h1, h2, h3, h4, h5, h6, blockquote {
		font-family: 'Open Sans';
	}

### menu
	#navwrap li a, #navwrap li span {
		font-family: 'Open Sans';
	}
		
		
### logo	
	#logo h1,#logo h2,#logo h3,#logo h4 {
		font-family: 'Lato';
	}
	
## Developer Note:
The code responsible for adding this to the template head can be found in the tpls/blocks/fonts.php file.
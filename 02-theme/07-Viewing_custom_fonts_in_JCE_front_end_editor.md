Viewing custom font selection in JCE's front end editor
====

<a href="https://www.joomlacontenteditor.net/">JCE</a> is one of the most popular wysiwyg editors for Joomla. It provides a robust and versatile solution for working with your Joomla content.

By default JCE is set to load your template's css/template.css file. However if you are using custom fonts, and in particular google fonts they will not be displayed in the editor by default.

Future versions of the framework will have this functionality however if you need to render fonts in your site's editor using the fonts specified in your template settings using JCE then you will need to follow these extra steps.

## Create a custom editor css file.
- Go to your site's css folder and create a new file called editor_custom.css
- In this file you need to import the site's template.css file or even your site's css file.
This can be done by adding the following code:
- @import "template.css";

In this file you need to also specify the fonts used in your template settings. In the example below we are loading Rochester and Open Sans:

	@import url(http://fonts.googleapis.com/css?family=Rochester);
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:300);
	
	body {
		font-family: 'Rochester', sans-serif !important;
		font-weight: 300;
	}
	
	h1,h2,h3,h4,h5,h6 {
		font-family: 'Rochester', sans-serif;
	}
	
	p {
		font-family: 'Open Sans', sans-serif;
	}

## Set JCE to load your new editor_custom.css file.
- Navigate to components > JCE > Editor Global Configuration in your site's admin.
- Scroll to the Formattign and Display section and select custom css from the editor styles select box.
- In the input box that appears type: templates/$template/css/editor_custom.css
- Click save in the top left hand corner of the screen.

Now when you visit the front end editor for your site you should view the font's specified in your editor_custom.css file.

This is a temporary measure and future versions of the framework will do this for you.
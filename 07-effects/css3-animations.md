CSS3 Animations
====
	
The CSS3 effects option adds animations to entire rows of modules in your template. The animation is triggered when the content becomes viewable on the page. If the content is viewable on page load then the animation is fired straight away whereas if the content is below the fold the animation is triggered as the user scrolls down and the content becomes viewable. 


Animations are added to the entire row as seen in the screenshot below.


Grid System and rows
-----

Zen Grid Framework v4 themes are based on a system of rows of grids. The settings for the animation effects refer to the row of modules found in one grid. You can see the grid row and their respective module positions below:


- top - top1, top2, top3, top4
- header - header1, header2, header3, header4
- banner - banner
- grid1 - grid1, grid2, grid3, grid4
- grid2 - grid5, grid6, grid7, grid8
- grid3 - grid9, grid10, grid11, grid12
- main - abovecontent, sidebar1, sidebar2, below
- grid4 - grid13, grid14, grid15, grid16
- grid5 - grid17, grid18, grid19, grid20
- grid6 - grid21, grid22, grid23, grid24
- bottom - bottom1, bottom2, bottom3, bottom4, bottom5, bottom6
- Footer - footer and copyright
	

Adding, removing or adjusting an already assigned animation requires that the less files be recompiled to css. The animate.css library adds a lot of page weight if the entire library is included so we only include the required animations based on your settings.

### Developer notes


Wow.js is used to trigger the animation events. <a href="http://mynameismatthieu.com/WOW/">Visit website</a>

The wow.js file can be found in the js/libs/ folder.

The animate.css less library is a fork of the original animate.css library and can be found <a href="https://github.com/machito/animate.less">here</a>.

The animate less files can be found in the zen/libs/zen/animate folder.	

If the animation library is enabled and your chosen animation has been compiled to the theme's css file it is possible to use the animation in your content or template using classes such as:

	zen-animate fadeInUpBig animated
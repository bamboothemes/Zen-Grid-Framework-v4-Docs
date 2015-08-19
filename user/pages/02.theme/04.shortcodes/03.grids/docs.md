---
title: Grid Layouts
taxonomy:
    category: docs
---

In addition to being able to render buttons, icons and other styled blocks of content, Zen Shortcodes is able to render complex grid based layouts inside your Joomla content.

The grid used by the Zen Shortcode plugin uses the grid built into all Zen Grid Framework v4 based themes. Like most css based grids, the grid uses a 12 column grid to divide the space along an entire row of content. In order to create a row of content that is divided into multiple blocks the code blocks must not add up to more than 12 columns. Each time your block count reaches 12 you need to end that row and then create a new row.

### Please note
It is not possible to create complex layouts that include nesting rows within rows. To create more advanced rows we advise that you use raw html in your article or use a preset template created in a layout tool such as <a href="https://www.nonumber.nl/extensions/contenttemplater">Nonumber's Content Templater component</a>.

## Example grid
The following code will render two blocks of text that fill approximately 50% of the width of the parent container

<pre>{zen-row}{zen-6}This is a block of content that will take up half of the width of the page.{/zen-6}{zen-6}This is a block of content that will take up half of the width of the page.{/zen-6}{zen-row}</pre>
	

## A 3 column grid
The following code will render 3 blocks of content that take up 5, 2 and 5 columns respectively.

	{zen-row}{zen-5}This is a block of content that will take up 5/12 (or 5 columns) of the width of the page.{/zen-5}{zen-2}This is a block of content that will take up 1/6 (or 2 columns) of the width of the page.{/zen-2}{zen-5}This is a block of content that will take up 5/12 (or 5 columns) of the width of the page.{/zen-5}{/zen-row}

Please note: Each row of content needs to be wrapped in a block of zen-row tags. The zen-row tags render the required .zen-row classes which enable the use of multiple rows of content in your items.

## Creating empty columns in your grid
In order to create an empty column in your row of content, it is necessary to add a non-breaking space to the empty grid. The [code]&nbsp;[/code] entity forces the grid to expand to it's full width and without it  the grid will simply collapse.

An example of this can be seen below:

	{zen-row}{zen-5}This is a block of content that will take up 5/12 (or 5 columns) of the width of the page.{/zen-5}{zen-2}&nbsp;{/zen-2}{zen-5}This is a block of content that will take up 5/12 (or 5 columns) of the width of the page.{/zen-5}{/zen-row}


## A note for users who used this functionality in the JB Type plugin.

For users that are used to using the JB Type plugin please note that the syntax used for rendering grids in your content has changed. Each row needs to be wrapped in a specific zen-row tag. This is used in order to avoid needing to add the _last tag used in the JB Type plugin.

## List of available grids

- zen-1
- zen-2
- zen-3
- zen-4
- zen-5
- zen-6
- zen-7
- zen-8
- zen-9
- zen-10
- zen-11
- zen-12

## Syntax used to render a grid.

	{zen-row}{zen-6}{/zen-6}{/zen-row}
	

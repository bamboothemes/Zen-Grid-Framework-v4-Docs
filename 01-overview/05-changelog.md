Changelog
======

This is the changelog for the Zen Grid Framework v4. The framework is a folder of files that are included in each ZGFv4 based theme. When a theme is updated the framework is automatically updated. The changelog below is a record of changes made to the framework.

v1.2.1
---
Fix for Joomla 3.4 compatibility

v1.2.0
---

New Features
----
- Adds get_files field for display files in a select box. use type="get_files" folder="your_folder" target=".php" show_empty="0" 
- Adds new row_style class. Retrieves styles in the less/styles folder and applies the class to the main row.
- Adds image resize field, helper and lib
- Adds more hooks to html class. language, rendered layout and specified layout, .responsive-disabled

Improvements
----
- Adds alert-message for framework alert styles
- html selector now uses width:100% in reset
- Responsive code is now wrapped in .responsive-enabled class
- Fix widths for bootstrap checkbox and radio buttons
- Check folder exists in main get_files class
- Adds cursor pointer for toggle menu
- Adds pad-push-col and pad-pull-col classes
- Improved check main layout function
- Adds missing bootstrap responsive classes
- Adds getMainLayout function
- Check mobile detect class already loaded
- Add system variable for loading assets with doc or as links.(custom.css now definitely loads last)

Bug Fixes
----
- Fix google fonts not loading when using https and not using font loader
- Left align menu items using zen center
- Fix responsive stacked menu
- Fix checkbox setting not saved if changed form default
- Fix not being able to compile rgba less values
- Fix chz z-index 
- Fix animate and font awesome not available in dev mode
- Fix for warning regarding object for params check- 


v1.1.0
----
- Adds new folder layout field for upcoming Focus2 template
- Remove padding and margin on footer .zen-container to compensate for footer now displayed as a spotlight
- Prevent custom asset function outputting empty script tags
- Adds min-height variable to select boxes
- Adds subheading field for settings
- Adds folder icon for modal screens
- Rename default config and default theme files to settings/default-config.json and settings/default-theme.json
- Fix offcanvas visible on all screens
- Move btn mixin out of framework
- Adds file and folder libs to main zen class
- Adds Joomla language to body class
- Adds onepage menu to body class
- Adds no change option to layout tool to prevent collapsing of modules at breakpoints
- Adds container, tablet max width variables for the container
- Fix undefined variables when loading new layouts
- Prevent warnings when copying a template
- Replace preset folder name when loading new settings
- Fix z-index on menu 
- Fix border-color for inputs

v1.0.8
---
- Fix pencil not showing for jmodedit icon. 
- Fix Base Font compile issue. 

v1.0.7 
---
- Renamed zen folder to zengrid to avoid Site Ground reserved name issue
- Appends current time to json file to avoid cache
- Sets post rather than get for posting Theme data


v1.0.6
----
- Appends version number to admin assets via a variable
- Fix disappearing module rows in layout tool if only one item left in row
- Optimised save routine
- Change language for default style for load settings dropdown
- fix menu assignment not getting saved


v1.0.5
----
- Adds clearing for tab-content
- Fix typo for load settings
- Change the display for style overview
- Compile button change
- Adds versioning to assets to avoid cache
- Improved save routine
- Admin improvements
- Fix save and close not closing
- Fix bs3 incompatibility with inputs
- Fix message box not re-appearing when load settings
- Improved language for template.css enabled. 
- Devmode and template.css warnings are now dynamic.


v1.0.4
----
- Removes need to refresh page when clicking save to save changes
- Moves message box to top of the page.

Notes - Please ensure you clear your browser cache as the css for the admin has changed.


v1.0.3
----
- Adds support for custom fonts
- Fix double quotes added to inputs

v1.0.2
----
- Change to naming convention for template settings files.


v1.0.1
----
- Safety check for settings file.

v1.0
----
Initial release.
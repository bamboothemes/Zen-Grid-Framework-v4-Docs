How to update Zen Grid Framework v4 themes
======

Each Zen Grid Framework v4 (ZGF4) based themes contains a folder called zen in your template's root folder. This folder contains all of the necessary code for the ZGF4.

When a new zgf4 based theme is updated the latest version of the framework is already included in the template zip file. There are no extra plugins to install or update when updating your template.

How to install a template update
----

Our template change logs generally list the features, bug fixes and other changes made to a template when it gets updated.  You can see the <a href="http://docs.joomlabamboo.com/changelogs/xero-changelog">Xero change log here</a> as an example.

### Most users should just use the installer
For most users all that is required when a new template is released is to install the update via the Joomla template manager. Any themes, custom.css files or custom.less files, layouts or theme presets you have create will be unaffected by the update.

### Other users may need to install the package manually. This is especially the case if changes have been made to the layout files or any other files that are included in the zip file that we distribute.

An example of this may be where the user has added custom html code to one of the tpls/blocks/ files. If changes have been made to these files then they will be overwritten using the installer.

### Whats the best way to do a manual update?
This really depends on how many changes you have made to the core files. However if there are only a few files that have been edited it is recommended to follow this workflow for an update.

#### If relatively few files have been changed

1. Take a backup of the entire template folder eg templates/xero/
2. Download this backup to your harddrive
3. Install the distributed template zip from Joomlabamboo
4. Reinstate or merge your edits into the newly installed files.

#### If lots of files have been changed
If on the other hand you have made changes to many of the files it is suggested that you follow the following sequence.

1. Take a backup of the entire template folder eg templates/xero/
2. Download the latest version of the template from the server
3. Check the change log under the changed files section for your template.
4. Manually upload or merge the files that are listed on the change log as changed.

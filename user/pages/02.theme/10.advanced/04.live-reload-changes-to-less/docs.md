---
title: Using watch mode to live reload changes to less files
menu: Live reload
taxonomy:
    category: docs
---

There is a somewhat experimental option called watch mode for times when the development mode is enabled. Watch mode is capable of refreshing the page when changes are made to less files without refreshing the browser. When a change is made to any of the template less file the less javascript listens for those changes and then renders the changes on the page.

This mode is marked as experimental because in some cases this can lead to high cpu usage on your computer. It is advised that if you wish to use this option to use it sparingly - ie turn it off when not directly making changes to the less files.
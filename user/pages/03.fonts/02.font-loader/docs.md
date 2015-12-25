---
title: Font Loader
taxonomy:
    category: docs
---


## What are the benefits of using the font loader?

![Font Loader](/images/documentation/fonts/font-loader.png)

When enabled the javascript font loader is used to load fonts. If you are loading a single google font it's likely that having this option disabled will yield a better page load speed. 

However if you load more than one font the font loader allows the the page to load before the resources are loaded. This can lead to a FOUT - flash of unstyled content, but it may mean that the page loads faster.

When the setting is disabled the template will load your fonts via the standard css link in the head of the template. 

## Which setting should you use?
In most cases users should have this option disabled. 


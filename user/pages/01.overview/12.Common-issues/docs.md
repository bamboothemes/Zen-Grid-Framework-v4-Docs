---
title: Common Issues
taxonomy:
    category: docs
---

## Less does not finish compiling 

We have been seeing in some cases the compile to less behaviour timing out in some of our zgfv4 themes.

The error can be caused by a number of different factors but generally it's to do with inadequate server resources, an error in the less file or a security protocol that limits the ajax functionality in our templates.

## Some factors in the behaviour you are experiencing are:

1. Using Admintools Pro and it's blocking the scripts.

docs.joomlabamboo.com/zen-grid-framework-4/overview/Using-ZGFv4-themes-with-Admintools-pro.html

2. Your servers execution time isn't high enough to allow for the processing of the Less.

stackoverflow.com/questions/16171132/how-to-increase-maximum-execution-time-in-php

3. Your server memory isn't high enough to allow you to process the less.

docs.joomlabamboo.com/getting-started/how-to-check-php-memory-limit-for-joomla-3

4. There is an error in one of the less variables. You may need to look in the inspector to see this.

5. Your site is currently offline. If your site is offline then you will need to open a new tab for your website and login to the front end of the website.

We have been building in better warnings and guides regarding this in the templates - more coming in v1.3. But for now this post should stand as a guide for helping trouble shoot the issues.

If you have trouble with this please post a support ticket with J login details so we can look into the issue for you.
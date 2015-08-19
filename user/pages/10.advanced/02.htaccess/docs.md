---
title: Speed up your site
taxonomy:
    category: docs
---

Zen Grid Framework V4 themes are capable of scoring very high results in Google page speed and Yslow, more or less straight out of the box. You can see our run down of this on the announcement of the Xero start theme on the <a href="http://www.joomlabamboo.com/blog/template-news/introducing-xero">Joomlabamboo blog</a>.

To push your site even further we have collected a number of htaccess rules that can be added to the standard Joomla htaccess file.  Htaccess is essentially a file that is able to tell the browser how to interact with your site in a specific way - there is more to it than that but that's it in a nutshell.

You can download the htaccess file <a href="https://github.com/locii/zgf4-htaccess">here</a>. The file is a complete htaccess file for Joomla plus some code that will:

- Enable gzip compression
- Specify proper mime type for assets
- Add expires headers to files
- Remove etags

There are more elements in the file however you will need to uncomment them in order to apply them to your site.

Please be mindful that htaccess rules are sometimes complicated to implement and should only be used by experienced users. Incorrect editing of this file may cause a 500 internal server error and prevent the loading of your site.

If you experience issues after implementing this file revert to your original file or the default Joomla htaccess file.

You will also need to rename the htaccess.txt file to .htaccess in the repository.

There are many more things that can be done to improve your sites performance however this is a good place to start.
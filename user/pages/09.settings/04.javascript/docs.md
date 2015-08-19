---
title: Javascript
taxonomy:
    category: docs
---



![Javascript settings](/images/documentation/performance/javascript.jpg)
  


### Using gzip option on local hosts
It seems that there is a bug in localhost servers (MAMP and XAMP) that leads to an error when using the gzip function for javascript files. 

This error manifests as an unexpected token error in the browser console. There are also cascading errors as a result of this that relate to some of the scripts used by the template.

It is recommended to disable this function when developing a site locally to avoid the issue.
  
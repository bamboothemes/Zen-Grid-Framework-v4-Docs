---
title: Using Admintools
taxonomy:
    category: docs
---

<a href="https://www.akeebabackup.com/products/admin-tools.html">Admintools Pro</a> is a very useful tool for managing and protecting your Joomla website. The pro version of Admintools contains a number of security features that can block some of the functionality required by your template.

The functions that are blocked by Admintools pro are:
- Reading template json files in the template admin
- Compiling less to css in the template admin
- Saving changes to your theme in the template admin.

Using Admintools while developing your site
---

In most cases it wont be necessary to use these advanced security features while developing your site and as such it is suggested to install Admintools after you have finished developing your site and before you launch your site.

However if you have a live public facing site that requires advanced security protocols during development then following the instructions below will allow you to be able to develop the site and use the the advanced security options in Admintools pro.

Allow direct access to php files in your template folder
---
This admin tools setting disallows the processing of php files in your template folder. In order to be able to compress or compile scripts you need to add an exception for your template files in the htaccess maker.

![htaccess maker](/images/documentation/admintools/htaccess.png)
  


1. Enter your template folder in the htaccess maker options under the "Allow direct access, including .php files, to these directories" option. The path required for this option will be:<br/><br/>
templates/your_template_name/
<br/><br />

![No Direct Access](/images/documentation/admintools/direct-php-access.png)
  

Configure the Web Application Firewall
---
These settings offer protection against front end users being able to manipulate your template on the front end of your site. It is used in the template to allow access to the json files which store configuration data as well as access to the various ajax functionality used in the template.


In order to allow access to this template functionality you need to "Allow access to the template=your_template_name" parameter in the Web Application fire Wall settings. <br /><br />
- To access these settings navigate to Admintools in your Joomla admin via components > admintools. 

![waf](/images/documentation/admintools/waf.png)

![configure waf](/images/documentation/admintools/configure-waf.png)

- Click on the Web Application Firewall options.
- Click on the Configure WAF button.
- Navigate to the Visual fingerprinting protection tab.
- Set the Block tmpl=foo system template switch to no.
- Set the Block template=foo site template switch to no.
- Set the allow site templates switch to yes.

![Waf Settings](/images/documentation/admintools/waf-settings.png)

Adding these exceptions in the Admintools pro options should allow your template to function correctly.
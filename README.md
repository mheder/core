# core

## About core
core is a bunch of php files that help you with SQL commands, UI translations, logging and some other aspects of php application development

## using core

Just create a php file e.g. in the root of your project and include 
```
include "core/init_core.php";
```
to access the functions

### conf.php
You can configure the basic aspects of the application in conf.php. These are the baseurl, some theming and branding, html, css files, database connection, other secrets, attribute mapping to environment variables, email and other basic aspects.

### Basics (css, html, images)

**Fundamental branding and theming bits** can be modified on the file system level. The logo images and the css file are relative to the ```$core['baseurl']``` setting in **conf.php**. No '/' at the beginning required.

* **left-side logo**: in **conf.php** find the variable named ```$core['left-logo']```. 
* **logo/banner on the top of the main content**: in **conf.php** find the variable named ```$core['head-logo']```.  
* **additional css**: in conf.php find the variable named ```$core['customcss']```. This css will be loaded after the main css.
* **main css**: if you want to replace the build-in css completely, you can override ```$core['css']```. Note that in this case your new css has to provide styling for everything that is displayed.

**Note**: the above variables are are all loaded by **core/style/header.php** The following section explains how to override this file, and all the other html generator files completely. In this case you can still use access the variables above as global values, but obviously in your html themes you have to make sure they take effect. 

**Overriding html completely**: to override everything that is presented on the web, you can override any or all of the following three files
* **header.php**: contains html head, css/js loading, page title, etc, the left side bar and the top banner. 
* **footer.php**: contains the footer html.
* **html_elements.php**: contains functions that generate tables, forms, simple paragraphs, etc.

The default files are located at **core/style/<header|footer|elements>.php**. If you create your own files and put them under **customizations/<header|footer|elements>.php** respectively. If any of these customization files exist, it will take precedence and the original won't be loaded. The recommended method to create theming files is to copy the default and modify it or in your customization, loading them like ```require_once "core/style/html_elements.php";``` and then add extra functions.

**Favicon**: No branding is complete without a favicon. Simply replace **favicon.ico** in the root of the application.

### Advanced (texts, AUP, emails)

**Static Content** is usually rich (html) content. It is stored in **core_content**

### Translations

Translations form shorter text elements are in the **core_lang** table. The entries may be sprintf strings in which values will be replaced, like:
```
Email successfully verified: %s
```
Obviously, this only makes sense if the system actually passes on a parameter. As a reference, always look at the original English translation and use as many wildcards as the origical does.

Vojo.co Drupal Sites Folder
===========================

This repository holds all the custom modules used for the Vojo.co hosted VozMob service.  Certain capabilities are required for vojo that are NOT required in VozMob - those modules and themes live in here (as git submodules).  

Developers
----------

If you're a developer, this can be a pain to set up right because Drupal looks at the url to decide which sites folder to use.  For testing with Mac OS X Lion, I found it best to add this to the first line of your `/private/etc/hosts` file: `127.0.0.1       localhost.vojo.co`.  And this to your `/private/etc/apache2/Users/[username].conf`:

```
<VirtualHost *:80>  
    DocumentRoot "[path_to_drupal_html_folder]"
    ServerName localhost.vojo.co
</VirtualHost>
```

This tells your computer to route request to localhost.vojo.co to your local machine, rather than vojo.co, and to server up the local copy of the drupal app there. 

Source:
  http://thecoredump.org/2011/09/editing-the-hosts-file-in-mac-os-x-lion/

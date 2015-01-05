Requirements:
------------

Folder structure must be like this:

```
T
|/data
|/public/<your website's root>
|
```
** Make sure /data is writtable by the user the webserver is running under (www-data, etc)

Instalation:
-----------

1) Place the contents of the heatmap folder (and the folder itself) in your site's root.
2) Right after the body tag, place this:

```
<?php include("heatmap/runner.php"); ?>
```

3) That's it!

The app will install the necessary JS files as well as wrap everything in a div for tracking purposes.
I couldn't think of an easier way to do this.

Optional:
--------

In /heatmap/includes/config.php you can set a 'password' to prevent unauthorized access and/or deletion to
your heatmap database. Unfortunately the 'contents' of the database can be seen by someone making a call
to the data.php file, but at least won't be readily available to everyone.

This was a 2 hours job so whatever... :)


Usage:
-----

- Tracking:
There's no need to do anything for tracking to happen. Just point the browser to your URL, it should load the files and no errors should be reported.

- Visualization:
Point your browser to the URL and pass two parameters in the URL:

action=view
token=a7aa3875fc4422ca78f7b4216205b9a5


It would look like this:

http://yoursite.com/yourpage.php?action=view&token=a7aa3875fc4422ca78f7b4216205b9a5



- Database Reset:
Point your browser to the URL and pass two parameters in the URL:

action=reset
token=a7aa3875fc4422ca78f7b4216205b9a5

It would look like this:

http://yoursite.com/yourpage.php?action=reset&token=a7aa3875fc4422ca78f7b4216205b9a5


Example:
-------

Check the 'sample.php' file (duh!)

Sebastian Barale - 2015.


====================================================================================
(*)  The token can be changed in the /heatmap/includes/config.php file.
(**) JS files are minified with uglify

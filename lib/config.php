<?php
//this file you'll have to create directly on the VM or use FTP to move it
//this should not and will not be on github, -points if it's seen on github.

//for Heroku use the below segment and delete the duplicate below
$cleardb_url      = parse_url(getenv("JAWSDB_URL"));
$dbhost   = $cleardb_url["host"];
$dbuser = $cleardb_url["user"];
$dbpass = $cleardb_url["pass"];
$dbdatabase       = substr($cleardb_url["path"],1);

//for everyone else fill in these variable strings with the connection
//details from your respective servers and delete the Heroku block above
$dbhost = "localhost";//this should be fine for all but NJIT, which uses "sql1.njit.edu" or "sql2.njit.edu" or "sql3.njit.edu"
$dbuser = "ucid";//your ucid since we follow this pattern
$dbpass = "";//database password generated or chosen per respective steps
$dbdatabase = "ucid";//your ucid since we follow this pattern
?>

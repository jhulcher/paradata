<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

// return array(
//
// 	// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
// 	'server' => '127.0.0.1',
//
// 	// The name of the database to select.
// 	'database' => 'para',
//
// 	// The database username to connect with.
// 	'user' => 'root',
//
// 	// The database password to connect with.
// 	'password' => '',
//
// 	// The prefix to use when naming tables. This can be no more than 5 characters.
// 	'tablePrefix' => 'craft',
//
// );
$url=parse_url(getenv(“CLEARDB_DATABASE_URL”));
return array(
‘server’ => $url[“host”],
‘user’ => $url[“root”],
‘password’ => $url[“”],
‘database’ => substr($url[“path”],1),
‘tablePrefix’ => ‘craft’,
);

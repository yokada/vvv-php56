<?php
/**
 * If a custom dashboard file exists, load that instead of the default
 * dashboard provided by Varying Vagrant Vagrants. This file should be
 * located in the `www/default/` directory.
 */
if ( file_exists( 'dashboard-custom.php' ) ) {
	include( 'dashboard-custom.php' );
	exit;
}

// Begin default dashboard.
?>
<!DOCTYPE html>
<html>
<head>
	<title>Varying Vagrant Vagrants Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<ul class="nav">
	<li class="active"><a href="#">Home</a></li>
	<li><a href="https://github.com/varying-vagrant-vagrants/vvv/">Repository</a></li>
	<li><a href="database-admin/">phpMyAdmin</a></li>
	<li><a href="memcached-admin/">phpMemcachedAdmin</a></li>
	<li><a href="opcache-status/opcache.php">Opcache Status</a></li>
	<li><a href="http://vvv2.dev:1080">Mailcatcher</a></li>
	<li><a href="webgrind/">Webgrind</a></li>
	<li><a href="phpinfo/">PHP Info</a></li>
	<li><a href="php-status?html&amp;full">PHP Status</a></li>
</ul>

<ul class="nav">
	<li><a href="http://local2.wordpress.dev/">http://local2.wordpress.dev</a> for WordPress stable (www/wordpress-default)</li>
	<li><a href="http://src2.wordpress-develop.dev/">http://src2.wordpress-develop.dev</a> for trunk WordPress development files (www/wordpress-develop/src)</li>
	<li><a href="http://build2.wordpress-develop.dev/">http://build2.wordpress-develop.dev</a> for a Grunt build of those development files (www/wordpress-develop/build)</li>
</ul>
</body>
</html>

<?php

/*
------------------
List of CI changes
------------------

** Removed index.php from base URL:
/.htaccess

RewriteEngine On 
RewriteCond %{REQUEST_FILENAME} !-f 
RewriteCond %{REQUEST_FILENAME} !-d 
RewriteRule ^(.*)$ index.php/$1 [L]


** Autoload helper classes:
/application/config/autoload.php

$autoload['helper'] = array('url');


** Edit base URL:
/application/config/config.php

$config['base_url'] = 'http://127.0.0.1/ci_test1/';


** Autoload libraries classes:
/application/config/autoload.php

$autoload['libraries'] = array('database', 'session');


** Default controller:
/application/config/route.php

$route['default_controller'] = 'blog';


/** Set database settings:
/application/config/database.php

	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
    'database' => 'magentodb',


** Set path to save sessions:
/application/config/config.php

$config['sess_save_path'] = sys_get_temp_dir();


** gpg second try2.

*/

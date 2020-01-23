<?php

'pgsql' => [
      'driver' => 'mysql',
        'host' => env('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'heroku_a0f357ae2a19f14'),
        'username' => env('DB_USERNAME', 'b5195c1c044b09'),
        'password' => env('DB_PASSWORD', '33f7fbd4'),
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
    ]

// $cleardb_url = parse_url(getenv('CLEARDB_DATABASE_URL'));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"], 1);

// $active_group = 'default';
// $active_record = TRUE;

// $db['default']['hostname'] = $cleardb_server;
// $db['default']['username'] = $cleardb_username;
// $db['default']['password'] = $cleardb_password;
// $db['default']['database'] = $cleardb_db;
// $db['default']['dbdriver'] = 'mysql';
// $db['default']['dbprefix'] = '';
// $db['default']['pconnect'] = TRUE;
// $db['default']['db_debug'] = TRUE;
// $db['default']['cache_on'] = FALSE;
// $db['default']['cachedir'] = '';
// $db['default']['char_set'] = 'utf8';
// $db['default']['dbcollat'] = 'utf8_general_ci';
// $db['default']['swap_pre'] = '';
// $db['default']['autoinit'] = TRUE;
// $db['default']['stricton'] = FALSE;
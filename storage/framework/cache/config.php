<?php return array (
  'acf' => 
  array (
    'defaults' => 
    array (
      'repeater' => 
      array (
        'layout' => 'block',
      ),
      'trueFalse' => 
      array (
        'ui' => 1,
      ),
      'select' => 
      array (
        'ui' => 1,
      ),
    ),
  ),
  'app' => 
  array (
    'name' => 'Poolhouse',
    'env' => 'production',
    'debug' => true,
    'timezone' => '',
    'preflight' => false,
    'globals' => false,
    'locale' => 'en_US',
    'fallback_locale' => 'en',
    'providers' => 
    array (
      0 => 'App\\Providers\\ThemeServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'assets' => 
  array (
    'default' => 'theme',
    'manifests' => 
    array (
      'theme' => 
      array (
        'strategy' => 'relative',
        'path' => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse/dist',
        'uri' => 'http://poolhouse.test/wp-content/themes/poolhouse/dist',
        'manifest' => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse/dist/mix-manifest.json',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/Users/edward/Desktop/wordpress/poolhouse/wp-content',
        'url' => 'http://poolhouse.test/wp-content',
        'visibility' => 'public',
      ),
      'wordpress' => 
      array (
        'driver' => 'local',
        'root' => '/Users/edward/Desktop/wordpress/poolhouse/',
        'url' => 'http://poolhouse.test',
        'visibility' => 'public',
      ),
      'sage' => 
      array (
        'driver' => 'local',
        'root' => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse',
        'url' => 'http://poolhouse.test/wp-content/themes/poolhouse',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
      ),
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse/storage/logs/sage.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse/storage/logs/sage.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'App Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse/storage/logs/sage.log',
      ),
    ),
  ),
  'poet' => 
  array (
    'post' => 
    array (
    ),
    'block' => 
    array (
    ),
    'categories' => 
    array (
      'custom' => 
      array (
        'title' => 'Custom Blocks',
        'icon' => 'dashicons-schedule',
      ),
    ),
    'palette' => 
    array (
    ),
    'menu' => 
    array (
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse/resources/views',
      1 => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse/resources/views',
    ),
    'compiled' => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse/storage/framework/views',
    'debug' => false,
    'namespaces' => 
    array (
    ),
    'directives' => 
    array (
      'asset' => 'Roots\\Acorn\\Assets\\AssetDirective',
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/Users/edward/Desktop/wordpress/poolhouse/wp-content/themes/poolhouse/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'poolhouse_cache',
  ),
);

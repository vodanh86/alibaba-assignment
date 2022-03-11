<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],

        'oss1' => [
            'driver' => 'oss',
            'access_id' => 'LTAI5tD4DH7ezmZuD2sGrbft',
            'access_key' =>  'bLSdJpKSTf2fjlLmI3DjbLOIe4pBuk',
            'bucket' => 'alibaba-assigment',
            'endpoint' => 'oss-cn-hangzhou.aliyuncs.com ', // take Hangzhou as an example
            'cdndomain' => "[1jeemaa1] ", // it needs to be written when CDN is used, HTTPS: // plus bucket domain name
            'SSL' => true, // true use 'HTTPS: //' false use 'http: //'. Default false,
            'iscname' => false, // use custom domain name or not, true: storage.url() will use custom CDN or domain name to generate file URL, false: use external node to generate URL
            'debug' => false,
        ],

        'oss' => [
            'driver' => 's3',
            'key' => env('OSS_ACCESS_KEY_ID'),
            'secret' => env('OSS_SECRET_ACCESS_KEY'),
            'region' => env('OSS_REGION'),
            'bucket' => env('OSS_BUCKET'),
            'endpoint' => env('OSS_ENDPOINT'),
            'url' => env('OSS_URL'),
            'visibility' => 'public', // Default visibility
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];

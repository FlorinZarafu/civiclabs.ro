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
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver'     => 'local',
            'root'       => storage_path('app/local'),
            'visibility' => 'private',
        ],

        'public' => [
            'driver'     => 'local',
            'root'       => storage_path('app/public'),
            'url'        => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'applicationDocuments' => [
            'driver'     => 's3',
            'key'        => env('APPLICATION_DOCS_ACCESS_KEY_ID', env('AWS_ACCESS_KEY_ID')),
            'secret'     => env('APPLICATION_DOCS_SECRET_ACCESS_KEY', env('AWS_SECRET_ACCESS_KEY')),
            'region'     => env('APPLICATION_DOCS_DEFAULT_REGION', env('AWS_DEFAULT_REGION')),
            'bucket'     => env('APPLICATION_DOCS_BUCKET', env('AWS_BUCKET')),
            'url'        => env('APPLICATION_DOCS_URL', env('AWS_URL')),
            'visibility' => 'private',
        ],

        's3' => [
            'driver'     => 's3',
            'key'        => env('AWS_ACCESS_KEY_ID'),
            'secret'     => env('AWS_SECRET_ACCESS_KEY'),
            'region'     => env('AWS_DEFAULT_REGION'),
            'bucket'     => env('AWS_BUCKET'),
            'url'        => env('AWS_URL'),
        ],

    ],

];

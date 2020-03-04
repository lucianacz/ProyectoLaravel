<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    /*'github' => [
    'client_id' => env('GITHUB_CLIENT_ID'),
    'client_secret' => env('GITHUB_CLIENT_SECRET'),
    'redirect' => 'http://your-callback-url',
    ],*/

    'google' => [
    'client_id' => '842266895911-g6pfioqu668rme7q38rukd7f2so3hasr.apps.googleusercontent.com',
    'client_secret' => 'Wgp8GypqlO73NrDTe1K32oS1',
    'redirect' => 'http://culturasariri.com.ar/google/redireccion',
    ],


    'facebook' => [
    'client_id' => '734076347092155',
    'client_secret' => '743a68bc08c09cde434aa7f1c5771190',
    'redirect' => 'http://culturasariri.com.ar/facebook/redireccion',
    ],


];

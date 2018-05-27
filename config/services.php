<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' =>'772810269774649',
        'client_secret' =>'62ed31944375d36e3edab6b8adde84c8',
        'redirect' =>'https://localhost/u-forum/public/login/facebook/callback'
    ],


    'twitter' => [
        'client_id' =>'x21sYEybBjB4Y3iysJs5cmCFR',
        'client_secret' =>'0ttY5LeNuWpJvqzb85ePDHLgjAeNvrsiMkPXTX8OiufShyA78Y',
        'redirect' =>'http://127.0.0.1:8000/login/twitter/callback'
    ],

    'google' => [
        'client_id' =>'840623826023-pnlo9u1mtqint9afakg7s7520fil4sos.apps.googleusercontent.com',
        'client_secret' =>'IvSDYi_jCeHFa-p4jM2dj_zJ',
        'redirect' =>'https://127.0.0.1:8000/login/google/callback'
    ],

];

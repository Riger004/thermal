<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '935330979858770',
    'client_secret' => '7d425806e479e2f9b09ecde8ad4440bd',
    'redirect' => 'http://thermal.app:8000/auth/facebook/callback',
    ],

     'google' => [
    'client_id' => '102125098109-7h6qise08qgj4bfkv8gu8nd0q17vghr5.apps.googleusercontent.com',
    'client_secret' => 'm2T-FOsth5ewkSg6me9lY1YZ',
    'redirect' => 'http://thermal.app:8000/auth/google/callback',
    ],

];

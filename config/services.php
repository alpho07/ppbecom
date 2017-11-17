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
        'domain' => 'sandbox06379c1b93d244f1aad1b398131b3ecb.mailgun.org',
        'secret' => 'key-e07b8d6a7900c14899c305c9db40c907',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => 'pk_test_FE92z9o3yzB4gQbS6agPBlfW ',
        'secret' => 'sk_test_DWQqcZIlkcveBmsl5IgfhCpU ',
    ],

];

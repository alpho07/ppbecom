<?php

return [
    'driver' => 'mailgun',
    'host' => 'sandbox06379c1b93d244f1aad1b398131b3ecb.mailgun.org',
    'port' => 587,
    'from' => ['address' => 'developers@kodeinfo.com', 'name' => 'KodeInfo'],
    'reply-to' => ['address' => 'developers@kodeinfo.com','name' => 'developers@kodeinfo.com'],
    'encryption' => 'tls',
    'username' => '',
    'password' => '',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
    'use_mailgun' => true,
];

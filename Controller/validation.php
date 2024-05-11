<?php
$inputs = [
    'email' => [
        'filter' => FILTER_VALIDATE_EMAIL,
        'error' => 'Please enter a valid email address.'
    ],
    'password'=>[
        'filter' => FILTER_VALIDATE_REGEXP,
        'option' => ['regexp'=> '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'],
        'error' => 'min 8 chara, one digit, one special chara, one upper and lower case.'
    ],
    'new_password'=>[
        'filter' => FILTER_VALIDATE_REGEXP,
        'option' => ['regexp'=> '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'],
        'error' => 'min 8 chara, one digit, one special chara, one upper and lower case.'
    ],
    'confirm_password'=>[
        'filter' => FILTER_VALIDATE_REGEXP,
        'option' => ['regexp'=> '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'],
        'error' => 'min 8 chara, one digit, one special chara, one upper and lower case.'
    ],
    'age' => [
        'filter' => FILTER_VALIDATE_INT,
        'option' => ['min_range' => 1, 'max_range' => 100],
        'error' => 'Please enter a valid age between 1 and 100.'
    ],
    'phone' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'option' => ['regexp' => '/^[0-9]{11}$/'],
        'error' => 'Please enter a valid 11-digit phone number.'
    ],
    'name' =>[
        'filter' => FILTER_VALIDATE_REGEXP,
        'option' => ['regexp' =>  '/^[a-zA-Z\s\-]+$/'],
        'error' => 'Please enter a valid name'
    ],
    'address' =>[
        'filter' => FILTER_VALIDATE_REGEXP,
        'option' => ['regexp'=> '/^(?=.*?[A-Za-z0-9-#?!@$%^&*-]).{1,}$/'],
        'error' => 'Please enter a valid address'
    ]

];








?>
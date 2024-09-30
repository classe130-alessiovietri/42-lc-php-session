<?php

session_start();

if (
    isset($_POST['username'])
    &&
    isset($_POST['password'])
    &&
    // isset($_SESSION['user']) == false
    !isset($_SESSION['user'])
) {
    var_dump($_POST);

    $users = [
        [
            'id' => 1,
            'username' => 'mario',
            'email' => 'mario@boolean.careers',
            'password' => 'password',
            'created_at' => '30/09/2024',
        ],
        [
            'id' => 2,
            'username' => 'francesca',
            'email' => 'francesca@boolean.careers',
            'password' => 'password',
            'created_at' => '30/09/2024',
        ],
    ];

    $foundUser = null;
    foreach ($users as $i => $user) {
        if (
            $user['username'] == $_POST['username']
            &&
            $user['password'] == $_POST['password']
        ) {
            $foundUser = $user;
            break;
        }
    }

    if ($foundUser != null) {
        $_SESSION['user'] = [
            'id' => $foundUser['id'],
            'username' => $foundUser['username'],
            'email' => $foundUser['email'],
        ];
        
        header('Location: ./profile.php');
    }
    else {
        header('Location: ./index.php');
    }
}
else if (isset($_SESSION['user'])) {
    header('Location: ./profile.php');
}
else {
    header('Location: ./index.php');
}
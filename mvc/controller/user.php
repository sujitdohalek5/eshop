<?php



function user_home(){

    $site_data = [
        'contact_mail'  => 'sujitdohalek5@gmail.com',
        'contact_no'  => '7768026045',
    ];

    $include_page = ['home'];
    include 'mvc/views/user/index.php';
}


user_home();
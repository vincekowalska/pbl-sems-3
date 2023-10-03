<?php

$db_connection = pg_connect("host=localhost dbname=test_apps user=apps_user password=a");

function login($email, $password){
    global $db_connection;
    $email_check_query = "SELECT FROM user_datas where email='$email'";
    $email_check_post = pg_query( $db_connection, $email_check_query);
    if ($email_check_post){
        $password_check_quey = "SELECT FROM user_datas where password='$password'";
        $password_check_post = pg_query( $db_connection, $password_check_quey);
        if ($password_check_post){
            return "Login Succes";
        }
        else {
            return "Wrong Password";
        }
    }
    else {
        return "Invalid Username";
    }
}
?>
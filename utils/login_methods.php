<?php
    session_start();

    if(!isset($_SESSION['user'])){
        $_SESSION['user'] = "";
        $_SESSION['nome'] = "";
        $_SESSION['tipo'] = "";
    }

    function createHash($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    function testHash($password, $hash){
        return password_verify($password, $hash); 
    }

    function isLogged(){
        return empty($_SESSION['user']) ? false : true;
    }

    function createUser(){
        return 1;
    }

    function getTypeUser(){
        return $_SESSION['tipo'];
    }
?>
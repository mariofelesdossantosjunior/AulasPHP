<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 13/02/19
 * Time: 11:51
 */

$host = "localhost";
$user = "postgres";
$password = "Pkg1522pam";
$database = "ifpr";

$db = pg_connect("host=${host} port=5432 dbname=${database} user=${user} password=${password}");

if(!$db) {
    echo "Error : Unable to open database\n";
} else {
    echo "Opened database successfully\n";
}
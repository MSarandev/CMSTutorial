<?php
/**
 * Created by PhpStorm.
 * User: maxsarandev
 * Date: 22/06/2018
 * Time: 20:51
 */

define('DB_SERVER', 'localhost');
define('DB_USER', 'warehouse_user');
define('DB_PASS', 'root');
define('DB_DB1', 'warehouse_db');
$db_conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_DB1);

// test if connection was established, and print any errors
if($db_conn->connect_errno){
    die('<p>CONNECT FAILED -> '.$db_conn->connect_error);
}else{
    print('<p>Connection Established</p>');
}
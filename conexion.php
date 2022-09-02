<?php
define("MYSQL_HOST",     "mysql:host=localhost"); 
define("MYSQL_USER",     "root");                 
define("MYSQL_PASSWORD", "");                     

function conectaSerDB()
{
    try {
        $tmp = new PDO(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $tmp->exec("set names utf8mb4");
        return($tmp);
    } catch(PDOException $e) {
        print "    <p>Error: No puede conectarse con la base de datos.</p>\n";
        print "\n";
        print "    <p>Error: " . $e->getMessage() ."</p>\n";
        exit();
    }
}

function conectaDb($dbcon)
{
    try {
        $tmp = new PDO(MYSQL_HOST.";dbname=".$dbcon, MYSQL_USER, MYSQL_PASSWORD);
        $tmp->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $tmp->exec("set names utf8mb4");
        return($tmp);
    } catch(PDOException $e) {
        print "    <p>Error: No puede conectarse con la base de datos.</p>\n";
        print "\n";
        print "    <p>Error: " . $e->getMessage() ."</p>\n";
        exit();
    }
}
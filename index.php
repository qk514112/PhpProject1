<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /** get images from database;
         *     connect database server;
         *         if connected;
         *             get images;
         *     close database;   
         **/
        //Database
        $mysql_host = '127.0.0.1';
        $mysql_username = 'root';
        $mysql_password = '123456';
        $mysql_database = 'test';
        $result = mysql_connect($mysql_host, $mysql_username, $mysql_password);
        if (!$result) {
            die(__LINE__ . ' Invalid connect: ' . mysql_error());
        }
        echo(mysql_error());
        echo("aaaaa");
         /** 
         * display images on screen;
         * scroll images automately;
         */
        ?>
    </body>
</html>

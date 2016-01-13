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
//        $result = mysql_connect($mysql_host, $mysql_username, $mysql_password);
//        if (!$result) {
//            die(__LINE__ . ' Invalid connect: ' . mysql_error());
//        }
//        mysql_select_db($mysql_database) or die("Unable to select database.");
//        $img_array = mysql_query("select url from t_img");
            
//        $connection = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
        
//        if ($connection->connect_error) {
//            die("Connection failed:".$connection->connect_error);
//        }
        
         /** 
         * display images on screen;
         * scroll images automately;
         */
        ?>
    </body>
</html>

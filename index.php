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
        $dbms='mysql';
        $host = '127.0.0.1';
        $username = 'root';
        $password = '123456';
        $database = 'test';
        $dsn = "$dbms:host=$host;dbname=$database";
        
        try {
            $db = new PDO($dsn, $username, $password);
            echo "connect succussfully";
        } catch (Exception $exc) {
            die("Error!:".$exc->getMessage()."<br/>");
        }

        $rs=$db->query("SELECT * FROM t_img");
        $result_arr = $rs->fetchAll();
        print_r($result_arr);

         /** 
         * display images on screen;
         * scroll images automately;
         */
        ?>
    </body>
</html>

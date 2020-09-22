<html>

    <head> 
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>삼일 이사|익스프레스</title>
        
    </head>
    
    <body>
        
        
<pre>
<?php

    require_once('secret.php');

    try {
                include "secret.php";
        
                $db= new PDO($db_info, $db_name, $db_password);
                
                
            } catch (PDOException $e) {
                
                echo 'DB접속에러: '. $e->getMessage();
            } 


            $records =$db->query('select * from specific_form');
            ?>
        <table>
            <tr>
                <th>id</th>
                <th>고객명</th>
                <th>전송 시간</th>
            </tr>
            <?php
                while($record= $records->fetch()) {
                
                echo("<a href=
                echo("<tr>");    
                echo("<td>".$record['id']."</td>");
                echo("<td>".$record['customer_name']."</td>");
                echo("<td>".$record['sent_time']."</td>");
                echo("</tr>");   
                
            }
            ?>
        
    </table>

    


    </pre>
    
    </body>
    
</html>

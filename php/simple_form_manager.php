<pre>


<?php

    require_once('secret.php');

    try {
        
                $db= new PDO($db_info, $db_name, $db_password);
                
                
            } catch (PDOException $e) {
                
                echo 'DB접속에러: '. $e->getMessage();
            } 


    $records =$db->query('select * from simple_form');
?>
    <table>
        <tr>
            <th>id</th>
            <th>고객명</th>
            <th>이사 종류</th>
            <th>서비스 종류</th>
            <th>이사 날짜</th>
            <th>연락처-1</th>
            <th>연락처-2</th>
            <th>연락처-3</th>
            <th>현주소</th>
            <th>도착지</th>
            <th>전송 시간</th>
        </tr>
        <?php
            while($record= $records->fetch()) {
                
            echo("<tr>");    
            echo("<td>".$record['id']."</td>");
            echo("<td>".$record['customer_name']."</td>");
            echo("<td>".$record['24_kind']."</td>");
            echo("<td>".$record['service_kind']."</td>");
            echo("<td>".$record['moving_date']."</td>");
            echo("<td>".$record['phone_number_1']."</td>");
            echo("<td>".$record['phone_number_2']."</td>");
            echo("<td>".$record['phone_number_3']."</td>");
            echo("<td>".$record['now_address']."</td>");
            echo("<td>".$record['after_address']."</td>");
            echo("<td>".$record['sent_time']."</td>");
            echo("</tr>");   
                
            }
        ?>
        
    </table>

    


</pre>
<html>

    <head> 
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>삼일 이사|익스프레스</title>
        
    </head>
    
    <body>
        <?php
        
            require_once('secret.php');
        
            try {
                        include "secret.php";
                
                        $db= new PDO($db_info, $db_name, $db_password);


                    } catch (PDOException $e) {

                        echo 'DB접속에러: '. $e->getMessage();
                    } 
               
            $stmt = $db->prepare("SELECT * FROM specific_form WHERE ID='".$_GET['id']."'"); 
            $stmt->execute(); 
            $row = $stmt->fetch();
        
            echo($row['customer_name']);
        

        ?>
    

        <table>
        
            <tr>
                <th>이름</th>
                <td><?php echo($row['customer_name']); ?></td>
            </tr>
            
            <tr>
                <th>전화번호</th>
                <td><?php echo($row['phone_1']."-".$row['phone_2']."-".$row['phone_3']); ?></td>
            </tr>
            
            <tr>
                <th>이사 날짜</th>
                <td><?php echo($row['moving_date']); ?></td>
            </tr>
            
            <tr>
                <th>이사 종류/ 서비스 종류</th>
                <td><?php echo($row['24_kind']."/".$row['service_kind']); ?></td>
            </tr>
            
            <tr>
                <th>현재 주소, 층수</th>
                <td><?php echo($row['now_address']."/".$row['specific_now_address']."/".$row['now_floor']."층"); ?></td>
            </tr>
            
            <tr>
                <th>이사가는곳, 층수</th>
                <td><?php echo($row['after_address']."/".$row['specific_after_address']."/".$row['after_floor']."층"); ?></td>
            </tr>
            
            <tr>
                <th>현재 집 평수</th>
                <td><?php echo($row['dimension'])?></td>
            </tr>
            
            
                
        </table>

    
    </body>
    
    
</html>
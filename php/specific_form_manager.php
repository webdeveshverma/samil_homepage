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

            $records = $db->query('select * from specific_form');

                $names = array('customer_name', 'phone_1', 'phone_2', 'phone_3', 'moving_date', '24_kind', 'service_kind', 'now_address', 'specific_now_address', 'now_floor', 'after_address', 'specific_after_address', 'after_floor', 'dimension', 'sofa', 'sofa_specific', 'refrigerator', 'refrigerator_specific', 'washer', 'washer_specific', 'closet', 'closet_specific', 'bed', 'bed_specific', 'bookshelf', 'bookshelf_specific', 'desk', 'desk_specific', 'tv_table', 'tv_table_specific', 'cabinet', 'cabinet_specific', 'drawers', 'drawers_specific', 'tv', 'tv_specific', 'k_table', 'k_table_specific', 'instrument', 'instrument_specific', 'others');
                
                
                
                while($record= $records->fetch()) {
                    echo ("<form action='specific_form_manager_2.php' method='get'>");    
                    echo ("<button name='id' value =".$record['id'].">");
                    
                    echo ("id: ".$record['id'].", 이름: ".$record['customer_name'].", 전송시간: ".$record['sent_time']); echo ("</button></br>");
                    
                    echo ("</form>");
                    
                }
            
?>
    
</pre>
    
    </body>
    
</html>

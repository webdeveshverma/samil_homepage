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

        <tr>
            <th>소파</th>
            <td><?php 
                    if($row['sofa'] == 1) {
                        echo ("있음, 세부사항:". $row['sofa_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>냉장고</th>
            <td><?php 
                    if($row['refrigerator'] == 1) {
                        echo ("있음, 세부사항:". $row['refrigerator_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>세탁기</th>
            <td><?php 
                    if($row['washer'] == 1) {
                        echo ("있음, 세부사항:". $row['washer_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>장농</th>
            <td><?php 
                    if($row['closet'] == 1) {
                        echo ("있음, 세부사항:". $row['closet_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>침대</th>
            <td><?php 
                    if($row['bed'] == 1) {
                        echo ("있음, 세부사항:". $row['bed_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>책장</th>
            <td><?php 
                    if($row['bookshelf'] == 1) {
                        echo ("있음, 세부사항:". $row['bookshelf_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>책상</th>
            <td><?php 
                    if($row['desk'] == 1) {
                        echo ("있음, 세부사항:". $row['desk_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>거실장</th>
            <td><?php 
                    if($row['tv_table'] == 1) {
                        echo ("있음, 세부사항:". $row['tv_tabel_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>장식장</th>
            <td><?php 
                    if($row['cabinet'] == 1) {
                        echo ("있음, 세부사항:". $row['cabinet_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>서랍장</th>
            <td><?php 
                    if($row['drawers'] == 1) {
                        echo ("있음, 세부사항:". $row['drawers_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>TV</th>
            <td><?php 
                    if($row['tv'] == 1) {
                        echo ("있음, 세부사항:". $row['tv_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>식탁</th>
            <td><?php 
                    if($row['k_table'] == 1) {
                        echo ("있음, 세부사항:". $row['k_table_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>악기</th>
            <td><?php 
                    if($row['instrument'] == 1) {
                        echo ("있음, 세부사항:". $row['instrument_specific']);
                    } else {
                        
                        echo ("없음");
                    }
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>그 외</th>
            <td><?php 
                        echo ($row['sofa_specific']);
                    
                    ?></td>
        </tr>
        
        <tr>
            <th>전송 시간</th>
            <td><?php 
                    echo ($row['sent_time']);
                    
                    ?></td>
        </tr>
        
        



    </table>




</body>


</html>

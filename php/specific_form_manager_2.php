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


            $records =$db->query('select * from specific_form');
        ?>
    
        <table>
        
            <tr>
                <th>이름</th>
                <td></td>
            </tr>
            
            <tr>
                <th>전화번호</th>
                <td></td>
            </tr>
            
            <tr>
                <th>이사 날짜</th>
                <td></td>
            </tr>
            
            <tr>
                <th>이사 종류/ 서비스 종류</th>
                <td></td>
            </tr>
            
            <tr>
                <th>현재 주소, 층수</th>
                <td></td>
            </tr>
            
            <tr>
                <th>이사가는곳, 층수</th>
                <td></td>
            </tr>
            
            <tr>
                <th>현재 집 평수</th>
                <td></td>
            </tr>
            
            <?php
            
            <tr>
                <th></th>
                <td></td>
            </tr>
                
            ?>
            
            
            
        
        </table>
        
    </body>
    
    
</html>
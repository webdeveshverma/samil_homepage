

<?php
    require_once('secret.php');

    try {
                
                $db= new PDO($db_info, $db_name, $db_password);
                
                
            } catch (PDOException $e) {
                
                echo 'DB접속에러: '. $e->getMessage();
            } 


    $count = $db->exec('insert into simple_form set customer_name="'. $_POST['customer_name'] . '", 24_kind="' . $_POST['24_kind'] . '", service_kind="' . $_POST['service_kind'] . '", moving_date="' . $_POST['moving_date'] . '", phone_number_1="' . $_POST['phone_1']. '", phone_number_2="' . $_POST['phone_2']. '", phone_number_3="'. $_POST['phone_3'] . '", now_address="' . $_POST['simple_now_address']. '", after_address="'. $_POST['simple_after_address']. '", sent_time=now()');

    /*
    $count = $db->exec('insert into simple_form set customer_name="ISOVA", 24_kind="가아정이사", service_kind="보관이사", moving_date="2018-04-26", phone_number_1="010", phone_number_2="9241", phone_number_3="7166", now_address="쇼와구 하자마쵸 27-1 Nitech Cosmo Village D-105", after_address="스기나미구 카미오기 1-22-10 프레루 오기쿠보 101호", sent_time=now()');
    */

    echo("간편 견적요청이 접수되었습니다!")
    

?>
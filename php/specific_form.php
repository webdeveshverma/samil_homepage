<?php
    
    require_once('secret.php');

    try {
                include "secret.php";
        
                $db= new PDO($db_info, $db_name, $db_password);
                
                
            } catch (PDOException $e) {
                
                echo 'DB접속에러: '. $e->getMessage();
            } 
    

    $names = array('customer_name', 'phone_1', 'phone_2', 'phone_3', 'moving_date', '24_kind', 'service_kind', 'now_address', 'specific_now_address', 'now_floor', 'after_address', 'specific_after_address', 'after_floor', 'dimension', 'sofa', 'sofa_specific', 'refrigerator', 'refrigerator_specific', 'washer', 'washer_specific', 'closet', 'closet_specific', 'bed', 'bed_specific', 'bookshelf', 'bookshelf_specific', 'desk', 'desk_specific', 'tv_table', 'tv_table_specific', 'cabinet', 'cabinet_specific', 'drawers', 'drawers_specific', 'tv', 'tv_specific', 'k_table', 'k_table_specific', 'instrument', 'instrument_specific', 'others');
    
    $count = $db->exec('insert into specific_form setcustomer_name="'. $_POST['customer_name']. '",phone_1="'. $_POST['phone_1']. '",phone_2="'. $_POST['phone_2']. '",phone_3="'. $_POST['phone_3']. '",moving_date="'. $_POST['moving_date']. '",24_kind="'. $_POST['24_kind']. '",service_kind="'. $_POST['service_kind']. '",now_address="'. $_POST['now_address']. '",specific_now_address="'. $_POST['specific_now_address']. '",now_floor="'. $_POST['now_floor']. '",after_address="'. $_POST['after_address']. '",specific_after_address="'. $_POST['specific_after_address']. '",after_floor="'. $_POST['after_floor']. '",dimension="'. $_POST['dimension']. '",sofa="'. $_POST['sofa']. '",sofa_specific="'. $_POST['sofa_specific']. '",refrigerator="'. $_POST['refrigerator']. '",refrigerator_specific="'. $_POST['refrigerator_specific']. '",washer="'. $_POST['washer']. '",washer_specific="'. $_POST['washer_specific']. '",closet="'. $_POST['closet']. '",closet_specific="'. $_POST['closet_specific']. '",bed="'. $_POST['bed']. '",bed_specific="'. $_POST['bed_specific']. '",bookshelf="'. $_POST['bookshelf']. '",bookshelf_specific="'. $_POST['bookshelf_specific']. '",desk="'. $_POST['desk']. '",desk_specific="'. $_POST['desk_specific']. '",tv_table="'. $_POST['tv_table']. '",tv_table_specific="'. $_POST['tv_table_specific']. '",cabinet="'. $_POST['cabinet']. '",cabinet_specific="'. $_POST['cabinet_specific']. '",drawers="'. $_POST['drawers']. '",drawers_specific="'. $_POST['drawers_specific']. '",tv="'. $_POST['tv']. '",tv_specific="'. $_POST['tv_specific']. '",k_table="'. $_POST['k_table']. '",k_table_specific="'. $_POST['k_table_specific']. '",instrument="'. $_POST['instrument']. '",instrument_specific="'. $_POST['instrument_specific']. '",others="'. $_POST['others']. '",sent_time=now()');
/*
    $x = "";
    
    
    foreach($names as $name) {
        
        $x .= "${name}=\"'. \$_POST['${name}']. '\",";
    }
    
    
    
    $count = $db->exec('insert into specific_form set'. $x. 'sent_time=now()');

    echo('insert into specific_form set'. $x. 'sent_time=now()');
*/

    echo("상세 견적요청이 접수되었습니다!");
    
    
    

?>
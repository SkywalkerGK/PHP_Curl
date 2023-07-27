<?php
            //PostMan
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://jsonplaceholder.typicode.com/photos',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            
            //เพิ่มโค้ดแปลงเป็นข้อมูล Json
            $obj = json_decode($response);
            //print_r($obj);
            echo '<br>';
            //echo $obj[0]->userId;

            for ($i=0; $i < 10 ; $i++) { //count($obj)
                echo $obj[$i]->id;
                echo '<br>';
                echo $obj[$i]->title;
                echo '<br>';
                echo $obj[$i]->url;
                echo '<br>';
            }

?>
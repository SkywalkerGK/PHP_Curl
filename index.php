<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container pt-5">
        <h2>1.ฺBasic</h2>
        <div class="d-flex flex-warp">
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
            //echo $obj[0]->userId;
            $html ='';

            for ($i=0; $i < 10 ; $i++) { //count($obj)
                $html.='<div class="card m-2" style="width: 18rem;">
                <img src=" '. $obj[$i]->thumbnailUrl .' " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'. $obj[$i]->title .'</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
                    <a href="'. $obj[$i]->url .'" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>';
            }
            echo $html;
            curl_close($curl);
            ?>


        </div>
        <br>
        <h2>2.Advanced</h2>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>
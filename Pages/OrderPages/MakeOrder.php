<?php
    
        $id         = $_POST["id"];
        $price      = $_POST["price"];
        $customerId = $_POST["customerID"];
        $qty        = $_POST["qty"];

        $idList = explode(",",$id[0]);
        $qtyList = explode(",",$qty[0]);
        $priceList = explode(",",$price[0]);
        $size = count($priceList);

        for($i = 0; $i < $size; $i++){
            $items[] = array(
                'id' => $idList[$i],
                'price' => $priceList[$i],
                "qty" => $qtyList[$i] 
            );
        }

        $data = array(
            'items' => $items,
            'customerId' => $customerId
        );

        $jsonFilePath = './PlaceOrder.json';

        if(file_exists($jsonFilePath)){
            $existingData = json_decode(file_get_contents($jsonFilePath), true);
            $existingData[] = $data;
        }else{
            $existingData = array($data);
        }

        $jsonData = json_encode($existingData, JSON_PRETTY_PRINT);
        file_put_contents($jsonFilePath, $jsonData);

    header("Location: ../Store/StorePage.php");
?>
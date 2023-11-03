<?php
    

        $invID      = $_POST["inventoryID"];
        $customerID = $_POST["customerID"];
        $qty        = $_POST["qty"];

        echo $invID . " " . $customerID . " " . $qty . "</br>";

        $data = array(
            'invID'      => $invID,
            'customerID' => $customerID,
            'qty'        => $qty
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

    
?>
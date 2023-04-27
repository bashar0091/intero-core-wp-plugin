<?php
if (isset($_POST['sub_btn'])) {
    $url = "https://adeso2.terrait.lt/companies";

    $username = "eshop";
    $password = "Uqf26wC8jYNB9jOp#4";

    $emailToCheck;
    if (isset($_POST['email_intero'])) {
        $emailToCheck = $_POST['email_intero'];
    }

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);

    curl_setopt($curl, CURLOPT_HTTPGET, true);

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "Authorization: Basic " . base64_encode($username . ":" . $password)
    ));

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    if(curl_errno($curl)) {
        echo "cURL Error: " . curl_error($curl);
    }

    curl_close($curl);

    $data = json_decode($response, true);

    if ($data) {
        $emailExists = false;
        foreach ($data as $company) {
            if (isset($company['Email']) && $company['Email'] === $emailToCheck) {
                $emailExists = true;
                break;
            }
        }

        if ($emailExists) {

            $url2 = "https://adeso2.terrait.lt/potentialities";
            $data = array();
            $data["CompanyID"] = $company['CompanyID'];
            $data["SumWithoutVat"] = 2;
            $data["EndDate"] = '2023-04-14T05:09:11.926Z';
            $data["Description"] = 'product des';

            $ch2 = curl_init();
            curl_setopt($ch2, CURLOPT_URL, $url2);
            curl_setopt($ch2, CURLOPT_POST, 1);
            curl_setopt($ch2, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch2, CURLOPT_USERPWD, $username . ':' . $password);

            $response = curl_exec($ch2);

            curl_close($ch2);

            // Handle the API response
            if ($response === false) {
                echo "There was an error with the request";
            } else {
                echo $response;
            }

        } else {
            
            $data = array();
            if (isset($_POST['email_intero'])) {
                $data["Email"] = $_POST['email_intero'];
            }
            if (isset($_POST['name_intero'])) {
                $data["FirstName"] = $_POST['name_intero'];
            }
            if (isset($_POST['surname_intero'])) {
                $data["LastName"] = $_POST['surname_intero'];
            }
            if (isset($_POST['address_intero'])) {
                $data["Address"] = $_POST['address_intero'];
            }
            if (isset($_POST['city_intero'])) {
                $data["City"] = $_POST['city_intero'];
            }

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);

            $response = curl_exec($ch);

            curl_close($ch);

            // Handle the API response
            if ($response === false) {
                echo "There was an error with the request";
            } else {
                echo $response;
            }
            
        }
    } else {
        echo "Failed to retrieve data from the API.";
    }
}  
?>
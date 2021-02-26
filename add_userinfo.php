<?php
$first = filter_input(INPUT_POST, 'first');
$last = filter_input(INPUT_POST, 'last');
$email = filter_input(INPUT_POST, 'email');
// if (!empty($first)){
//     if (!empty($last)){
//         if (!empty($email)){
            $host = "localhost";
            $dbusername = "id16052432_testuser";
            $dbpassword = "f9NyVmsS[H/3uLh$";
            $dbname = "id16052432_testdb";
            
            // Create connection
            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

            // Check if connection established successfully
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            else { echo "Connected to mysql database. "; }
            
            $sql = "INSERT INTO user_info (first_name, last_name, email)
            values ('$first','$last','$email')";
            
            if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
            }
            else{
                echo "Error: ". $sql ."
                ". $conn->error;
            }
            
            $conn->close();
        //}
        // else{
        //     echo "Email should not be empty";
        //     die();
        // }
//     }
//     else{
//         echo "Last name should not be empty";
//         die();
//     }
// }
// else{
//     echo "First name should not be empty";
//     die();
// }
?>
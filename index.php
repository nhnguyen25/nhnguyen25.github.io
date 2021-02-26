<?php
$first = filter_input(INPUT_POST, 'first');
$last = filter_input(INPUT_POST, 'last');
$email = filter_input(INPUT_POST, 'email');
// if (!empty($first)){
//     if (!empty($last)){
//         if (!empty($email)){
            $host = "localhost";
            $dbusername = "id16052432_testuser";
            $dbpassword = "";
            $dbname = "id16052432_testdb";
            
            // Create connection
            $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

            if (mysqli_connect_error()){
                die('Connect Error ('.mysqli_connect_errno().') '
                    .mysqli_connect_error());
            }
            else{
                $sql = "INSERT INTO user_info (first_name, last_name, email)
                values ('$first','$last','$email')";
                
                if ($conn->query($sql)){
                    echo "New record is inserted sucessfully";
                }
                else{
                    echo "Error: ".$sql ."
                    ".$conn->error;
                }
                
                $conn->close();
            }
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
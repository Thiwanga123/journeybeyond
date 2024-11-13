<?php 

    include '../Connection.php';

    if(isset($_POST['Submit'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        //Checking existing emails and names from the database
        $check = "SELECT * FROM `users` WHERE username = ? OR email = ?";
        $checkstmt = $conn->prepare($check);
        $checkstmt -> bind_param("ss",$username,$email);
        $checkstmt -> execute();
        $results = $checkstmt->get_result();

        //Displaying appropriate error messages
        if($results -> num_rows > 0){
           
        }

        //Password Validation
        if($password != $confirmpassword){
            echo "<p>Password Mismatch</p>";
        }else{
        //Password Hashing
        $hashedpassword = password_hash($password,PASSWORD_DEFAULT);

        //Inserting data after validations
        $sql = "INSERT INTO `users`(`name`, `username`, `email`, `hashed_password`) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt -> bind_param("ssss", $name,$username,$email,$hashedpassword);
        $stmt -> execute();
        }
       
        $conn ->close();
    }
?>
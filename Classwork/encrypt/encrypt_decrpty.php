<?php
    include_once 'DBConnect.php';
    $key = "63A@bc&D(e%Fg+HI#Jk!Lm^nO){p}q,rs>TU<vW;Xyz89";

    //Encrypted Function
    function encryptthis($data, $key) {
        $encryption_key = base64_decode($key);
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
        return base64_encode($encrypted . '::' . $iv);
    }

    //Decypted Function
    function decryptthis($data, $key) {
        $encryption_key = base64_decode($key);
        list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
        return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
    }
    
    if(isset($_POST['submit'])){

        
        $username=$_POST['username'];
        echo password_hash($username, PASSWORD_DEFAULT);
        
        $encrypted=encryptthis($username, $key);
        $decrypted=decryptthis($encrypted, $key);
        $userencrypt=$encrypted;
        $userdecrypt=$decrypted;
        echo '<h2>Original Data Username</h2>';
        echo '<p>'.$username.'</p>';
        echo '<h2>Encrypted Data</h2>';
        echo '<pre>'.$encrypted.'</pre>';
        echo '<h2>Decrypted Data</h2>';
        echo '<p>'.$decrypted.'</p>';

        $password=$_POST['password'];
        $encrypted=encryptthis($password, $key);
        $decrypted=decryptthis($encrypted, $key);
        $passencrypt=$encrypted;
        $passdecrypt=$decrypted;
        $sql = "INSERT INTO user (UserName, Password,userencrypt,passencrypt) 
        VALUES ('$userencrypt', '$passencrypt','$userdecrypt','$passdecrypt')";
        //mysqli_query use the connection string and the query to run the query
        if(mysqli_query($conn, $sql)){
            echo "Record inserted";
        }else{
            echo"Record not inserted";
        }
        //close connection
        mysqli_close($conn);
        echo '<h2>Original Data Password</h2>';
        echo '<p>'.$password.'</p>';
        echo '<h2>Encrypted Data</h2>';
        echo '<pre>'.$encrypted.'</pre>';
        echo '<h2>Decrypted Data</h2>';
        echo '<p>'.$decrypted.'</p>';
        header("location:result.php");
    }
?>
<Form method = "POST">
    <div class = "form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type = "text" class ="form-control" id = "username" name = "username" placeholder="username" required></br>
    <label for="exampleInputEmail1">Password</label>
    <input type = "password" class ="form-control" id = "password" name = "password" placeholder="password" required></br>
    <input type="submit" class="btn btn-primary" name = "submit">
    </div>
</Form>
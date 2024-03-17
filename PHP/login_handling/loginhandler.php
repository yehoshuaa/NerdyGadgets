<?php


//Var
$email    = $_POST['email'];
$password = $_POST['password'];


// Create connection
$conn = new mysqli('localhost', 'root', '', 'nerdy_gadgets_start');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$conn->query("USE nerdy_gadgets_start");

if ($_POST['type'] === 'login'){
//Login logic

    //Reset vars
    $result = [];
    $id = null;

    //Prepared statements to prevent SQL injection
    $stmt =  $conn->prepare("SELECT id FROM user WHERE email = ? AND password = ?;");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->bind_result($id);
    $stmt->fetch();
    $result = [$id];

    if ($result != []){
        session_start();
        $_SESSION['id'] = $result[0];
        echo $_SESSION['id'];
        header('Location: http://nerdygadgets.com/index.php');
    }else{

        echo "gegevens kloppen niet";

    }
}elseif ($_POST['type'] === 'registreer'){
    //Register logic

    $emailCheck = $conn->query("SELECT * FROM user WHERE email = '{$email}'");

    $data = array();
    while ($row = mysqli_fetch_assoc($emailCheck)) {
        $data[] = $row;
    }
    $prefix = 'none';
    if (isset($_POST['prefix'])){
        $prefix = $_POST['prefix'];
    }

    if ($data === []){
        $conn->query("INSERT INTO user (email, password, first_name, surname_prefix, surname, street_name, apartment_nr, postal_code, city)VALUES ('{$email}', '{$password}', '{$_POST['first_name']}', '{$prefix}', '{$_POST['surname']}', '{$_POST['street']}', '{$_POST['housenr']}', '{$_POST['postalcode']}', '{$_POST['city']}')");
        header('Location: http://nerdygadgets.com/PHP/login_handling/login.php');

    }else{
        header('Location: http://nerdygadgets.com/PHP/login_handling/registreer.php');
    }


}
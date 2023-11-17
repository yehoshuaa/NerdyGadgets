<?php


//Var
$email    = $_POST['email'];
$password = $_POST['password'];


// Create connection
$conn = new mysqli('localhost', 'root', '');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("USE nerdy_gadgets_start");

if ($_POST['type'] === 'login'){
//Login logic
    $result = $conn->query("SELECT id FROM user WHERE email = '{$email}' AND password = '{$password}';");

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }


    if ($data != []){
        session_start();
        $_SESSION['id'] = $data[0]['id'];
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


    if ($data === []){
        $conn->query("INSERT INTO user VALUES (2000 ,{$email}, {$password}, 'woord', 'woord1', 'woord2', 33, 'woord4', 'woord5')");
        header('Location: http://nerdygadgets.com/PHP/login_handling/login.php');

    }else{
        header('Location: http://nerdygadgets.com/PHP/login_handling/registreer.php');
    }


}
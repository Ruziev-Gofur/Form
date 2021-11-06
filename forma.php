<!DOCTYPE HTML>  
<html>
<head>
    <style>
    body {
    background-color: linen;
    }
    div {
    padding: 70px;
    border: 7px solid black;
    }
    table, th, td {
  border:2px solid black;
}
    </style>
</head>
<body>  
<div>

    <?php
    $name = $surname = $login = $parol = $birthday = $email ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $surname = test_input($_POST["surname"]);
    $login = test_input($_POST["login"]);
    $parol = test_input($_POST["parol"]);
    $birthday = test_input($_POST["birthday"]);
    $email = test_input($_POST["email"]);
    }
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>
    <h2>Registratsiya formasini yaratish</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Isim: <input type="text" name="name">
    <br><br>
    Familya: <input type="text" name="surname">
    <br><br>
    Login: <input type="text" name="login">
    <br><br>
    Parol: <input type="password" name="parol">
    <br><br>
    Tugilgan kun: <input type="date" name="birthday">
    <br><br>
    Email: <input type="email" name="email">
    <br><br>
    <input type="submit" name="submit" value="Jo'natish">  
    </form>
    
    <table>
        <tr>
            <th>Isim</th>
            <th>Familya</th>
            <th>Login</th>
            <th>Parol</th>
            <th>Tugilgan kun:</th>
            <th>Email:</th>
        </tr>
        <tr>
            <th><?= $name ?></th>
            <th><?= $surname ?></th>
            <th><?= $login ?></th>
            <th><?= $parol ?></th>
            <th><?= $birthday ?></th>
            <th><?= $email ?></th>
        </tr>
    </table>
    <?php  
    if (isset($_POST['auth'])){
        if ($_POST['login'] == $name){
            echo "isimni kiritdiz";
        }elseif (empty($_POST['login'])) {
            echo "isim kiriting!";
        }else{
            echo "isimni kirit!";
        }
    }
 
    ?>
</div>
</body>
</html>
<?php
if($_POST){
    $name = $_POST['fname'];
    $surname = $_POST['lname'];
    $birthday = $_POST['birthday'];
    $sex = $_POST['sex'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    echo"สวัดดีคุณ $name $surname <br>";
    echo"วันเกิด : $birthday<br>";
    echo"เพศ : $sex<br>";
    echo"ชื่อเข้าระบบ $username<br>";
    echo "รหัสผ่านคือ $password<br>";
}
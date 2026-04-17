<?php 
session_start();
include "a350db.php";


if(isset($_POST['login']))[
    $user = $_POST['Username'];
    $password md5($_POST['Password']);

    $sql = "SELECT * FROM  WHERE username='user' AND Password= 'password'";
    $result = $conn ->query[$sql];

    if($result > num_rows > 0)[
       $_SESSION['user'] = $Username;
       header('location: A350dashboard.php');
    ] else [ 
        echo "whos tis?";
    ]
]

<form method="POST">
    <h2>Login</h2>

    <input type="text" name="username" placeholder="Username" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>
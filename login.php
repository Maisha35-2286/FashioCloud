<?php
   include 'crud.php';
   $crud = new Crud();
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        if($result = $crud->getData($query)){
            if(!empty($result)){
                echo '<script>
                    alert("User logged in!");
                    window.location.href="index.php";
                </script>';
                session_start();
                $_SESSION['access'] = md5(uniqid(rand(),true));
                $_SESSION['user'] = $username;
            }else{
                echo '<script>
                    alert("Invalid user");
                    window.location.href="login.html";
                </script>';
            }
        }else{
            echo '<script>
                    alert("Invalid user");
                    window.location.href="login.html";
                </script>';
        }
            
    }
?>
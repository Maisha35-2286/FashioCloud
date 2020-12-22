<?php
    include 'crud.php';
    $crud = new Crud();
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        if($password == $confirm){
            $query = "INSERT INTO user(name,username,password,email) VALUES('$name','$username','$password','$email')";
            if($crud->execute($query)){
                echo "<script>
                alert('Registration Complete');
                window.location.href='login.html';
                </script>";
            }else{
                echo "<script>
                alert('Registration Not Completed!');
                window.location.href='register.html';
                </script>";
            }
        }else{
            echo "<script>
            alert('Password didn't match');
            window.location.href='register.html';
            </script>";
        }
    }
?>
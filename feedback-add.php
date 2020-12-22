<?php
    include 'crud.php';
    $crud = new Crud();
    if(isset($_POST['Feedback'])){
        $username = $_POST['username'];
        $brandname = $_POST['brandname'];
        $comment = $_POST['comment'];

        // echo $username;
            $query = "INSERT INTO feedback(user,brandName,comment) VALUES('$username','$brandname','$comment')";
            if($crud->execute($query)){
                echo "<script>
                alert('Comment Complete');
                window.location.href='index.php';
                </script>";
            }else{
                echo "<script>
                alert('Comment Not Completed!');
                window.location.href='feedback.html';
                </script>";
            }
        
    }
?>
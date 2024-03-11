
<?php
session_start();
    include('conn.php');

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];

    $insert=mysqli_query($connection,"INSERT INTO `enquiry_form_2`(`id`, `name`, `email`, `subject`, `message`)
     VALUES ('','$name','$email','$subject','$msg')");

    if($insert){
        $_SESSION['status']="Form Successfully Submitted";
        header('location:index.php');
    }

    else{
        echo "Form Submission Failed !";
    }

?>
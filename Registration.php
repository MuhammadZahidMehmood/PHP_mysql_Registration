<?php
require_once('config.php');
?>

<?php
if(isset($_POST['create'])){
    $firstname  =   $_POST['firstname'];
    $lastname   =   $_POST['lastname'];
    $email      =   $_POST['email'];
    $phone      =   $_POST['phone'];
    $password   =   $_POST['password'];

    $sql = " INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES(?,?,?,?,?)";  //sql query save in verable
    $stmtinsert = $conn->prepare($sql);                                 //sql database method prepare
    $result = $stmtinsert->execute([$firstname, $lastname, $email, $phone, $password]);
    if($result){
        header("location: http://localhost/working/Registration_form/login.php");
    }else{
        echo 'There were erros while saved the data.';
    }
   
    
    $conn = null;
}


?>


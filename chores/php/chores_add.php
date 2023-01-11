<?php
    session_start();
    include_once "../../php/config.php";

    $chore_name=$_POST['chore_name'];
    $chore_by=$_POST['chore_by'];
    if(!empty($chore_name)){
        $sql=mysqli_query($conn, "INSERT INTO chores(chore_name, chore_by, status) VALUES('{$chore_name}', '{$chore_by}', 'N')");
        echo "success";
    }else{
        echo "All input fields required!";
    }
    
?>
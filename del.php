<?php
$connect = mysqli_connect("localhost","root","");
$dbname = mysqli_select_db($connect, '1');

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $query = "DELETE FROM register WHERE id = '$id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        echo ("<script>alert('Data Deleted Thankyou!!')</script>");
        echo("<script>window.location = 'admin.php';</script>");
    }
    else{
        echo '<script>alert("Data Not Deleted");</script>';
    }
}

?>
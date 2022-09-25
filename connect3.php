<?php
$subscribe=$_POST['subscribe'];


$conn=mysqli_connect('localhost','root','','logindata');
if($conn->connect_error){
    die('connection failed: '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into subs(subscribe)values(?)");
    $stmt->bind_param("s",$subscribe,);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $conn->close();
}
?>

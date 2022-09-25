<?php
$yname=$_POST['yname'];
$yemail=$_POST['yemail'];
$subject=$_POST['subject'];
$ymessage=$_POST['ymessage'];


$conn=mysqli_connect('localhost','root','','logindata');
if($conn->connect_error){
    die('connection failed: '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into getintouch(yname,yemail,subject,ymessage)values(?,?,?,?)");
    $stmt->bind_param("ssss",$yname,$yemail,$subject,$ymessage);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $conn->close();
}
?>

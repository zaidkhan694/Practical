<?php
$con = mysqli_connect('localhost:3310','root');
if($con)
{
    echo("Connection SuccessFull");
}
else
{
    echo("No Connection please Connect");
}
mysqli_select_db($con , 'practicaluser');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (user , email , mobile , comment) values('$user','$email','$mobile','$comment')";

mysqli_query($con , $query);

header('location:index.php');
?>
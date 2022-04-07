<?php
$name=$_POST["usn"];
$email=$_POST["email"];
$pass=$_POST["pass"];

$conn=mysqli_connect("localhost","root","","user");
if(!$conn){
    echo "error in connection";
}
$sql="Insert into signup values('$name','$email','$pass')";
if(mysqli_query($conn,$sql))
{
    echo "inserted";

}else{
    echo" error in inserting";
}
$conn->close();
?>

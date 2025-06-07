<?php
$conn=mysqli_connect("localhost","root", "", "buy_villa");
$name=$_POST['name'];
$phone_number=$_POST['phone_number'];
$address=$_POST['address'];
$subject=$_POST['subject'];
$qry="insert into`house`(`name`,`phone_number`,`address`,`subject`)values('$name','$phone_number','$address','$subject') ";
$sql=mysqli_query($conn,$qry);
if(!$sql){
    echo "error occured";

}
else{
    echo"data inserted successfully";
}

?>


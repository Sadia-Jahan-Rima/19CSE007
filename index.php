<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <title>19CSE007</title>
</head>
<body>
<h1>My <span style="color:white;">CRUD</span> operation</h1>

<h3>19CSE007</h3>
<?php

if(isset($_GET['dltid'])){
$conn=mysqli_connect("localhost","root","","CRUD_Operation") or die("connection failed!");       
$id1=$_GET['dltid'];
$sql1="DELETE FROM product WHERE id='$id1'";
$result1=mysqli_query($conn,$sql1)or die("Query unsuccesful!");
if($result1){
    echo "<span class='sucess'>deleted successfully!</span>";
    header("Location: http://localhost/19CSE007/index.php");
}
else{
echo "<span class='error'>Not deleted!</span>";
} }
?>
<table border='1'>

<tr style="border:none;border-bottom:2px solid white;"><th colspan="7" style="padding:20px;font-size:16px;background-color:orange;">Product List</th>
    <th style="background-color:orange;"><a style="padding:5px;text-decoration:none; background-color:white;" href="addProduct.php">Add<i class="fa-doutone fa-plus"></i></a></th>
</tr>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>description</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Expire  Date</th>
    <th colspan="2">Action</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","CRUD_Operation") or die("connection failed!");
$sql="SELECT * FROM product";
$result=mysqli_query($conn,$sql)or die("Query unsuccesful!");
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){?>
<tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['quantity'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo $row['expire_date'];?></td>
    <td><a style="padding:5px;text-decoration:none; background-color:orange;" href="updateProduct.php?editId=<?php echo $row['id'];?>"><i class="fa-solid fa-pen"></i>edit</a></td>
    <td><a style="padding:5px;text-decoration:none; background-color:Yellow;" onclick="return confirm('Are you sure want to delete?')"; href="?dltid=<?php echo $row['id'];?>"><i class="fa-solid fa-trash"></i>delete</a></td>
    
</tr><?php }}?>
</table>
</body>
</html>
<?php include "header.php";?>

<?php
 if($_SERVER['REQUEST_METHOD']=="POST"){
$name=$_POST['name'];
$description=$_POST['description'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$date=$_POST['date'];
$conn=mysqli_connect("localhost","root","","CRUD_Operation") or die("connection failed!");
$sql="INSERT INTO product(name,description,quantity,price,expire_date) Values('$name','$description','$quantity','$price','$date')";
$result=mysqli_query($conn,$sql)or die("Query unsuccesful!");
header("Location:index.php");
mysqli_close($conn);}?>
<div class="block">    

                 <form action="" method="POST" enctype="multipart/form-data">
                    <table class="form"  style="padding:45px 25px 25px 25px;background-color:whitesmoke;">
                    <tr><td style="text-align:center; color:orange; font-size:20px;border-left:2px solid orange;">Add product<td><tr>
                        <tr>
                            <td>
                               
                                <label>Product Name</label>
                            </td>
                            <td>
                                <input type="text" required name='name' placeholder="Enter product name..." class="medium" />
                            </td>
                        </tr>
                     
                       
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Description</label>
                            </td>
                            <td>
                                <textarea class="tinymce" required name='description'></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Quantity</label>
                            </td>
                            <td>
                                <input type="text" name='quantity' required placeholder="Enter quantity..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>price</label>
                            </td>
                            <td>
                                <input type="text" name='price' required placeholder="Enter price..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Expire Date</label>
                            </td>
                            <td>
                                <input type="date" required name='date' class="medium" />
                            </td>
                        </tr>
                     
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" style="background-color:orange;color:white;padding:5px;border-radius:3px;border-color:none;font-size:15px;" Value="Add" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
</body>
</html>
<?php
$connect=mysql_connect("localhost","root","")or die("doesn't connect");
$db=mysql_select_db("twosix",$connect);
?>


<!DOCTYPE html>
<html>

<body>

<form name="name" method="post">
<table align="center" cellspacing="0" cellpadding="25">

<tr>
   <th>Name</th>
   <td><input type="text" name="name"></td>
</tr>  

<tr>
   <th>Email</th>
   <td><input type="email" name="email"></td>
</tr>  

<tr>
   <th>mobile</th>
   <td><input type="text" name="mobile"></td>
</tr> 


<tr>
   <th>password</th>
   <td><input type="password" name="pwd"></td>
</tr> 

<tr>
   <th></th>
   <td><input type="submit" name="s1" value="submit">
</tr> 

</table>
</form>


<?php
if(isset($_POST['s1']))
{
   extract($_POST);
   $qry=mysql_query("insert into register(name,email,mobile,pwd)values('$name','$email','$mobile','$pwd')");
   if($qry)
   {
      echo "<script> alert('add succesfully'); </script>";
   }
   else
   {
      echo "<script> alert('Not added'); </script>";
   }


}
?>


</body>
</html>

<?php
$connect=mysql_connect("localhost","root","")or die("doesn't connect");
$db=mysql_select_db("twosix",$connect);
?>

<form name="name" method="post">
<table cellspacing="25" cellpadding="0">  
      
    
	<tr>
   <th>Email</th>
   <td><input type="email" name="email"></td>
</tr>  


<tr>
   <th>password</th>
   <td><input type="password" name="pwd"></td>
</tr>
 
   		
	<tr>
	<td> </td>
	<td> <input type="submit" name="s1"></td>
	</tr>
						
						
					</table>
				</form>
		</center>
		
		
		<?php
				if(isset($_POST['s1']))
				{
					extract($_POST);
							
					$qry=mysql_query("select * from register where email='$email' and pwd='$pwd'");
					$no=mysql_num_rows($qry);
					$row=mysql_fetch_array($qry);
							
					if($no==1)
					{
						session_start();
						$_SESSION['id1']=$row['mid'];
						
						header("location:profile.php");
					}
					else
						{
							echo "<script>alert('Invalid Username or Password');</script>";
						}
				}
			?>
		
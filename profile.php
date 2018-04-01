<?php 
$connect=mysql_connect("localhost","root","")or die("doesn't connect");
$db=mysql_select_db("twosix",$connect);

	
    session_start();
	
    if($_SESSION['id1']=="")
	{
		header("location:logout.php");
	}
	
	
	
	$id2=$_SESSION['id1'];
	
	
	$qry=mysql_query("select * from register where mid='$id2'");
	$row=mysql_fetch_array($qry);

	
?>
			
	<form name="form1" method="post" >		
	<table align="center" cellpadding="10" cellspacing="0">
						
				
						
		<tr>
			<td>Name :</td>
		<td><?php echo $row['name']; ?></td>
	</tr>
						
	<tr>
		<td>Email :</td>
			<td><?php echo $row['email']; ?></td>
	</tr>
	    
						
	<tr>
		<td>Mobile : </td>
	<td><?php echo $row['mobile']; ?></td>
						</tr>
						
		<a href="logout.php">Logout</a>				
</table>
</form>
			
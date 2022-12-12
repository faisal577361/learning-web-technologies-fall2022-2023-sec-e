<?php
	include 'UserController.php';

	$utype = array("User","Admin");
		
?>
<html>
	<head></head>
	<body >
		
        <form id="form" class="box" method="POST" action="" enctype="">
				<table >
				<h5><?php echo $err_db;?></h5>
				<tr>
						<td><legend><b>ID: </b></legend></td>
						<td><input type="number" name="id" value="<?php echo $id;?>" placeholder="ID"></td>
                        <td><span><?php echo $err_id;?></span></td>
					</tr>

					<tr>
						<td><legend><b>Password: </b></legend></td>
						<td><input type="password" name="password" value="<?php echo $password;?>"placeholder="Password"></td>
                        <td><span><?php echo $err_password;?></span></td>
					</tr>
                    <tr>
						<td><legend><b>Confirm Password: </b></legend></td>
						<td><input type="password" name="conpass" value="<?php echo $conpass;?>" placeholder="Confirm Password"></td>
                        <td><span><?php echo $err_conpass;?></span></td>
					</tr>
					<tr>
						<td><legend><b>Name: </b></legend></td>
						<td><input type="text" name="username" value="<?php echo $username;?>" placeholder="Name"></td>
						<td><span><?php echo $err_username;?></span></td>
						
					</tr>
					<tr>
						<td><legend><b>Email: </b></legend></td>
						<td><input type="email" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>

					<tr>
						<td><legend><b>User Type: </b></legend> </td>
						<td>
							<select name="usertype"value="<?php echo $utype;?>">
								<option selected disabled>--Select--</option>
								<?php
									foreach($utype as $u){
										if($utype == $u)
											echo "<option selected>$u</option>";
										else
											echo "<option>$u</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_utype;?></span></td>
					</tr>
					
                    <tr>
					<td><input type="submit" name="sign_up" value="Sign Up"></td>
                                </tr>

					
				</table>
			</form>
		
	</body>
</html>


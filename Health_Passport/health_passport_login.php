<!DOCTYPE html>
<html lang="en">
<head>
<title>MedTech Solution</title>
<?php include('..\widgets\all_links.php'); ?>
<link href="../stylesheet/styleme.css" rel="stylesheet" type="text/css" media="screen, projection"/>

<style>
	.inputs{
		width:auto;
		border: 2px solid dodgerBlue;
		border-radius: 8px;
		margin: 8px 0px;
		padding:8px;
		box-sizing:border-box;
		outline:none;
		
	}
	
	.inputs:focus{
		border-color: #0066cc;
		box-shadow:0 0 8px 0 #0066cc;
	}

	.custom_buttons{
	border-radius:4px;
	font-family: "Amiri";
    background: #3498db;
    color: #fff;
	border: none;
	padding:10px 0px 10px 0px;
	text-decoration: none;
	margin:10px 0px 10px 0px;
	width:317px;
	outline:none;

	}
	
	.custom_buttons:hover {
    background: #088bf0;
    color: #fff;
	}
	
	label{
			font-family:"Amiri";
			color:#088bf0;
			font-size:19px;
	}

</style>


</head>
<body>
<!-- this is a navbar for before login -->
<?php include('../widgets/outer_navbar.php');?>

<section class="home">
    <div class="flex-parent">
	
		<div class="boxone">
            <form method="POST">	
			<table style="margin-top: 15%;">
				<tr>
					<td colspan="2">
						<h1 style="text-align:center;font-family:Amiri;color:#088bf0;font-size:30px;">Health Passport</h1>
					</td>
				</tr>
				<tr>
					<td>
						<label>HP Id :</label>
					</td>
					<td>
						<input class="inputs"  type="text" name="health_passport_id" size="30" placeholder="Health Passport Id...." required>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="../Health_Passport/HP_OTP_Validation.php"><input  style="font-size:20px" class="custom_buttons" type="button" value="Send OTP" name="Send_otp" /></a>
					</td>
				</tr>
				</table>
				</form>

			
		</div>	
		
        <!-- i m doctor -->
        <div class="boxone">
            <img src="../assets/img/hp.png" alt="Doctor" width="400" height="400">
            
        </div>
        <!-- i m Patient -->
     </div>   
</section>


</body>
</html>


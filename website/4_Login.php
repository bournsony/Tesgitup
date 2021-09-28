<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


	<style>
		.bor{
			border:0px solid red;
		}
		.fontSiemreap{
			font-family:'Khmer OS Siemreap';
		}
		.bg1{
			background-image: url('https://cdn.dribbble.com/uploads/659/original/96d7c2c751f301aab76cca5c84f1639a.gif?1546644588');
			
		}
		.bg{
			
			background-color:#8861E5;
		}
		.margintext{
			width: 70%;
			margin-top: 2.5%;
		}
	</style>


	<title>Form Login</title>
</head>
<body>







	<form 	class="bor fontSiemreap " method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" ><br /><br>

	    <div class="container" >
 
	  		<div class="row" style="padding: 50px; height: 10%;">
		    	<div 	
		    			class="col-lg-5 bg  bor" 
		    			style="border-radius: 8px;
		    			border-bottom-left-radius: 8px;">

		    	
		    		<h1 align="center" style="	font-size: 50px;
		    						color: white;
		    						padding-top: 100px;
		    						">Login</h1><br>
		    		<h6 align="center" style="color: white;">Input account to login form</h6><br>				
		    		<div align="center">
		    			<input  name="nam"  type="text" class="form-control margintext" placeholder="Username" >
			    		<input name="pas"  type="Password" class="form-control margintext" placeholder="Password" >

			    		<h6 style="color: white; margin-top: 5%;">Forgot Password</h6><br><br>
			    	</div>
		    		
		    		
			    	<div align="center">
			    		<button style="margin-bottom: 10%; width: 30%;" 
		    						align="right";

		    				type="submit" class="btn btn-success">Login</button>
			    	</div>	
		    		

		    	</div>

		    	<div 	align="center" 
		    			class="col-sm bor bg1" 
		    			style="	border-radius: 8px;
		    					border-bottom-right-radius: 8px;
		    					padding-top: 15%;">

		    		<img src="http://sadi.edu.kh/wp-content/uploads/2019/10/logosadihead1.png" class="img-fluid" alt="Responsive image">	
		    		
		    	</div>
	    	</div>
	    	
	  	</div>


	  	<?php
			$user="admin";
			$psw="123";

			if ($_SERVER["REQUEST_METHOD"]=="POST") {
				// code...

				if ($_POST['nam']==$user && $_POST['pas']==$psw) {
				// code...
				echo "<script >location.href='4_Success.php'</script>";
			}elseif ($_POST['nam']=="" && $_POST['pas']=="") {
				// code...
			}
			else{
				echo "<script >alert('Username and Password incorrect !')</script>";
			}
			}


			

				

		?>
		
	
	</form>




	

</body>
</html>
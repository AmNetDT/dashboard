<?php 

 
include('head.php');

if(isset($_POST['submit'])){
	$username =  mysqli_real_escape_string($db, $_POST['username']);
	$password = ($_POST['password']);
	$sql = "SELECT * FROM user WHERE username='$username' AND password='".md5($password)."'";
	$result = mysqli_query($db, $sql);
	$numRows = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
   if($numRows==1){
		
    		$_SESSION['client'] = $row['username'];
				<script>
			document.location="dashboard.php";
			</script>
        
		}else{
			$fail = "Invalid Login Credentials";
			
		}
	
}

    if(isset($_POST['submitregister'])){
    $username =  mysqli_real_escape_string($db, $_POST['username']);
	$password =  $_POST['password'];
    $cpassword = $_POST['cpassword'];    
    
        if(($_POST['cpassword'] != $_POST['password'])){
            $fail="Password not match";
        }else{
    
        
    $sqli = "INSERT INTO user (username, password) VALUES ('$username', '".md5($password)."')";
	$query = mysqli_query($db, $sqli);
        if($query){
            
    $sql = "SELECT * FROM user WHERE username='$username' AND password='".md5($password)."'";
	$result = mysqli_query($db, $sql);
	$numRows = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
   if($numRows==1){
		
    
    
			$_SESSION['client'] = $row['username'];
				<script>
			document.location="dashboard.php";
			</script>
        
		}else{
			$fail = "Invalid Login Credentials";
			
		}
	}
        }
}
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Assigment</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    
    <script src="js/bootstrap.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>


  <body>
			<div class="row">
			<div class="container">
				
<?php if(isset($fail)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fail; ?> </div><?php } ?>
            
				</div>
            </div>
				
				
		<div class="row">					 				
			<div class="container">
                   <div class="col-md-12">
                   <div class="clearfix space20"></div>
                    <h3>How to upload a file, delete, retrieve and store in a cloud bucket. </h3>
                <p><a href="#reg">Sign up</a> or Sign in to view the project.</p>	
                </div>
            </div>
	  </div>
								
     <div class="row">	
     			<div class="container">	 				
		<div class="col-md-6">
								<div class="clearfix space20"></div>		
						<h4 class="heading text-left">Sign in</h4>	
		<form method="post">
		
            <div class="row">	
              <div class="col-md-9 form-group">
	              <input type="text" name="username" class="form-control" placeholder="Username">
	              
            </div>
			
            </div>
            
        	<div class="row">
             <div class="col-md-9 form-group">	
                   <input type="password" name="password" class="form-control" placeholder="Password">
			 </div>
            </div>
					
           <div class="row">
                  <div class="col-md-9">
                    <input name="submit" type="submit" value="Sign in" class="btn btn-info"/>
			</div>
            </div>
      </form>
      </div> 				
      <div class="col-md-6">
                  <h4 class="heading text-left">Sign up</h4>
                   <div class="clearfix space20"></div>
     
          <form method="post">
		
            <div class="row">	
              <div class="col-md-9 form-group">	
	              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
			
            </div>
            
        	<div class="row">
              <div class="col-md-9 form-group">	
                   <input type="password" name="password" class="form-control" placeholder="Password">
			 </div>
            </div>
            
            <div class="row">
             <div class="col-md-9 form-group">		
                   <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
			 </div>
            </div>
					
           <div class="row">
             <div class="col-md-9 form-group">	
                    <input name="submitregister" type="submit" value="Sign up" class="btn btn-info"/>
			</div>
            </div>
      </form>
      </div>
    
	</div>
</body>
</html>

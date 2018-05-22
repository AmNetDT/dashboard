<?php
include('head.php'); 


if(!isset($_SESSION['client']) & empty($_SESSION['client'])){
    header('location: index.php');
}
    
    if(isset($_POST['submit']) && (!empty($_POST))){
            
		if(isset($_FILES) & !empty($_FILES)){
			$name = $_FILES['productfile']['name'];
			$size = $_FILES['productfile']['size'];
			$type = $_FILES['productfile']['type'];
			$tmp_name = $_FILES['productfile']['tmp_name'];

            
			$max_size = 20000000;
			$extension = substr($name, strpos($name, '.') + 1);

			if(isset($name) && !empty($name)){
				if(($extension == "png" || $extension == "jpg" || $extension == "jpeg") && $type == "image/png" || $type == "image/jpeg" && $size<=$max_size){
					$location = "cloudbucket/";
					if(move_uploaded_file($tmp_name, $location.$name)){
						//$smsg = "Uploaded Successfully";
$sql = "INSERT INTO bucketfile (fileurl) VALUES ('$location$name')";
						$res = mysqli_query($db, $sql);
						if($res){
							$smsg = "File uploaded successfully";
							//header('location: upload.php');
						}else{
							$smsg = "Failed to upload file1";
						}
					}else{
						$smsg = "Failed to upload file2";
					}
				}else{
					$smsg = "Only .docx and .pdf files are allowed and should be less that 1MB";
				}
			}else{
				$smsg = "Please Select a File";
			}
		}
	}
?>


   

    <div class="container-fluid" style="margin-top:-18px">
      <div class="row">
      <?php require('nav.php'); ?>

       <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              </div>
          </div>

         <h4><span class="glyphicon glyphicon-trash"></span>&nbsp;Upload</h4>

          <p>Upload image file with .jpg or .png extention</p>
          <div class="table-responsive">
            <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
    <div class="col-sm-12">
				
    <form method="post" name="upload_form" id="upload_form" enctype="multipart/form-data" >  
   
	 <div class="form-group">
    <input type="file" name="productfile" id="productfile"  class="btn btn-default">
        </div>
         <div class="form-group">
    <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
        </div>
      
    
	</form>
	 
	 
    </div>
          </div>
        </main>
        
      </div>
    </div>

    
    
  </body>
</html>

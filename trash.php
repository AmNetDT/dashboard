<?php
include('head.php'); 


if(!isset($_SESSION['client']) & empty($_SESSION['client'])){
    header('location: index.php');
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

         
          <h4><span class="glyphicon glyphicon-trash"></span>&nbsp;Trash</h4>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
               
                <tr>
                  <th>File</th>
                  <th>Action</th>
                </tr>
                
              </thead>
              <tbody>
               <?php 
                  $dos="SELECT * FROM trashfile";
                  $dosu=mysqli_query($db,$dos);
                  while($dosun=mysqli_fetch_assoc($dosu)){
                  ?>
                <tr>
                  <td><img src="<?php echo $dosun['fileurl'];?>" alt="" style="width: 50px"/></td>
                  <td>
                  <a class="btn btn-small btn-primary" href="retrievtrashfile.php?id=<?php echo $dosun['id']; ?>">Retrieve</a>
                  <a class="btn btn-small btn-danger" href="delfromtrash.php?id=<?php echo $dosun['id']; ?>">Delete</a>
                  
                  </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
          </div>

         
        </main>
        
      </div>
    </div>

    
    
  </body>
</html>

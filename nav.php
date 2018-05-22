  <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
             <li class="nav-item">
                <a class="nav-link" href="#" style="text-transform: capitalize">
                  <span class="glyphicon glyphicon-user"></span>
                        <?php 
                    

                    $geenie=$_SESSION['client'];
                    $gee="SELECT * FROM user WHERE username='$geenie'";
                    $gequery=mysqli_query($db,$gee);
                    $gefet=mysqli_fetch_assoc($gequery);
                    echo $gefet['username']; 
                    ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">
                  <span class="glyphicon glyphicon-home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="upload.php">
                  <span class="glyphicon glyphicon-upload"></span>
                  Upload file
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="archive.php">
                  <span class="glyphicon glyphicon-folder-close"></span>
                 Archive
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="trash.php">
                  <span class="glyphicon glyphicon-trash"></span>
                 Trash
                </a>
              </li>
              
            </ul>

           <h4 class="justify-content-between align-items-center text-muted">
              <span>Other reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span class="glyphicon glyphicon-plus-circle"></span>
              </a>
            </h4>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="glyphicon glyphicon-list-alt"></span>
                  <em>Link</em>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="glyphicon glyphicon-file"></span>
                  <em>Link</em>
                </a>
              </li>
              </ul>
          </div>
        </nav>
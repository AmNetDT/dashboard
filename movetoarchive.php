<?php
	session_start();
	require_once 'connect.php';
	if(!isset($_SESSION['client']) & empty($_SESSION['client'])){
    header('location: index.php');
}

	if(isset($_GET['id']) & !empty($_GET['id'])){
		$id = $_GET['id'];
        $inssql= "INSERT INTO archivefile (fileurl) SELECT fileurl FROM bucketfile where id='$id'";
            
        if(mysqli_query($db, $inssql)){
            
            $delsql = "DELETE FROM bucketfile WHERE id=$id";
				if(mysqli_query($db, $delsql)){
                    
                    header('location: dashboard.php');
					
				}
			
		}else
			
		 header('location: dashboard.php');
	
    }

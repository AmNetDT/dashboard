<?php
	session_start();
	require_once 'connect.php';
	if(!isset($_SESSION['client']) & empty($_SESSION['client'])){
    header('location: index.php');
}

	if(isset($_GET['id']) & !empty($_GET['id'])){
		$id = $_GET['id'];
        $inssql= "INSERT INTO bucketfile (fileurl) SELECT fileurl FROM archivefile WHERE id=$id";
            
        if(mysqli_query($db, $inssql)){
            
            $delsql = "DELETE FROM archivefile WHERE id=$id";
				if(mysqli_query($db, $delsql)){
                    
                    header('location: archive.php');
					
				}
			
		}else
			
		 header('location: archive.php');
	
    }

<?php
	session_start();
	require_once 'connect.php';
	if(!isset($_SESSION['client']) & empty($_SESSION['client'])){
    header('location: index.php');
}

	if(isset($_GET['id']) & !empty($_GET['id'])){
		$id = $_GET['id'];
        $inssql= "INSERT INTO bucketfile (fileurl) SELECT fileurl FROM trashfile where id='$id'";
            
        if(mysqli_query($db, $inssql)){
            
            $delsql = "DELETE FROM trashfile WHERE id=$id";
				if(mysqli_query($db, $delsql)){
                    
                    header('location: trash.php');
					
				}
			
		}else
			
		 header('location: trash.php');
	
    }

<?php
	session_start();
	require_once 'connect.php';
	if(!isset($_SESSION['client']) & empty($_SESSION['client'])){
    header('location: index.php');
}

	if(isset($_GET['id']) & !empty($_GET['id'])){
		$id = $_GET['id'];
        
        $sql = "SELECT fileurl FROM trashfile WHERE id=$id";
		$que = mysqli_query($db, $sql);
		$res = mysqli_fetch_assoc($que);
		if(!empty($res['fileurl'])){
			if(unlink($res['fileurl'])){
				$delsql = "DELETE FROM trashfile WHERE id=$id";
				if(mysqli_query($db, $delsql)){
                    header('location: trash.php');
					
				}
			}
		}else{
			$delsql = "DELETE FROM trashfile WHERE id=$id";
				if(mysqli_query($db, $delsql)){
					 header('location: trash.php');
				}
		}

	}else{
			
		 header('location: trash.php');
	
    }

<?php
	
	echo '<a href = "loginform.php"></a>';


      $username = $_POST['username'];
	  $password = $_POST['password'];
	 
	    
		if($username == "jen" && $password == "rose"){
			
			echo '<a> You are now log in </a>' . '<a href = "session.php">continue</a>';
		}
		else{
			
			echo '<a> log in failed </a>' . '<a href = "loginform.php">try again</a>';
		}
?>
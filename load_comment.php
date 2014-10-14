<?php
	$id_post = $_POST["id_post"];
	
	require("connect_mysql.php");

	$result = mysql_query("SELECT * FROM comment WHERE id_post=$id_post ORDER BY id DESC");
	if(! $result )
	{
	  die('Could not load data: ' . mysql_error());
	}

	while($row = mysql_fetch_array($result)) 
	{
			echo '<li class="art-list-item">
	    	     <div class="art-list-item-title-and-time">
	    	         <h2 class="art-list-title"><a href="mailto:'.$row["email"].'">'.$row["nama"].'</a></h2>
	    	         <div class="art-list-time">'.$row["tanggal"].'</div>
	    	     </div>
	    	     <p>'.$row["isi"].'</p>
	    	  </li>';
	}
?>

<?php
	$nama = $_POST["Nama"];
	$email = $_POST["Email"];
	$isi = $_POST["Komentar"];
	$id_post = $_POST["id_post"];
	$temp = getdate();
	$tanggal = $temp["mon"]."/".$temp["mday"]."/".$temp["year"];

	require("connect_mysql.php");

	$result = mysql_query("INSERT INTO comment (nama, email, isi, id_post, tanggal) VALUES ('$nama', '$email', '$isi', '$id_post', '$tanggal')");
	if(! $result )
	{
	  die('Could not enter data: ' . mysql_error());
	}

	$result = mysql_query("SELECT * FROM comment WHERE id_post=$id_post ORDER BY id DESC");
	if(! $result )
	{
	  die('Could not get data: ' . mysql_error());
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

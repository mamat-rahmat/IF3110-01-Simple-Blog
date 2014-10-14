<?php
	$judul = $_POST["Judul"];
	$tanggal = $_POST["Tanggal"];
	$konten = $_POST["Konten"];

	require("connect_mysql.php");

	$result = mysql_query("INSERT INTO post (judul, tanggal, isi) VALUES ('$judul', '$tanggal', '$konten')");
	if(! $result )
	{
	  die('Could not insert data: ' . mysql_error());
	}
?>

<script type="text/javascript">
   document.location="index.php";
</script>
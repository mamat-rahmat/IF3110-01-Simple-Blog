<?php
	$judul = $_POST["Judul"];
	$tanggal = $_POST["Tanggal"];
	$konten = $_POST["Konten"];
	$id = $_POST["ID"];

	require("connect_mysql.php");

	$result = mysql_query("UPDATE post SET judul='$judul', tanggal='$tanggal', isi='$konten' WHERE id=$id");
	if(! $result )
	{
	  die('Could not update data: ' . mysql_error());
	}
?>

<script type="text/javascript">
   document.location="index.php";
</script>
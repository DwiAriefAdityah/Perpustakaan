<?php

	$nim= $_GET['nim'];

	$sql = $conn -> query("delete from anggota where nim='$nim'");

?>

<script type="text/javascript">
	window.location.href="?page=anggota"
</script>
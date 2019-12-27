<?php

	$id_buku= $_GET['id_buku'];

	$sql = $conn -> query("delete from buku where id_buku='$id_buku'");

?>

<script type="text/javascript">
	window.location.href="?page=buku"
</script>
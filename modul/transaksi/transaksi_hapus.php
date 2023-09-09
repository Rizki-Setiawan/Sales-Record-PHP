<?php


if(isset($_REQUEST['submit'])){

    $id_transaksi = $_REQUEST['id_transaksi'];

    $sql = mysqli_query($con, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");
    if($sql == true){
    	?>
     <script type="text/javascript">
    alert("Data berhasil di Hapus. "); 
	document.location='./index.php?page=transaksi';
	</script>
	<?php
        die();
    }
}
?>


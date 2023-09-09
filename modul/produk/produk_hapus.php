<?php


if(isset($_REQUEST['submit'])){

    $id_produk = $_REQUEST['id_produk'];

    $sql = mysqli_query($con, "DELETE FROM produk WHERE id_produk='$id_produk'");
    if($sql == true){
    	?>
     <script type="text/javascript">
	document.location='./index.php?page=produk';
	</script>
	<?php
        die();
    }
}
?>


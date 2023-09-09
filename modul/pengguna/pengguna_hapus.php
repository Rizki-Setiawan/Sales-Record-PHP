<?php


if(isset($_REQUEST['submit'])){

    $id_akun = $_REQUEST['id_akun'];

    $sql = mysqli_query($con, "DELETE FROM akun WHERE id_akun='$id_akun'");
    if($sql == true){
    	?>
     <script type="text/javascript">
    alert("Data berhasil di Hapus. "); 
	document.location='./index.php?page=pengguna';
	</script>
	<?php
        die();
    }
}
?>


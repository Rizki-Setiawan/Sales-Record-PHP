<?php


if(isset($_REQUEST['submit'])){

    $id_kasir = $_REQUEST['id_kasir'];

    $sql = mysqli_query($con, "DELETE FROM kasir WHERE id_kasir='$id_kasir'");
    if($sql == true){
    	?>
     <script type="text/javascript">
	document.location='./index.php?page=kasir';
	</script>
	<?php
        die();
    }
}
?>


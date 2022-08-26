<?php


if(isset($_REQUEST['submit'])){

    $id_manajer = $_REQUEST['id_manajer'];

    $sql = mysqli_query($con, "DELETE FROM manajer WHERE id_manajer='$id_manajer'");
    if($sql == true){
    	?>
     <script type="text/javascript">
	document.location='./index.php?page=manajer';
	</script>
	<?php
        die();
    }
}
?>


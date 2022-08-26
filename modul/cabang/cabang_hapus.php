<?php


if(isset($_REQUEST['submit'])){

    $id_cabang = $_REQUEST['id_cabang'];

    $sql = mysqli_query($con, "DELETE FROM cabang WHERE id_cabang='$id_cabang'");
    if($sql == true){
    	?>
     <script type="text/javascript">
	document.location='./index.php?page=cabang';
	</script>
	<?php
        die();
    }
}
?>


<?php
if( isset($_REQUEST['page'] )){

  $page = $_REQUEST['page'];

  switch( $page ){
    case 'dashboard':
      include "modul/dashboard/dashboard.php";
      break;
    case 'produk':
      include "modul/produk/produk.php";
      break;
    case 'kasir':
      include "modul/kasir/kasir.php";
      break;
    case 'manajer':
      include "modul/manajer/manajer.php";
      break;
    case 'cabang':
      include "modul/cabang/cabang.php";
      break;
    case 'transaksi':
      include "modul/transaksi/transaksi.php";
      break;
    case 'pengguna':
      include "modul/pengguna/pengguna.php";
      break;

  }
} else {
?>
    <div class="jumbotron">
      <h2>Page Not Found</h2>
    </div>
<?php
}


?>

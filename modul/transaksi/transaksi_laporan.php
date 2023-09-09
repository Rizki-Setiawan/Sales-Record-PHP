 <?php


        echo  '
                 <section class="content-header">
                  <h1>
                    View
                    <small>Data Transaksi</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active"><a href="#">Data Transaksi</a></li>
                  </ol>
                </section>
                    <section class="content">
                      <div class="row">
                        <div class="col-xs-12">                            
                           <div class="box box-primary"><br>
                             <a href="./index.php?page=transaksi" class="btn btn-success" style="margin-left:10px">Kembali</a>
                            <div class="box-body">                                
                              <table class="table table-bordered table-striped js-exportable">
                                <thead>
                                <tr>
                                 <th>No.</th>
                                  <th>Cabang</th>
                                  <th>Nama Manajer</th>
                                  <th>Nama Kasir</th>
                                  <th>Tanggal</th>
                                  <th>Produk</th>
                                  <th>Harga</th>
                                  <th>Banyak</th>
                                  <th>Total</th>
                                </tr>
                                </thead>
                                <tbody> ';
                            $sql = mysqli_query($con, "SELECT transaksi.id_transaksi,cabang.nama_cabang,manajer.nama_manajer,kasir.nama_kasir,transaksi.tanggal,produk.nama_produk,transaksi.harga,transaksi.banyak,transaksi.total from transaksi,cabang,manajer,kasir,produk where cabang.id_cabang=transaksi.id_cabang and manajer.id_manajer=transaksi.id_manajer and kasir.id_kasir=transaksi.id_kasir and produk.id_produk=transaksi.id_produk");
                            if(mysqli_num_rows($sql) > 0){
                                $no = 0;

                                 while($row = mysqli_fetch_array($sql)){
                                    $no++;
                                echo '  
                                 <script type="text/javascript" language="JavaScript">
                                    function konfirmasi(){
                                        tanya = confirm("Anda yakin akan menghapus data ini?");
                                        if (tanya == true) return true;
                                        else return false;
                                    }
                                </script>
                                 <tr>
                                <td>'.$no.'</td>
                                 <td>'.$row['nama_cabang'].'</td>
                                 <td>'.$row['nama_manajer'].'</td>
                                 <td>'.$row['nama_kasir'].'</td>
                                 <td>'.$row['tanggal'].'</td>
                                 <td>'.$row['nama_produk'].'</td>
                                 <td>'.$row['harga'].'</td>
                                 <td>'.$row['banyak'].'</td>
                                 <td>'.$row['total'].'</td>';
                                            
                                        }
                            }
                            echo '                                                            
                                    </tbody>
                                </table>

                            </div>
                          </div>
                        </div>
                      </div>
                    </section>';

?>
             
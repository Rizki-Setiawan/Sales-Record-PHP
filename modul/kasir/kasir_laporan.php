 <?php

        echo  '
                 <section class="content-header">
                  <h1>
                    Laporan
                    <small>Data Kasir</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active"><a href="#">Data Kasir</a></li>
                    <li class="active"><a href="#">Laporan Data Kasir</a></li>

                  </ol>
                </section>
                    <section class="content">
                      <div class="row">
                        <div class="col-xs-12">                           
                           <div class="box box-primary"><br>
                           <a href="./index.php?page=kasir" class="btn btn-success" style="margin-left:10px">Kembali</a>
                            <div class="box-body">                                
                              <table class="table table-bordered table-striped js-exportable">
                                <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Nama Kasir</th>
                                  <th>Cabang</th>
                                  <th>Jam Kerja/Hari</th>
                                  <th>Akun</th>
                                </tr>
                                </thead>
                                <tbody> ';
                            $sql = mysqli_query($con, "SELECT kasir.id_kasir,kasir.nama_kasir,cabang.nama_cabang,kasir.jam_kerja,akun.username FROM kasir,cabang,akun where cabang.id_cabang=kasir.id_cabang and akun.id_akun=kasir.id_akun");
                            if(mysqli_num_rows($sql) > 0){
                                $no = 0;

                                 while($row = mysqli_fetch_array($sql)){
                                    $no++;
                                echo '  
                                 <tr>
                                  <td>'.$no.'</td>
                                 <td>'.$row['nama_kasir'].'</td>
                                 <td>'.$row['nama_cabang'].'</td>
                                 <td>'.$row['jam_kerja'].'</td>
                                 <td>'.$row['username'].'</td>';
                                            
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
             
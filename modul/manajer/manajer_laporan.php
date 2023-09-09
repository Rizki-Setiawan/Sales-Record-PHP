 <?php

        echo  '
                 <section class="content-header">
                  <h1>
                    Laporan
                    <small>Data Manajer</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active"><a href="#">Data Manajer</a></li>
                    <li class="active"><a href="#">Laporan Data Manajer</a></li>

                  </ol>
                </section>
                    <section class="content">
                      <div class="row">
                        <div class="col-xs-12">                           
                           <div class="box box-primary"><br>
                           <a href="./index.php?page=manajer" class="btn btn-success" style="margin-left:10px">Kembali</a>
                            <div class="box-body">                                
                              <table class="table table-bordered table-striped js-exportable">
                                <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Nama Manajer</th>
                                  <th>Cabang</th>
                                  <th>Akun</th>
                                </tr>
                                </thead>
                                <tbody> ';
                            $sql = mysqli_query($con, "SELECT manajer.id_manajer,manajer.nama_manajer,cabang.nama_cabang,akun.username FROM manajer,cabang,akun where cabang.id_cabang=manajer.id_cabang and akun.id_akun=manajer.id_akun");
                            if(mysqli_num_rows($sql) > 0){
                                $no = 0;

                                 while($row = mysqli_fetch_array($sql)){
                                    $no++;
                                echo '  
                                 <tr>
                                  <td>'.$no.'</td>
                                 <td>'.$row['nama_manajer'].'</td>
                                 <td>'.$row['nama_cabang'].'</td>
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
             
 <?php

    if( isset( $_REQUEST['aksi'] )){
        $aksi = $_REQUEST['aksi'];
        switch($aksi){
            case 'baru':
                include 'kasir_baru.php';
                break;
            case 'hapus':
                include 'kasir_hapus.php';
                break;
            case 'laporan':
                include 'kasir_laporan.php';
              break;
            
        }
    } else {

        echo  '
                 <section class="content-header">
                  <h1>
                    View
                    <small>Data Kasir</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active"><a href="#">Data Kasir</a></li>
                  </ol>
                </section>
                    <section class="content">
                      <div class="row">
                        <div class="col-xs-12">                            
                           <div class="box box-primary"><br>
                           <div class="col-xs-2">
                                <a href="?page=kasir&aksi=baru" class="btn btn-block btn-primary"><i class="fa fa-plus"></i>&nbsp&nbspTambah Data</a>
                                </div>
                                <div class="col-xs-2">
                                <a href="?page=kasir&aksi=laporan" class="btn btn-block btn-warning"><i class="fa fa-paste"></i>&nbsp&nbspLaporan</a>
                            </div><br><br>
                            <div class="box-body">                                
                              <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Nama Kasir</th>
                                  <th>Cabang</th>
                                  <th>Jam Kerja/Hari</th>
                                  <th>Akun</th>
                                  <th>Tindakan</th>
                                </tr>
                                </thead>
                                <tbody> ';
                            $sql = mysqli_query($con, "SELECT kasir.id_kasir,kasir.nama_kasir,cabang.nama_cabang,kasir.jam_kerja,akun.username FROM kasir,cabang,akun where cabang.id_cabang=kasir.id_cabang and akun.id_akun=kasir.id_akun");
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
                                 <td>'.$row['nama_kasir'].'</td>
                                 <td>'.$row['nama_cabang'].'</td>
                                 <td>'.$row['jam_kerja'].'</td>
                                 <td>'.$row['username'].'</td>
                                 <td>
                                 <a href="?page=kasir&aksi=hapus&submit=yes&id_kasir='.$row['id_kasir'].'" onclick="return konfirmasi()" class="btn btn-danger btn-flat" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash-o"></i> </a>
                                 </td>';
                                            
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
    }
?>
             
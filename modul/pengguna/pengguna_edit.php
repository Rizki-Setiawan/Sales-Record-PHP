<?php

    if( isset( $_REQUEST['submit'] )){
        $id_akun =$_REQUEST['id_akun'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $level = $_REQUEST['level'];



        $sql = mysqli_query($con, "UPDATE akun SET username='$username', password=md5('$password'),level='$level' WHERE id_akun='$id_akun'");

        if($sql == true){
                ?>
                 <script type="text/javascript">
                    alert("Data berhasil di Edit. "); 

                document.location='./index.php?page=pengguna';
                </script>
                <?php
            die();
        } else {
            echo 'ERROR! Periksa penulisan querynya.';
        }
    } else {
    $id_akun = $_REQUEST['id_akun'];

    $sql = mysqli_query($con, "SELECT * FROM akun WHERE id_akun='$id_akun'");
    while($row = mysqli_fetch_array($sql)){

?>
  <section class="content-header">
      <h1>
        Edit
        <small>Data Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Pengguna</a></li>
        <li class="active"><a href="#">Edit Data</a></li>
      </ol>
    </section>

    <section class="content">
    <div class="row">

        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengguna</h3>
            </div>
            <form role="form" method="post">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username"  value="<?php echo $row['username'] ?>" >
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password"  value="<?php echo $row['password'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                   <div class="form-group">
                  <label>Level</label>
                 <select name="level" class="form-control" >
                     <option value="<?php echo $row['level'] ?>"><?php echo $row['level'] ?></option>
                    <option value="admin" >Admin</option>
                  </select>
                </div>
              </div>
              </div>
              <div class="box-footer">
                <a href="./index.php?page=pengguna" class="btn btn-success">Kembali</a>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Simpan</button>
              </div>
            </form>
          </div>
        </div>


<?php
    }
}
?>

    </div>
    </section>

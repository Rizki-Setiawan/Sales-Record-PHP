<section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-body"><br>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>
              <?php
              $sql = mysqli_query($con, "SELECT * FROM produk");
              $hasil = mysqli_num_rows($sql);
              echo $hasil;
              ?>
             </h3>
              <p>Produk</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="index.php?page=produk" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
              <?php
              $sql = mysqli_query($con, "SELECT * FROM kasir");
              $hasil1 = mysqli_num_rows($sql);
              echo $hasil1;
              ?>
             </h3>
              <p>Kasir</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="index.php?page=kasir" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
              <?php
              $sql = mysqli_query($con, "SELECT * FROM manajer");
              $hasil2 = mysqli_num_rows($sql);
              echo $hasil2;
              ?>
             </h3>
              <p>Manajer</p>
            </div>
            <div class="icon">
              <i class="fa fa-suitcase"></i>
            </div>
            <a href="index.php?page=manajer" class="small-box-footer">Info Selegkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
              <?php
              $sql = mysqli_query($con, "SELECT * FROM cabang");
              $hasil3 = mysqli_num_rows($sql);
              echo $hasil3;
              ?>
             </h3>
              <p>Cabang</p>
            </div>
            <div class="icon">
              <i class="fa fa-sitemap"></i>
            </div>
            <a href="index.php?page=cabang" class="small-box-footer">Info Selegkapnya <i class="fa fa-group"></i></a>
          </div>
        </div>


        </div>
         <div class="box-body">
         <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>
              <?php
              $sql = mysqli_query($con, "SELECT * FROM transaksi");
              $hasil5 = mysqli_num_rows($sql);
              echo $hasil5;
              ?>
             </h3>
              <p>Transaksi</p>
            </div>
            <div class="icon" style="">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="index.php?page=transaksi" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
           <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
              <?php
              $sql = mysqli_query($con, "SELECT * FROM akun");
              $hasil4 = mysqli_num_rows($sql);
              echo $hasil4;
              ?>
             </h3>
              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="index.php?page=akun" class="small-box-footer">Info Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

 
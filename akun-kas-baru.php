<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>AKUNTANSI</b></a>
            <!--logo end-->

            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li class="mt">
                      <a class="dcjq-parent" href="index.php">
                         <i class="fa fa-desktop"></i>
                          <span>Ringkasan</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="" href="rekening-bank.php">
                         <i class="fa fa-bank"></i>
                          <span>Rekening BANK</span>
                          
                      </a>
                  </li>
                   <li class="dcjq-parent">
                      <a class="" href="transaksi_bank.php">
                         <i class="fa fa-briefcase"></i>
                          <span>Transaksi BANK</span>
                      </a>
                  </li>
                   <li class="dcjq-parent">
                      <a class="active" href="akun-kas.php">
                         <i class="fa fa-balance-scale"></i>
                          <span>Akun KAS</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="" href="transaksi_kas.php">
                         <i class="fa fa-clipboard"></i>
                          <span>Transaksi KAS</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="dcjq-parent" href="Inter_Account_Transfers.php">
                         <i class="fa fa-arrows"></i>
                          <span>Inter Account Transfers</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="dcjq-parent" href="Reimburse.php">
                         <i class="fa fa-book"></i>
                          <span>Reimburse</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="dcjq-parent" href="Pelanggan.php">
                         <i class="fa fa-child"></i>
                          <span>Pelanggan</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="dcjq-parent" href="penawaran_penjualan.php">
                         <i class="fa fa-address-book"></i>
                          <span>Penawaran Penjualan</span>
                      </a>
                  </li>
                  <li class="dcjq-parent">
                      <a class="dcjq-parent" href="pesanan_penjualan.php">
                         <i class="fa fa-archive"></i>
                          <span>Pesanan Penjualan</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <div class="">
   <div class=""><span class="header"></span></div>
   <div class="" style="box-shadow: inset 0px 1px 0px #fff; padding: 30px">
      <table>
        <h3>Akun Kas</h3>
        <hr>
         <tbody>
            <tr>
               <td style="vertical-align: top; padding-right: 5px">
                  <div class="form-group"><label>Nama</label><input type="text" class="form-control input-sm" style="width: 300px" data-bind="value: Name"></div>
               </td>
               <td style="vertical-align: top; padding-right: 5px">
                  <div class="form-group"><label>Kode</label><input type="text" class="form-control input-sm" style="width: 100px" placeholder="Opsional" data-bind="value: Code"></div>
               </td>
            </tr>
         </tbody>
      </table>
      <div class="checkbox">
         <label><input type="checkbox" style="margin-top: 3px" data-bind="checked: HasStartingBalance">Saldo awal</label>
         <div class="form-group" data-bind="visible: HasStartingBalance" style="display: none;"><span style="padding: 5px; border: 1px solid #ccc; background-color: #ffffdb; font-size: 12px; color: #555; line-height: 150%; border-radius: 3px">Anda akan dapat menentukan saldo awal setelah menentukan <b> Tanggal mulai</b> didalam <b>Pengaturan</b> tab</span></div>
      </div>
      <div></div>
   </div>
   <div class="panel-footer" style="padding: 15px 30px">
      <img src="resources/ajax-loader.gif" id="ajaxIndicator" style="display: none; margin-right: 10px">
      <div class="btn-group">
         <input type="button" id="btnCreate" class="btn btn-primary" style="font-weight: bold" value="Buat"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
         <ul class="dropdown-menu">
            <li><input type="button" id="btnCreateAndAddAnother" class="btn btn-link" value="Buat &amp; Tambahkan Baru"></li>
         </ul>
      </div>
   </div>
</div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      $('#example').DataTable();
  </script>
  </body>
</html>
 
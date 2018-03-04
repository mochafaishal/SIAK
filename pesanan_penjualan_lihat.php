<?php include 'include/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Pesanan Penjualan</title>
    <link rel="shortcut icon" href="images/akuntansi.png">
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/select2.css">
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
       <?php include 'include/aside.php'; ?>
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
                        <h3>Pesanan Penjualan</h3>
                        <hr>
                       <div class="">
  <div class="panel panel-default">
   <div class="panel-heading">
      <table style="border-collapse: separate; width: 100%">
         <tbody>
            <tr>
               <td style="width: 1px; white-space: nowrap"><span class="header" style="margin-right: 10px"></span></td>
               <td style="border-right: 1px solid #ddd; padding-right: 5px; width: 1px; white-space: nowrap">
                  <a href="sales-order-form?Referrer=0d8084a0-a488-43da-9f25-6b864eff176e&amp;Key=d1e8125c-2087-475f-9482-b1184e314093&amp;FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b" class="btn btn-default btn-sm" style="font-weight: bold; margin-right: 5px">Ubah</a><a href="sales-order-form?Source=d1e8125c-2087-475f-9482-b1184e314093&amp;AppendKeyToReferrer=True&amp;Referrer=712d2f5f-22cb-4bfb-948f-9dd54ad60d06&amp;FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b" class="btn btn-default btn-sm" style="font-weight: bold; margin-right: 5px">Duplikasi</a>
                  <div class="btn-group">
                     <button class="btn btn-default dropdown-toggle btn-sm" style="font-weight: bold; margin-right: 5px" data-toggle="dropdown">Salin ke<span class="caret" style="margin-left: 5px"></span></button>
                     <ul class="dropdown-menu">
                        <li><a href="sales-invoice-form?Source=d1e8125c-2087-475f-9482-b1184e314093&amp;AppendKeyToReferrer=True&amp;Referrer=65cea3a7-e7cb-4bcf-a194-2d59f448ff64&amp;FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b">Buat Faktur Penjualan</a></li>
                        <li><a href="purchase-order-form?Source=d1e8125c-2087-475f-9482-b1184e314093&amp;AppendKeyToReferrer=True&amp;Referrer=5b5739e7-af75-4c11-9104-daea4974bc6f&amp;FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b">Buat Pesanan Pembelian</a></li>
                        <li><a href="purchase-invoice-form?Source=d1e8125c-2087-475f-9482-b1184e314093&amp;AppendKeyToReferrer=True&amp;Referrer=093a7599-4c21-4168-a0fe-26c2a8f77312&amp;FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b">Buat Faktur Pembelian</a></li>
                        <li><a href="delivery-note-form?Source=d1e8125c-2087-475f-9482-b1184e314093&amp;AppendKeyToReferrer=True&amp;Referrer=d7a08bb4-9ae6-48e8-ad0b-4794e82f3038&amp;FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b">Buat Surat Jalan</a></li>
                     </ul>
                  </div>
               </td>
               <td style="border-left: 1px solid #fff; padding-left: 10px; width: 1px; white-space: nowrap">
                  <button class="btn btn-default btn-sm" style="font-weight: bold; margin-right: 5px" onclick="javascript:window.print()">Cetak</button><button id="btn-print" class="btn btn-default btn-sm" style="font-weight: bold; margin-right: 5px" onclick="javascript:printToPdf()">PDF<img src="resources/ajax-loader.gif" id="btn-print-ajax" style="margin-left: 10px; display: none"></button><button class="btn btn-default btn-sm" style="font-weight: bold; margin-right: 5px" data-toggle="modal" data-target="#email-modal">Surel</button>
                  <div id="email-modal" class="modal">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header" style="background-color: #f5f5f5; border-top-left-radius: 6px; border-top-right-radius: 6px;">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <div class="header" style="font-size: 18px">Surel</div>
                           </div>
                           <div class="modal-body" style="background-color: #f9f9f9; padding: 10px; box-shadow: inset 0px 1px 0px #fff">
                              <table style="width: 100%; border-spacing: 10px; border-collapse: separate">
                                 <tbody>
                                    <tr>
                                       <td style="vertical-align: middle; width: 1px; white-space: nowrap"><label>Kepada</label></td>
                                       <td><input type="text" id="email-modal-to" class="form-control input-sm" style="width: 100%" name="To" value="poligon"></td>
                                    </tr>
                                    <tr>
                                       <td style="vertical-align: middle; width: 1px; white-space: nowrap"><label>Judul</label></td>
                                       <td><input type="text" id="email-modal-subject" class="form-control input-sm" style="width: 100%" name="Subject" value="Pesanan Penjualan" placeholder="Pesanan Penjualan"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="2"><textarea id="email-modal-body" class="form-control input-sm" style="width: 100%; height: 150px" name="Body" spellcheck="true"></textarea></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <div id="emailError" style="color: red; font-weight: bold; display: none; padding: 10px; padding-top: 0px"></div>
                           </div>
                           <div class="modal-footer" style="margin-top: 0px; box-shadow: 1px 1px 0 #fff inset; background-color: #f5f5f5; border-top: 1px solid #dddddd; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;"><button class="btn btn-link btn-sm" style="font-weight: bold" data-dismiss="modal">Batal</button><button id="email-btn" class="btn btn-default btn-sm" style="font-weight: bold" onclick="javascript:email()">Kirim</button><img src="resources/ajax-loader.gif" style="display: none; margin-left: 10px; margin-right: 10px" id="email-ajax-indicator"></div>
                        </div>
                     </div>
                  </div>
                  <script src="resources/jquery/jquery-1-8-2-min.js" type="text/javascript"></script><script src="resources/bootstrap/js/bootstrap-min.js?v=17.10.60.0" type="text/javascript"></script><script type="text/javascript">function email() { 
                     from = $('#email-modal-from').val();
                     to = $('#email-modal-to').val();
                     subject = $('#email-modal-subject').val();
                     body = $('#email-modal-body').val();
                     htmlContent = $('#printable-content').clone();
                     htmlContent.find('a.internal').each(function(){ var text = $(this).text(); $(this).before(text); $(this).remove() });
                     emailTracking = $('#email-modal-emailtracking').is(':checked') ? 'true' : 'false';
                     $('#email-ajax-indicator').show();
                     $('#emailError').hide();
                     $('#email-btn').prop('disabled', true);
                     $.ajax({
                     url: 'email?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b',
                     type: 'post',
                     data: { From: from, Body: body, To: to, Subject: subject, EmailTracking: emailTracking, Html: htmlContent.html() },
                          // callback handler that will be called on success
                     success: function(response, textStatus, jqXHR){
                                 $('#email-btn').prop('disabled', false);
                     $('#email-ajax-indicator').hide();
                                 $('[data-dismiss=modal]').trigger({ type: 'click' });
                                 $('body').removeClass('modal-open');
                                 $('.modal-backdrop').remove();
                     },
                     // callback handler that will be called on error
                     error: function(jqXHR, textStatus, errorThrown){
                     $('#email-ajax-indicator').hide();
                     $('#email-btn').prop('disabled', false);
                                 $('#emailError').html(jqXHR.responseText);
                                 $('#emailError').show();
                     }
                     });
                     }
                  </script><script type="text/javascript">function printToPdf() { 
                     $('#btn-print').prop('disabled', true);
                     $('#btn-print-ajax').show();
                     $.ajax({
                     url: 'pdf?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b',
                     type: 'post',
                     data: { Html: $('#printable-content').html() },
                     success: function(response, textStatus, jqXHR){
                                 $('#btn-print').prop('disabled', false);
                                 $('#btn-print-ajax').hide();
                                 location.href = response;
                     },
                     error: function(jqXHR, textStatus, errorThrown){
                     $('#btn-print').prop('disabled', false);
                                 $('#btn-print-ajax').hide();
                                 alert(jqXHR.responseText);
                     }
                     });
                     }
                  </script>
               </td>
               <td style="padding-left: 10px; text-align: right"></td>
            </tr>
         </tbody>
      </table>
   </div>
   <div class="panel-body well">
      <div id="printable-content" class="panel" style="max-width: 800px; font-size: 12px; padding: 1px; border-radius: 0px">
         <table style="padding: 30px">
            <thead>
               <tr>
                  <td colspan="99">
                     <table style="margin-bottom: 20px">
                        <tbody>
                           <tr>
                              <td style="font-weight: bold; font-size: 32px">Pesanan Penjualan</td>
                           </tr>
                        </tbody>
                     </table>
                     <table style="margin-bottom: 20px">
                        <tbody>
                           <tr>
                              <td>
                                 <div><b>coir</b> 2</div>
                                 <div>hahah@gmail.com</div>
                                 <div>23</div>
                              </td>
                              <td style="border-right-width: 1px; padding-right: 20px; text-align: right">
                                 <div style="font-weight: bold">Tanggal diterbitkan</div>
                                 <div style="margin-bottom: 10px">4-Mar 18</div>
                                 <div style="font-weight: bold">Tanggal Kirim</div>
                                 <div style="margin-bottom: 10px">23-Mar 18</div>
                                 <div style="font-weight: bold">Referensi</div>
                                 <div style="margin-bottom: 10px">1</div>
                              </td>
                              <td style="padding-left: 20px; width: 1px; white-space: nowrap">
                                 <div style="font-weight: bold">Akuntansi</div>
                                 <div>1313 Webfoot Walk<br>
                                    Duckburg<br>
                                    Calisota
                                 </div>
                                 <div></div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div style="font-size: 14px; font-weight: bold; margin-bottom: 20px">1</div>
                  </td>
               </tr>
               <tr>
                  <td style="font-weight: bold; padding: 5px 10px; text-align: left; border-left-width: 1px; border-bottom-width: 1px; border-top-width: 1px">Deskripsi</td>
                  <td style="font-weight: bold; padding: 5px 10px; text-align: right; border-left-width: 1px; border-bottom-width: 1px; border-top-width: 1px; border-right-width: 1px; white-space: nowrap; width: 80px">Jumlah</td>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td style="padding: 5px 10px; text-align: left; border-left-width: 1px">12</td>
                  <td style="padding: 5px 10px; text-align: right; border-left-width: 1px; border-right-width: 1px; white-space: nowrap; width: 80px">10,00</td>
               </tr>
               <tr>
                  <td style="border-bottom-width: 1px; border-left-width: 1px">&nbsp;</td>
                  <td style="border-bottom-width: 1px; border-left-width: 1px; border-right-width: 1px">&nbsp;</td>
               </tr>
               <tr>
                  <td colspan="1" style="padding: 5px 10px; text-align: right; font-weight: bold">Total</td>
                  <td style="border-left-width: 1px; white-space: nowrap; border-right-width: 1px; border-bottom-width: 1px; padding: 5px 10px; text-align: right; font-weight: bold">10,00</td>
               </tr>
               <tr>
                  <td colspan="99">
                     <div style="font-weight: bold; padding-top: 20px">Alamat Pengiriman</div>
                     <div>111</div>
                  </td>
               </tr>
               <tr>
                  <td colspan="99">
                     <div style="font-weight: bold; padding-top: 20px">Instruksi Pengiriman</div>
                     <div>1111</div>
                  </td>
               </tr>
               <tr>
                  <td colspan="99">
                     <div style="font-weight: bold; padding-top: 20px">Diotorisasi oleh</div>
                     <div>2wdd</div>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
   <script src="resources/jquery/jquery-1-8-2-min.js" type="text/javascript"></script>
   <style>#attachments div.btn-group { margin-left: 0px; margin-right: 10px; margin-top: 2px; margin-bottom: 2px }#attachments img { margin-top: -1px; margin-left: 10px }.btn-file { position: relative; overflow: hidden; }.btn-file input[type=file] { position: absolute; top: 0; right: 0; min-width: 100%; min-height: 100%; font-size: 100px; text-align: right; filter: alpha(opacity=0); opacity: 0; outline: none; background: white; cursor: inherit; display: block; }</style>
   <div class="panel-footer print-display-none">
      <table style="border-collapse: separate">
         <tbody>
            <tr>
               <td style="padding-right: 10px"><img src="resources/webalys/_16px/edition-49.png" style="opacity: 0.5"></td>
               <td style="border-right: 1px solid #ddd; padding-right: 5px">
                  <div id="attachments" class="btn-toolbar"></div>
               </td>
               <td style="border-left: 1px solid #fff; padding-left: 10px"><span class="btn btn-default btn-sm btn-file" style="font-weight: bold">Lampiran Baru&nbsp;…<input type="file" id="fileupload" name="files" data-url="new-attachment?Source=d1e8125c-2087-475f-9482-b1184e314093&amp;FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b"></span></td>
            </tr>
         </tbody>
      </table>
   </div>
   <script src="resources/fileupload/jquery-ui-widget.js" type="text/javascript"></script><script src="resources/fileupload/jquery-iframe-transport.js" type="text/javascript"></script><script src="resources/fileupload/jquery-fileupload.js" type="text/javascript"></script><script type="text/javascript">$(function () {
      $('#fileupload').fileupload({
          dataType: 'text',
          add: function (e, data) {
              var btnGroup = $('<div/>').addClass('btn-group btn-group-xs');
              var innerBtnGroup = $('<button />').addClass('btn btn-default disabled').text(data.files[0].name).click(function () { getFile(this); }).appendTo(btnGroup);
              $('<img />').attr('src', 'resources/ajax-loader.gif').appendTo(innerBtnGroup);
              $('<button />').addClass('btn btn-default disabled').text('×').click(function () { deleteFile(this); }).appendTo(btnGroup);
              data.context = btnGroup.appendTo('#attachments');
              data.submit();
          },
          done: function (e, data) {
              data.context.find('.btn').attr('data-id', data.result);
              data.context.find('img').remove();
              data.context.find('.disabled').removeClass('disabled');
          },
          fail: function (e, data) {
              data.context.remove();
              alert(data.jqXHR.responseText);
          }
      });
      });
      function getFile(e) {
      var key = $(e).attr('data-id');
      $(e).parent().find('button').addClass('disabled');
      $('<img />').attr('src', 'resources/ajax-loader.gif').appendTo($(e).parent().children()[0]);
      $.ajax({
          type: 'POST',
          url: 'retrieve-attachment?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b&Key='+key
          })
          .always(function(msg) {
              $(e).parent().find('button').removeClass('disabled');
              $(e).parent().find('img').remove();                        
          })
          .fail(function(msg) {
              alert(msg.responseText);
          })
          .success(function(msg) {
              window.location.href = 'view-attachment?Referrer=0d8084a0-a488-43da-9f25-6b864eff176e&FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b&Key='+key;
          });    
      };
      function deleteFile(e) {
      if (!confirm("Anda yakin?")) return;
      $(e).parent().find('button').addClass('disabled');
      $('<img />').attr('src', 'resources/ajax-loader.gif').appendTo($(e).parent().children()[0]);
      var key = $(e).attr('data-id');
      $.ajax({
          type: 'POST',
          url: 'remove-attachment?FileID=a5578f2c-1b18-4b54-8840-bf278d5b705b&Key='+key
          })
          .done(function(msg) {
              $(e).parent().remove();
          })
          .fail(function(msg) {
              $(e).parent().find('button').removeClass('disabled');
              $(e).parent().find('img').remove();
          });
      };
   </script>
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
  <?php include 'include/footer.php'; ?>
  </body>
</html>
 
 

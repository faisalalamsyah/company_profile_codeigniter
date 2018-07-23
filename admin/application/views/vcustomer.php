      <title><?=$title?></title>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><small>You are on the page <?=$title?></small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i>Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i><?=$title?></li>
            </ol>
            <div class="row">
          <div class="col-lg-6">
            <h2><?=$title?></h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover tablesorter" rows="1" width="1200px">
               
                  <tr>
                    <th>No.<i class="fa fa-sort"></i></th>
                    <th>Customer</th>
                    <th>Website</th>
                    <th>gambar</th>
                    <th>Action</th>
                  </tr>
                <?php 
                  $no = 1;
                  foreach ($hasil as $b => $row) {?>
                    
                  <tr>
                    <td><?=$no++?></th>
                    <td><?=$row->customer?></th>
                    <td><?=$row->website?></th>
                    <td><img src="assets/img/customer/<?=$row->gambar?>" width="100" height="100" ></th>
                    <td>
                   <a 
                      id="edit_customer"
                      data-id="<?php echo $row->id?>"
                      data-customer="<?php echo $row->customer?>"
                      data-website="<?php echo $row->website?>"
                      data-gambar="<?php echo $row->gambar?>"
                      data-toggle="modal" data-target="#edit">
                    <div><button class="btn btn-info btn-l"><i class="fa fa-edit"></i>Edit</button></a>
                    <a href="<?php echo base_url('customer/delete/'.$row->id); ?>" onclick="return confirm('yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger btn-l"><i class="fa fa-trash-o"></i>Delete</button></a>
                    </div>
                    </th>
                  </tr>
                  <?php } ?>
              </table>
            </div>
            

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-floppy-o"></i>Tambah</button>



            <div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambahkan Nama Customer</h4>
                  </div>
                  

                  <form action="customer/proses" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                      <div class="form-group">
                        <label class="control-label" for="customer"><i class="fa fa-user"></i> Nama Customer</label>
                        <input type="text" name="customer" class="form-control" id="customer" required>
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="website"><i class="fa fa-globe"></i> Website Customer</label>
                        <input type="text" name="website" class="form-control" id="website">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar"><i class="fa fa-paper-plane"></i>Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar" required>
                      </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <input type="submit" class="btn btn-success fa-floppy-o" name="tambah" value="simpan">
                    </div>
                  </form>
                 
                </div>
              </div>
            </div>



       <div id="edit" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Nama Customer</h4>
                  </div>
                  

                  <form id="form" action="customer/edit" method="post" enctype="multipart/form-data">
                    <div class="modal-body" id="modal-edit">

                      <div class="form-group">
                        <input type="hidden" id="id" name="id" class="form-control">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="customer"><i class="fa fa-user"></i> Nama Customer</label>
                        <input type="text" name="customer" class="form-control" id="customer" required>
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="website"><i class="fa fa-globe"></i> Website Customer</label>
                        <input type="text" name="website" class="form-control" id="website">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar"><i class="fa fa-paper-plane"></i>Gambar</label>
                        <div style="padding-bottom:10px">
                          <img src="" width="100" id="pict">
                        </div>
                        <input type="file" name="gambar" class="form-control" id="gambar" required>
                      </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <input type="submit" class="btn btn-success fa-floppy-o" name="edit" value="simpan">
                    </div>
                  </form>
                 
                </div>
              </div>
            </div>


          <script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>  
          <script type="text/javascript">
            $(document).on("click", "#edit_customer", function() {
              var id = $(this).data('id');
              var customer = $(this).data('customer');
              var website = $(this).data('website');
              var gambar = $(this).data('gambar');
              $("#modal-edit #id").val(id);
              $("#modal-edit #customer").val(customer);
              $("#modal-edit #website").val(website);
              $("#modal-edit #pict").attr("src", "assets/img/customer/"+gambar);

            })
            $(document).ready(function(e){
              $("#form").on("submit", (function(e){
                e.preventDefault();
                $.ajax({
                  url : 'customer/edit',
                  type : 'POST',
                  data : new FormData(this),
                  contentType : false,
                  cache : false,
                  processData : false,
                 success : function(msg) {
                   $('.table').html(msg);
                  }
                })
              }))
            })
          </script>
          </div>

      </div>
            
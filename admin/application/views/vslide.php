

<title><?=$title?></title>
<div id="page-wrapper">
<div class="row">
          <div class="col-lg-12">
            <h1><small>You are on the page <?=$title?></small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i>Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i>Slide</li>
            </ol>
            

 <div class="row">
          <div class="col-lg-6">
            <h2><?=$title?></h2>
            <div class="table-responsive">
              <?php $i=0; if ($aktif==null) {
            echo ('<button type="button" class="btn btn-success" data-toggle="modal" data-target="#aktif"><i class="fa fa-floppy-o"></i>Aktifkan Slide</button>');
            } ?>
              <table class="table table-bordered table-hover tablesorter" rows="1">
               
                  <tr>
                    <th>No.<i class="fa fa-sort"></i></th>
                    <th>Nama Gambar</th>
                    <th>Gambar Slide</th>
                    <th>Action</th>
                  </tr>
                <?php 
                  $no = 1;
                  foreach ($hasil as $b => $row) {?>
                    
                  <tr>
                    <td><?=$no++?></th>
                    <td><?=$row->nama?></th>
                    <td><img src="<?php echo base_url('../assets/img/slide/'); ?><?=$row->gambar?>" width="300" height="100" ></th>
                    <td>
                   <a 
                      id="edit_slide"
                      data-idslide="<?php echo $row->id?>"
                      data-nama="<?php echo $row->nama?>"
                      data-gambar1="<?php echo $row->gambar?>"
                      data-gambar2="<?php echo $row->gambar_png?>"
                      data-toggle="modal" data-target="#edit">
                    
                    <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</button></a>
                    <a href="<?php echo base_url('slide/delete/'.$row->id); ?>" onclick="return confirm('yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</button></a>
                    </th>
                  </tr>
                  <?php } ?>
              </table>
            </div>
            

        <div id="edit" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Slide</h4>
                  </div>
              
                  <form  id="form" action="slide/edit" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body" id="modal-edit">
                      <div class="form-group">
                        <input type="hidden" id="idslide" name="idslide" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar1">Background</label>
                        <div style="padding-bottom:10px">
                          <img src="" width="100" id="pict1">
                        </div>
                        <input type="file" name="gambar1"  class="form-control" id="gambar1">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar2">Gambar PNG</label>
                        <div style="padding-bottom:10px">
                          <img src="" width="100" id="pict2">
                        </div>
                        <input type="file" name="gambar2"  class="form-control" id="gambar2">
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <input type="submit" class="btn btn-success" name="edit" value="Edit">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
         
          

              <?php if ($hasil!=null) {
            echo ('<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-floppy-o"></i>Tambah</button>');
            } ?>

            
            <div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Gambar Slide</h4>
                  </div>
                  

                  <form action="slide/proses" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label" for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama_gbr" required>
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar1">Background</label>
                        <input type="file" name="gambar1" class="form-control" id="gambar1" required>
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar2">Gambar PNG</label>
                        <input type="file" name="gambar2" class="form-control" id="gambar2" required>
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
          </div>
      </div>


 <div id="aktif" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">aktifkan</h4>
                  </div>
                  

                  <form action="slide/aktif" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label" for="nama">Aktifkan</label>
                        <input type="text" name="aktif" class="form-control" id="aktif" readonly="" value="active">
                      </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success fa-floppy-o" name="tambah" value="aktifkan">
                    </div>
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
      </div>


<script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>  
          <script type="text/javascript">
            $(document).on("click", "#edit_slide", function() {
              var idslide = $(this).data('idslide');
              var nama = $(this).data('nama');
              var gambar1 = $(this).data('gambar1');
              var gambar2 = $(this).data('gambar2');
              $("#modal-edit #idslide").val(idslide);
              $("#modal-edit #nama").val(nama);
              $("#modal-edit #pict1").attr("src", "../assets/img/slide/"+gambar1);
              $("#modal-edit #pict2").attr("src", "../assets/img/slide/"+gambar2);

            })
            $(document).ready(function(e){
              $("#form").on("submit", (function(e){
                e.preventDefault();
                $.ajax({
                  url : 'slide/edit',
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

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
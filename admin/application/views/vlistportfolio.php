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
                    <th>Judul</th>
                    <th>Action</th>
                  </tr>
                <?php 
                  $no = 1;
                  foreach ($hasil as $b => $row) {?>
                    
                  <tr>
                    <td><?=$no++?></th>
                    <td><?=$row->judul?></th>
                    <td>
                   <a 
                      id="edit_portfolio"
                      data-id="<?php echo $row->id?>"
                      data-judul="<?php echo $row->judul?>"
                      data-deskripsi="<?php echo $row->deskripsi?>"
                      data-gambar1="<?php echo $row->gambar1?>"
                      data-gambar2="<?php echo $row->gambar2?>"
                      data-gambar3="<?php echo $row->gambar3?>"
                      data-gambar4="<?php echo $row->gambar4?>"
                      data-gambar5="<?php echo $row->gambar5?>"
                      data-toggle="modal" data-target="#edit">
                    <div><button class="btn btn-info btn-l"><i class="fa fa-edit"></i>Edit</button></a>
                      <a href="<?php echo base_url('list_portfolio/delete/'.$row->id); ?>" onclick="return confirm('yakin ingin menghapus data ini?')">
                      <button type="button" class="btn btn-danger btn-l"><i class="fa fa-trash-o"></i>Delete</button></a>
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
                    <h4 class="modal-title">Tambahkan Portfolio</h4>
                  </div>
                  

                  <form action="list_portfolio/proses" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                      <div class="form-group">
                        <label class="control-label" for="customer"><i class="fa fa-user"></i> Judul</label>
                        <input type="text" name="judul" class="form-control" id="deskripsi" required>
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="customer"><i class="fa fa-paper-plane"></i> Deskripsi</label>
                        <textarea type="textarea" name="deskripsi" class="form-control" id="deskripsi" rows="20"></textarea>
                        
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar1"><i class="fa fa-paper-plane"></i>Gambar1</label>
                        <input type="file" name="gambar1" class="form-control" id="gambar1">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar2"><i class="fa fa-paper-plane"></i>Gambar2</label>
                        <input type="file" name="gambar2" class="form-control" id="gambar2">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar3"><i class="fa fa-paper-plane"></i>Gambar3</label>
                        <input type="file" name="gambar3" class="form-control" id="gambar3">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar4"><i class="fa fa-paper-plane"></i>Gambar4</label>
                        <input type="file" name="gambar4" class="form-control" id="gambar4">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar5"><i class="fa fa-paper-plane"></i>Gambar5</label>
                        <input type="file" name="gambar5" class="form-control" id="gambar5">
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
                    <h4 class="modal-title">Edit Portfolio</h4>
                  </div>
                  

                  <form action="list_portfolio/edit" method="post" enctype="multipart/form-data">
                    <div class="modal-body" id="modal-edit">

                      <div class="form-group">
                        <input type="hidden" id="id" name="id" class="form-control">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="judul"><i class="fa fa-user"></i> Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" required>
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="deskripsi"><i class="fa fa-paper-plane"></i> Deskripsi</label>
                        <textarea type="textarea" name="deskripsi" class="form-control" id="deskripsi" rows="20"></textarea>
                        
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar1"><i class="fa fa-paper-plane"></i>Gambar1</label>
                        <div style="padding-bottom:10px">
                          <img src="" width="100" id="pict1">
                        </div>
                        <input type="file" name="gambar1" class="form-control" id="gambar1">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar2"><i class="fa fa-paper-plane"></i>Gambar2</label>
                        <div style="padding-bottom:10px">
                          <img src="" width="100" id="pict2">
                        </div>
                        <input type="file" name="gambar2" class="form-control" id="gambar2">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar3"><i class="fa fa-paper-plane"></i>Gambar3</label>
                        <div style="padding-bottom:10px">
                          <img src="" width="100" id="pict3">
                        </div>
                        <input type="file" name="gambar3" class="form-control" id="gambar3">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar4"><i class="fa fa-paper-plane"></i>Gambar4</label>
                        <div style="padding-bottom:10px">
                          <img src="" width="100" id="pict4">
                        </div>
                        <input type="file" name="gambar4" class="form-control" id="gambar4">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="gambar5"><i class="fa fa-paper-plane"></i>Gambar5</label>
                        <div style="padding-bottom:10px">
                          <img src="" width="100" id="pict5">
                        </div>
                        <input type="file" name="gambar5" class="form-control" id="gambar5">
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

             <script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>  
          <script type="text/javascript">
            $(document).on("click", "#edit_portfolio", function() {
              var id = $(this).data('id');
              var judul = $(this).data('judul');
              var deskripsi = $(this).data('deskripsi');
              var gambar1 = $(this).data('gambar1');
              var gambar2 = $(this).data('gambar2');
              var gambar3 = $(this).data('gambar3');
              var gambar4 = $(this).data('gambar4');
              var gambar5 = $(this).data('gambar5');
              $("#modal-edit #id").val(id);
              $("#modal-edit #judul").val(judul);
              $("#modal-edit #deskripsi").val(deskripsi);
              $("#modal-edit #pict1").attr("src", "assets/img/portfolio/"+gambar1);
              $("#modal-edit #pict2").attr("src", "assets/img/portfolio/"+gambar2);
              $("#modal-edit #pict3").attr("src", "assets/img/portfolio/"+gambar3);
              $("#modal-edit #pict4").attr("src", "assets/img/portfolio/"+gambar4);
              $("#modal-edit #pict5").attr("src", "assets/img/portfolio/"+gambar5);

            })
            $(document).ready(function(e){
              $("#form").on("submit", (function(e){
                e.preventDefault();
                $.ajax({
                  url : 'list_portfolio/edit',
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



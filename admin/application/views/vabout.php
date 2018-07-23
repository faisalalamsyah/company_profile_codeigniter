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
                    <th>Page</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Action</th>
                  </tr>
                <?php 
                  $no = 1;
                  foreach ($hasil as $b => $row) {?>
                    
                  <tr>
                    <td><?=$no++?></th>
                    <td><?=$row->page?></th>
                    <td><?=$row->judul?></th>
                    <td><?php echo word_limiter($row->deskripsi,10); ?></th>
                    <td><img src="assets/img/slide/<?=$row->gambar?>" width="100"></th>
                    <td>
                   <a 
                      id="edit_page"
                      data-idpage="<?php echo $row->id?>"
                      data-page="<?php echo $row->page?>"
                      data-judul="<?php echo $row->judul?>"
                      data-deskripsi="<?php echo $row->deskripsi?>"
                      data-gambar="<?php echo $row->gambar?>"
                      data-toggle="modal" data-target="#edit">
                    <div><button class="btn btn-info btn-l"><i class="fa fa-edit"></i>Edit</button></a></div>
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
                    <h4 class="modal-title">Edit</h4>
                  </div>
              
                  <form  id="form" action="about/edit" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body" id="modal-edit">
                      <div class="form-group">
                        <input type="hidden" id="idpage" name="idpage" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="page">page</label>
                        <input readonly="" type="text" name="page" class="form-control" id="page">
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="judul">judul</label>
                        <input type="text" name="judul" class="form-control" id="judul">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="deskripsi">Deskripsi</label>
                         <textarea class="form-control" rows="15" name="deskripsi" id="deskripsi"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="gambar">Gambar: *jpg, *png & *gift</label>
                        <div style="padding-bottom:10px">
                          <img src="" width="100" id="pict">
                        </div>
                        <input type="file" name="gambar" class="form-control" id="gambar">
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
         </div>


<script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>  
          <script type="text/javascript">
            $(document).on("click", "#edit_page", function() {
              var idpage = $(this).data('idpage');
              var page = $(this).data('page');
              var judul = $(this).data('judul');
              var deskripsi = $(this).data('deskripsi');
              var gambar = $(this).data('gambar');
              $("#modal-edit #idpage").val(idpage);
              $("#modal-edit #page").val(page);
              $("#modal-edit #judul").val(judul);
              $("#modal-edit #deskripsi").val(deskripsi);
              $("#modal-edit #pict").attr("src", "assets/img/slide/"+gambar);

            })
            $(document).ready(function(e){
              $("#form").on("submit", (function(e){
                e.preventDefault();
                $.ajax({
                  url : 'about/edit',
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


        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->


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
                  
            <?php if ($hasil==null) {
            echo ('<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-floppy-o"></i>Tambah</button>');
            } ?>

              <table class="table table-bordered table-hover tablesorter"  rows="1" >
               
                  <tr>
                    <th>No.<i class="fa fa-sort"></i></th>
                    <th>Perusahaan</th>
                    <th>Alamat</th>
                    <th>Phone</th>
                    
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                <?php 
                  $no = 1;
                  foreach ($hasil as $b => $row) {
                  	?>
                    
                  <tr valign="middle" width="800px" hight="100px" >
                    <td><?=$no++?></th>
                    <td><?=$row->company?></th>
                    <td><?=$row->alamat?></th>
                    <td><?=$row->phone?></th>
                  
                    <td><?=$row->email?></th>
                    <td>
                   <a 
                      id="edit_company"
                      data-id="<?php echo $row->id?>"
                      data-company="<?php echo $row->company?>"
                      data-alamat="<?php echo $row->alamat?>"
                      data-phone="<?php echo $row->phone?>"
                      data-instagram="<?php echo $row->instagram?>"
                      data-twitter="<?php echo $row->twitter?>"
                      data-facebook="<?php echo $row->facebook?>"
                      data-google_maps="<?php echo $row->google_maps?>"
                      data-email="<?php echo $row->email?>"
                      data-toggle="modal" data-target="#edit">
                    <div><button class="btn btn-info btn-l"><i class="fa fa-edit"></i>Edit</button></a>
                 
                    </div>

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
              
                  <form  id="form" action="company/edit" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body" id="modal-edit">
                      
                      <div class="form-group">
                        <input type="hidden" id="id" name="id" class="form-control">
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label" for="company"><i class="fa fa-building-o"></i> Nama Perusahaan</label>
                        <input type="text" name="company" class="form-control" id="company" required>
                      </div>

                     	<div class="form-group">
                        <label class="control-label" for="alamat"><i class="fa fa-compass"></i> Alamat</label>
                        <textarea type="text" rows="3" name="alamat" class="form-control" id="alamat"></textarea>
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="phone"><i class="fa fa-phone"></i> Telp / Handphone / Whatsapp</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="contoh: 0812320xxx">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="instagram"><i class="fa fa-instagram"></i> Instagram</label>
                        <input type="text" name="instagram" class="form-control" id="instagram" placeholder="contoh: @yokohama_Store">
                      </div>

                        <div class="form-group">
                        <label class="control-label" for="twitter"><i class="fa fa-twitter"></i> twitter</label>
                        <input type="text" name="twitter" class="form-control" id="twitter" placeholder="contoh: @yokohama_Store">
                      </div>

                        <div class="form-group">
                        <label class="control-label" for="facebook"><i class="fa fa-facebook"></i> facebook</label>
                        <input type="text" name="facebook" class="form-control" id="facebook" placeholder="contoh: www.facebook.com/yokohama">
                      </div>

                        <div class="form-group">
                        <label class="control-label" for="google_maps"><i class="fa fa-location-arrow"></i> Google Maps Location</label>
                        <textarea type="text" name="google_maps" class="form-control" id="google_maps" placeholder="copy link google maps lokasi alamat anda pada browser" rows="7"></textarea>
                      </div>

                        <div class="form-group">
                        <label class="control-label" for="email"><i class="fa fa-retweet"></i> E-mail</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="contoh: example@example.com">
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



            <div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Company</h4>
                  </div>
              
                  <form  action="company/tambah" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                      
                      <div class="form-group">
                        <input type="hidden" id="id" name="id" class="form-control">
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label" for="company"><i class="fa fa-building-o"></i> Nama Perusahaan</label>
                        <input type="text" name="company" class="form-control" id="company" required>
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="alamat"><i class="fa fa-compass"></i> Alamat</label>
                        <textarea type="text" rows="3" name="alamat" class="form-control" id="alamat"></textarea>
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="phone"><i class="fa fa-phone"></i> Telp / Handphone / Whatsapp</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="contoh: 0812320xxx">
                      </div>

                      <div class="form-group">
                        <label class="control-label" for="instagram"><i class="fa fa-instagram"></i> Instagram</label>
                        <input type="text" name="instagram" class="form-control" id="instagram" placeholder="contoh: @yokohama_Store">
                      </div>

                        <div class="form-group">
                        <label class="control-label" for="twitter"><i class="fa fa-twitter"></i> twitter</label>
                        <input type="text" name="twitter" class="form-control" id="twitter" placeholder="contoh: @yokohama_Store">
                      </div>

                        <div class="form-group">
                        <label class="control-label" for="facebook"><i class="fa fa-facebook"></i> facebook</label>
                        <input type="text" name="facebook" class="form-control" id="facebook" placeholder="contoh: www.facebook.com/yokohama">
                      </div>

                        <div class="form-group">
                        <label class="control-label" for="google_maps"><i class="fa fa-location-arrow"></i> Google Maps Location</label>
                        <input type="text" name="google_maps" class="form-control" id="google_maps" placeholder="copy link google maps lokasi alamat anda pada browser">
                      </div>

                        <div class="form-group">
                        <label class="control-label" for="email"><i class="fa fa-retweet"></i> E-mail</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="contoh: example@example.com">
                      </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <input type="submit" class="btn btn-success" name="tambah" value="simpan">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
         </div>






<script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>  
          <script type="text/javascript">
            $(document).on("click", "#edit_company", function() {
              var id = $(this).data('id');
              var company = $(this).data('company');
              var alamat = $(this).data('alamat');
              var phone = $(this).data('phone');
              var instagram = $(this).data('instagram');
              var twitter = $(this).data('twitter');
              var facebook = $(this).data('facebook');
              var google_maps = $(this).data('google_maps');
              var email = $(this).data('email');
              $("#modal-edit #id").val(id);
              $("#modal-edit #company").val(company);
              $("#modal-edit #alamat").val(alamat);
              $("#modal-edit #phone").val(phone);
              $("#modal-edit #instagram").val(instagram);
              $("#modal-edit #twitter").val(twitter);
              $("#modal-edit #facebook").val(facebook);
              $("#modal-edit #google_maps").val(google_maps);
              $("#modal-edit #email").val(email);
              

            })
            $(document).ready(function(e){
              $("#form").on("submit", (function(e){
                e.preventDefault();
                $.ajax({
                  url : 'company/edit',
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


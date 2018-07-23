

<title><?=$title?></title>
<div id="page-wrapper">
<div class="row">
          <div class="col-lg-12">
            <h1><small>You are on the page <?=$title?></small></h1>
            <ol class="breadcrumb">
              <li><a href="index.php"><i class="icon-dashboard"></i>Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i>User</li>
            </ol>
            

 <div class="row">
          <div class="col-lg-6">
            <h2>User List</h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover tablesorter">
               
                  <tr>
                    <th>No.<i class="fa fa-sort"></i></th>
                    <th>User</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                <?php 
                  $no = 1;
                  foreach ($hasil as $b => $row) {?>
                    
                  <tr>
                    <td><?=$no++?></th>
                    <td><?=$row->user?></th>
                    <td><?=$row->password?></th>
                    <td>
                   <a 
                      id="edit_user"
                      data-iduser="<?php echo $row->id_user?>"
                      data-user="<?php echo $row->user?>"
                      data-password="<?php echo $row->password ?>"
                      data-toggle="modal" data-target="#edit">
                    
                    <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</button></a>
                    <a href="<?php echo base_url('user/delete/'.$row->id_user); ?>"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</button></a>
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
                    <h4 class="modal-title">Edit User</h4>
                  </div>
              
                  <form  action="user/proses" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body" id="modal-edit">
                      <div class="form-group">
                        <input type="hidden" id="iduser" name="iduser" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="user">User</label>
                        <input type="text" name="user" class="form-control" id="user">
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="password">Password</label>
                        <input type="text" name="password"  class="form-control" id="password" required>
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
         
          

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-floppy-o"></i>Tambah</button>
            <div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah User</h4>
                  </div>
                  

                  <form action="user/proses" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label" for="user">User</label>
                        <input type="text" name="user" class="form-control" id="user" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password" required>
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

<script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>  
          <script type="text/javascript">
            $(document).on("click", "#edit_user", function() {
              var id = $(this).data('iduser');
              var user = $(this).data('user');
              var password = $(this).data('password');
              $("#modal-edit #iduser").val(id);
              $("#modal-edit #user").val(user);
           //   $("#modal-edit #password").val(password);

            })
          </script>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
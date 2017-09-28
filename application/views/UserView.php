<div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> User View</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                    
                    
                    <div class="row">
                      
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                          <?php $i = 1;?>
                            <tr>
                              
                              <th>No</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Telepon</th>
                              <th>Action</th>
                    
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              
                              <?php foreach ($user as $u) {?>
                              <td><?php echo $i++; ?></td>
                              <td><?php echo $u['nama']?></td>
                              <td><?php echo $u['alamat']?></td>
                              <td><?php echo $u['telepon']?></td>
                              
                              <td>
                                
                        <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo base_url();?>User_controller/edit_user/<?php echo $u['id_user']; ?>">Edit</a></li>
                          <li><a href="<?php echo base_url();?>User_controller/delete_user/<?php echo $u['id_user']; ?>"  onclick="return confirm('Anda Yakin Akan Menghapus User ini?')">Delete</a></li>                          
                        </ul>
                      </div>
                              </td>
                            </tr>
                             <?php }?>
                          </tbody>
                        </table>
                      </div>
                       <div class="btn-group">
                        <a href="<?php echo base_url('user_controller/tambah_user');?>"><button type="Button" class="btn btn-warning m-t-15 waves-effect">Add News</button></a>
                      </div>

                    </div>
                  </div>
              </div><!-- panel body -->
            </div>
        </div><!-- content -->
      </div>
    </div>
    <!--footer-->  
  </body>
</html>

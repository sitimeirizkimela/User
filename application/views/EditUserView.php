<div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Edit User</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                    
                    
                    <div class="row">
                  
                      <form novalidate="" role="form" class="form-horizontal" method="POST" action="<?=base_url('User_controller/edit_proses/')?><?php echo $id_user ?>">
                        <div class="form-group">
                          <label class="col-md-2 control-label">Nama</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="Nama" class="form-control" name="nama" value="<?php echo $user->nama ?>">
                          </div>
                        </div>
                    
                         <div class="form-group">
                          <label class="col-md-2 control-label">Alamat</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="Alamat" class="form-control" name="alamat" value="<?php echo $user->alamat ?>">
                          </div>
                        </div>
                         <div class="form-group">
                          <label class="col-md-2 control-label">Telepon</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="Telepon" class="form-control" name="telepon" value="<?php echo $user->telepon ?>">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-md-offset-2 col-md-10">
                            <button class="btn btn-info" type="submit">Submit</button>
                          </div>
                        </div>
                      </form>
                       
                  

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
  <script type="text/javascript">
        document.getElementById('type').value = "<?php echo strval($user->type); ?>";
</script>
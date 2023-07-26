<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
              <div class="card-header bg-light text-dark"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('customer/register')?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?php echo form_error('nama','<div class="text-small text-danger">','</div>')?>     
                    </div>

                  <div class="form-group col-6">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username">
                    <?php echo form_error('username','<div class="text-small text-danger">','</div>')?>     
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" type="text" class="form-control" rows="3" name="alamat"></textarea>
                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>')?>     
                  </div>

                    <div class="form-group col-6" >
                      <label  class="d-block">Gender</label>
                      <select class="form-control" name="gender">
                        <option value="">--Pilih Gender--</option>  
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>     
                      <?php echo form_error('gender','<div class="text-small text-danger">','</div>')?>                 
                    </div>

                    <div class="form-group col-6">
                      <label for="no_telepon">No. Telepon</label>
                      <input id="no_telepon" type="text" class="form-control" name="no_telepon">
                      <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>')?>     
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input id="password" type="password" class="form-control" name="password">
                      <?php echo form_error('password','<div class="text-small text-danger">','</div>')?>
                     </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-lg btn-block">
                      Register
                    </button>
                  </div>

                  <div class="mt-5 text-muted text-center">
                    Sudah punya akun? <a href="<?php echo base_url('auth/login')?>">Log In</a>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

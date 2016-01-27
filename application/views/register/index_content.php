    <div class="container">
      <div class="row-fluid">
        <div class="col-md-12" style="margin-top:75px;">
          <h3>Register</h3>
          <hr>
          <div class="row">
            <form action="<?php echo base_url().'register/doregister'; ?>" method="post" id="registerform">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Nama Lengkap</label>
                  <input class="form-control" placeholder="Nama lengkap anda"  autofocus="autofocus" name="name" type="text" value="" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input class="form-control" placeholder="Email anda"  name="email" type="email" value="" id="email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control" placeholder="Password anda"  name="password" type="password" value="" id="password">
                </div>
                <div class="form-group">
                  <label for="repassword">Confirm Password</label>
                  <input class="form-control" placeholder="Ulangi password anda"  name="repassword" type="password" value="" id="repassword">
                </div>
                <div class="form-group">
                  <label for="asal_sekolah">Asal Sekolah</label>
                  <input class="form-control" placeholder="Asal sekolah anda"  autofocus="autofocus" name="asal_sekolah" type="text" value="" id="asal_sekolah">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="asal_kota">Asal Kota</label>
                  <input class="form-control" placeholder="Asal kota anda"  autofocus="autofocus" name="asal_kota" type="text" value="" id="asal_kota">
                </div>
                <div class="form-group">
                  <label for="telpon">No Telepon</label>
                  <input class="form-control" placeholder="Nomor telepon anda"  autofocus="autofocus" name="telpon" type="text" value="" id="telpon">
                </div>
                <div class="form-group text-center">
                  <input class="btn btn-primary btn-lg btn-block" type="submit" value="Register">
                </div>
                <p>Jika anda telah mimiliki akun silahkan login <a href="<?php echo base_url().'login'; ?>">disini</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

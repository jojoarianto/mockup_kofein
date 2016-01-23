    <div class="container">
      <div class="row col-md-6 col-md-offset-3" style="margin-top:90px;">
        <h3>Login</h3>
        <hr>
        <form action="<?php echo base_url(); ?>" method="post" id="loginform">
          <div class="alert alert-danger" role="alert" id="alert" style="display: none;"></div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" placeholder="example@example.com" required="required" name="email" type="email" value="" autofocus="autofocus">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" placeholder="Password anda" required="required" autofocus="autofocus" name="password" type="password" value="">
          </div>
          <div class="form-group text-center">
            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Login">
          </div>
          <p>belum punya akun kofein? silahkan dafar <a href="#">disini</a></p>
        </form>
      </div>
    </div>

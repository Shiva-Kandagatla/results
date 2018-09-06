<div class="login-page">
  <div class="form">
     <h2>Admin Login</h2>
     <?php echo form_open("AdminLogin/check_admin"); ?>
      
      <input type="text" placeholder="username" id="username" name="username"/>
      <?php echo form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
      
      <input type="password" placeholder="password" id="password" name="password"/>
      <?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?>
      
      
      <input type="submit" style="background-color:lightgreen;" role="button" id="submit" name="submit" value="login">
      <p class="message"> <a href="#">Forgot Password?</a></p>
    </form>
  </div>
</div>  
<?php
ob_start();
require_once('controllers/load.php');
if ($session->isUserLoggedIn(true)) {
  redirect('views/home.php', false);
}
?>
<?php include_once('business/header.php'); ?>
<div class="container-index">
  <div class="login-page">
    <div class="text-center">
      <img src="assets/images/logo.png" alt="logo" class="img_logo">
      <p>LOGIN </p>
    </div>
    <?php echo display_msg($msg); ?>
    <form method="post" action="views/auth.php" class="clearfix">
      <div class="form-group">
        <label for="username" class="control-label">Usario</label>
        <input type="name" class="form-control" name="username" placeholder="Usario">
      </div>
      <div class="form-group">
        <label for="Password" class="control-label">Contraseña</label>
        <input type="password" name="password" class="form-control" placeholder="Contraseña">
      </div>
      <div class="form-group">
        <button type="submit" class="btn pull-right">Enviar</button>
      </div>
    </form>
  </div>
</div>
<?php include_once('business/footer.php'); ?>

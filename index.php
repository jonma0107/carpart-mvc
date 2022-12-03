<?php
ob_start();
require_once('controllers/load.php');
if ($session->isUserLoggedIn(true)) {
  redirect('views/home.php', false);
}
?>
<?php include_once('business/header.php'); ?>
<div class="container-index">

<link rel="stylesheet" href="assets/css/main.css?v=<?php echo time(); ?>" />
  <!-- <link rel="stylesheet" href="assets/css/main.css"> -->

  <div class="login-page">
    <div class="text-center">
      <img src="assets/images/logo-w.png" alt="logo-w">
    </div>
    <?php echo display_msg($msg); ?>
    <form data-cy="form-login" method="post" action="views/auth.php" class="clearfix">
      <div class="form-group">
        <label for="username" class="control-label">Usuario</label>
        <input data-cy="user" type="name" class="form-control" name="username" placeholder="Usario">
      </div>
      <div class="form-group">
        <label for="Password" class="control-label">Contraseña</label>
        <input data-cy="pass" type="password" name="password" class="form-control" placeholder="Contraseña">
      </div>
      <div class="form-group">
        <!-- <img src="assets/images/logo.png" alt="logo" class="img_logo"> -->
        <button type="submit" class="btn pull-right"><img src="assets/images/logo.png" alt="logo" class="img_logo"> <br> Enviar</button>
      </div>
    </form>
  </div>
</div>
<?php include_once('business/footer.php'); ?>

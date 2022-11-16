<?php
$page_title = 'Home Page';
require_once('../controllers/load.php');
if (!$session->isUserLoggedIn(true)) {
  redirect('../index.php', false);
}
?>
<?php include_once('../business/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
  <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
        <h1>BIENVENIDO!<br> HOY SERÁ UN GRAN DÍA PARA TI.<br> TENDRÁS MUCHAS VENTAS.</h1>

      </div>
    </div>
  </div>
</div>
<?php include_once('../business/footer.php'); ?>

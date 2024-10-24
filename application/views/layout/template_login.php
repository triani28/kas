<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/');?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets/');?>/assets/img/favicon.png">
  <title>
    <?php echo $title;?>
  </title>
  <?php require_once('_css.php')?>
</head>
<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <?php echo $contents; ?>
    </div>
</main>
</body>
<?php require_once('_js.php')?>
</html>
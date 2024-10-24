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
<body class="g-sidenav-show  bg-gray-100 ">

    <?php require_once('_sidebar.php')?>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

      <?php require_once('_navbar.php')?>
      <div id="hilang" class="position-absolute start-0 end-0">
          <?php echo $this->session->flashdata('alert', true)?>
        </div>  
      <div class="container-fluid">  
    
        <?php echo $contents; ?>
      </div>
      
      <?php require_once('_footer.php')?>
    </main>
</body>
<?php require_once('_js.php')?>
</html>
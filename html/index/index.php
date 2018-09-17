<?php require 'html/overall/header.php'; ?>

<body class="bg-dark">
  <?php require './html/public/login.html';  ?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <?php 

  if (isset($_GET['pass'])) {
      ?>
        <script type="text/javascript">
           alertify.success('<?php echo  $users[$_SESSION['app_id']]['nombre']; ?> tu contraseña ha sido modificada correctamente');
    </script>

      <?php
    }
    ?>

  
</body>

</html>

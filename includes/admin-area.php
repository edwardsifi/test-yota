<?php
include_once './sesiones.php';
include_once './header.php';
include_once './barra.php';
// include_once './navegacion.php';

?>

<div class="container">

  <?php

  if ($_SESSION['login'] == 'cliente') {
    include_once './admin-cliente.php';
  } else {
    include_once './admin-admin.php';
  }

  ?>

</div>

<?php

include_once './footer.php';

?>
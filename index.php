<?php
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
?>
<!DOCTYPE html>
<html>
    <script>
      window.location.href="/Helb-Temperatures/co2-projet/server.php";
    </script>
</html>
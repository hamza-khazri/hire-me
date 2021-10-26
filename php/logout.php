<?php
    session_start();
?>
<?php
    require('connect-serv.php');
    session_destroy();
    function redirect($url)
{
    header('Location: '.$url);
    exit();
}
    redirect('../index.php');
?>  
  
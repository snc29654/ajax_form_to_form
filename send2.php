<?php
header("Content-type: text/plain; charset=UTF-8");
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  if (isset($_POST['request']))
  {
      echo $_POST['request']." + PHPで付加しています";
  }
  else
  {
      echo 'not found.';
  }
}
?>
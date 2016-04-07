<?php

//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
}

//set error handler
set_error_handler("customError",E_USER_ERROR);

//trigger error
if (empty($facebook['access_token'])) {
  trigger_error("Access Token is not be set",E_USER_ERROR);
}

if (empty($facebook['album_id'])) {
  trigger_error("Album ID is not be set",E_USER_ERROR);
}

?>
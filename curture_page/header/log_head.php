<?php
  session_start();
  if( isset( $_SESSION[ 'id' ] ) ) {
    $jb_login = TRUE;
    //echo "true 실행".$_SESSION[ 'id' ];
  } else {
    $jb_login = FALSE;
    //echo "false 실행".$_SESSION['id'];
  }
?>

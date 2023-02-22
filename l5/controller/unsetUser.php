<?php

if(isset($_SESSION['user'])) {
    header('Location: /da');
    session_destroy();
}

#
#if(isset($_GET['exit']))
#{
#    session_destroy();
 #   header('Location: /controller=security');
  #  exit;
#}


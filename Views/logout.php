<?php
session_start();
session_unset();

session_destroy();


header("Location: /Biblioteca_proyecto/index.php");
exit();
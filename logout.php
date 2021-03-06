<?php

session_start();
session_destroy();
header('Location: system.php');
exit;
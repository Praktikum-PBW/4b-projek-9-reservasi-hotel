<?php

session_start();
unset($_SESSION['nama']);
unset($_SESSION['password']);
unset($_SESSION['level']);

session_destroy();
echo "<script>alert('Anda telah logout');document.location='index.php'</script>";
<?php
session_start();
session_destroy();
echo "<script>alert('Terima Kasih');
location.href='../'</script>";
echo "<script> window.location = '../index.php' </script>";

?>
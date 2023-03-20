<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>

<?php
session_start();
session_destroy();
echo "<script>window.location.href='index.php'</script>";
?>
<?php require 'footer.php'; ?>
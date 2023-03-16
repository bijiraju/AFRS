 <!-- jQuery CDN -->
 <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
 <!-- CODE FOR AJAX -->
<script src="https://kit.fontawesome.com/f0a39ee957.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
</script>
<script src="script.js"></script>
<?php if (isset($_SESSION["status"]) && $_SESSION["status"] != "") : ?>
    <script>
        Swal.fire({
            icon: '<?= $_SESSION["status_code"] ?>',
            title: '<?= $_SESSION["message"] ?>',
            text: '<?= $_SESSION["status"] ?>',
        }).then(function() {
            window.location = "<?= $_SESSION["page"] ?>";
        });
    </script>
    <?php unset($_SESSION["status"]); ?>
<?php endif ?>
</body>
</html>
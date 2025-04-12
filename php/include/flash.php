<?php if(!empty($_GET['warning'])){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> <?php echo $_GET['warning']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>

<?php if(!empty($_GET['success'])){ ?>
    <div class="alert success alert-dismissible fade show" role="alert">
        <strong>success!</strong> <?php echo $_GET['success']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>


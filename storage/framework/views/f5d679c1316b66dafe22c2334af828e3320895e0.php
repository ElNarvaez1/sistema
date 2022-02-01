<?php if(Session::has('message_save')): ?>
<div class="alert alert-primary alert-dismissible fade show  alert-save">
    <strong><i class="fas fa-check-circle"></i> <?php echo e(session('message_save')); ?></strong>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php endif; ?>



<?php if(session('message_delete')): ?>
<div class="alert alert-primary alert-dismissible fade show  alert-delete">
    <strong> <i class="fas fa-trash"></i> <?php echo e(session('message_delete')); ?></strong>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php endif; ?>


<?php if(Session::has('status')): ?>
<div class="alert alert-primary alert-dismissible fade show  alert-save">
    <strong><i class="fas fa-check-circle"></i> <?php echo e(session('status')); ?></strong>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php endif; ?>

<?php if(session('alert')): ?>
<div class="alert alert-primary alert-dismissible fade show  alert-delete">
    <strong> <i class="fas fa-exclamation-triangle"></i> <?php echo e(session('alert')); ?></strong>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php endif; ?>

<?php if(session('compra_sucess')): ?>
<div class="alert alert-primary alert-dismissible fade show  alert-save">
    <strong> <i class="fas fa-clipboard-check"></i> <?php echo e(session('compra_sucess')); ?></strong>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\sistema\resources\views/plantilla/notification.blade.php ENDPATH**/ ?>
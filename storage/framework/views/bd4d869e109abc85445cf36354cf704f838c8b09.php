<div class="form-group">
    <?php echo Form::label('nombre', 'Nombre del rol' ,['class'=>'text-black']); ?>

 
     <?php echo Form::text('name', null, ['class'=>'form-control ',
     'placeholder'=>'Ingrese el nombre del rol'
     ]); ?>

     <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
     <div class="message-error">*<?php echo e($message); ?></div>
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>    
</div>

         <h3 class="h3 text-black2">Listado de roles</h3>
         <div class="row justify-content-md-center">
             <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
             <div class="col col-lg-3">
                 <label class="text-black2 h4">
                    <?php echo Form::checkbox('permissions[]', $permission->id,null, ['class'=>'mr-1']); ?> 
                     <?php echo e($permission->descripcion); ?>

                 </label>
             </div>
             
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div><?php /**PATH C:\xampp\htdocs\sistema\resources\views/roles/partials/form.blade.php ENDPATH**/ ?>
 <?php $__env->startSection('content'); ?>

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Companies Create</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php if($errors->any()): ?>
     <div class="alert alert-danger">
         <ul>
             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li>({$error})</li>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
     </div>
        <?php endif; ?>

    <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New Company</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('companies.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
              <div class="form-group">
                <label for="inputName">Name / company</label>
                <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>"  class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Firstname</label>
                <input type="text" id="firstname" name="firstname" value="<?php echo e(old('firstname')); ?>"  class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Lastname</label>
                <input type="text" id="lastname" name="lastname" value="<?php echo e(old('lastname')); ?>"  class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Street</label>
                <input type="text" id="street" name="street" value="<?php echo e(old('street')); ?>"  class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">ZIP</label>
                <input type="number" id="zip" name="zip" value="<?php echo e(old('zip')); ?>"  class="form-control">
              </div>  
              <div class="form-group">
                <label for="inputName">City</label>
                <input type="text" id="city" name="city" value="<?php echo e(old('city')); ?>" class="form-control">
              </div>
              <input type="submit" name="companysubmit" class="btn btn-primary w-100"> 
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/companies/create.blade.php ENDPATH**/ ?>
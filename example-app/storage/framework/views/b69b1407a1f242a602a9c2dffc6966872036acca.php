 <?php $__env->startSection('content'); ?>

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Create</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php if($errors->any()): ?>
     <div class="alert alert-danger">
         <ul>
             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li><?php echo e($error); ?></li>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
     </div>
        <?php endif; ?>

    <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New Order</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('orders.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
              <div class="form-group">
                <label for="name">Title</label>
                <input type="text" id="title" name="title" value="<?php echo e(old('title')); ?>"  class="form-control">
              </div>

              <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-contol" rows="3" placeholder="Enter Description here..." 
                            name="description"><?php echo e(old('description')); ?></textarea>
              </div>
              <div class="form-group">
                  <label>Notes</label>
                  <textarea class="form-contol" rows="3" placeholder="Enter Notes here..." name="notes"><?php echo e(old('notes')); ?></textarea>
              </div>

              <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category">
                    <option value="0">Webpaket</option>
                    <option value="1">Programmieren</option>
                    <option value="2">Marketing</option>
                    <option value="3">Wartung</option>
                  </select>
              </div>
              <div class="form-group">
                  <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="is_flatrate" name="is_flatrate" value="1">
                      <label class="form-check-label" for="is_flatrate">Is flatrate?</label>
                  </div>
              </div>

              <div class="form-group">
                  <label>Annual Date (not requiered)</label>
                  <input type="date" class="form-control">
              </div>

              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="<?php echo e(old('price')); ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="0">Angelegt</option>
                    <option value="1">In Bearbeitung</option>
                    <option value="2">Abgeschlossen</option>
                    <option value="3">Bezahlt</option>
                  </select>
              </div>
              <input type="hidden" name="company_id" value="<?php echo e(app('request')->input('company_id')); ?>">
              <input type="submit" name="companysubmit" class="btn btn-primary w-100"> 
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/orders/create.blade.php ENDPATH**/ ?>
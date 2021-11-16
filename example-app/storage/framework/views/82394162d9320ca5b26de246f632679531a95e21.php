 <?php $__env->startSection('content'); ?>

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Companies Table</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>
    <div class="row">
    <div class="col-12">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of all companies!</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Street</th>
                      <th>ZIP</th>
                      <th>City</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($company->id); ?></td>
                      <td><?php echo e($company->name); ?></td>
                      <td><?php echo e($company->firstname); ?></td>
                      <td><?php echo e($company->lastname); ?></td>
                      <td><?php echo e($company->street); ?></td>
                      <td><?php echo e($company->zip); ?></td>
                      <td><?php echo e($company->city); ?></td>
                      <td class="row" justify-content-start align-items-center>
                          <a href="<?php echo e(route('companies.show' , $company->id)); ?>" class="btn btn-primary">SHOW</a>
                          <a href="<?php echo e(route('companies.edit' , $company->id)); ?>" class="btn btn-info mx-3">EDIT</a>
                          <form action="<?php echo e(route('companies.destroy' , $company->id)); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
                              <button class="btn btn-danger" type="submit" onclick="return confirm('Wollen Sie dies wirklich löschen?!')" 
                                      style="-webkit-appearance:none;">DELETE</button>
                          </form>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/companies/index.blade.php ENDPATH**/ ?>
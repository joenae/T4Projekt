 <?php $__env->startSection('content'); ?>

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders Table</h1>
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
                <h3 class="card-title">List of all orders!</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Notes</th>
                      <th>Category</th>
                      <th>is_flatrate</th>
                      <th>annual_date</th>
                      <th>Price</th>
                      <th>Status</th> 
                      <th>Company_id</th> 
                      <th>Actions</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($order->id); ?></td>
                      <td><?php echo e($order->title); ?></td>
                      <td><?php echo e($order->description); ?></td>
                      <td><?php echo e($order->notes); ?></td>
                      <td>
                      <?php if($order->category == 0): ?>   
                         <p>Webpaket</p>
                      <?php elseif($order->category == 1): ?> 
                         <p>Programmieren</p>
                      <?php elseif($order->category == 2): ?> 
                         <p>Marketing</p>
                      <?php elseif($order->category == 3): ?> 
                         <p>Wartung</p>
                      <?php endif; ?>  
                      </td>
                      <td><?php echo e($order->is_flatrate); ?></td>
                      <td><?php echo e($order->annual_date); ?></td>
                      <td><?php echo e($order->price); ?></td>
                      <td>
                      <?php if($order->status == 0): ?>   
                         <p>Angelegt</p>
                      <?php elseif($order->status == 1): ?> 
                         <p>In Bearbeitung</p>
                      <?php elseif($order->status == 2): ?> 
                         <p>Abgeschlossen</p>
                      <?php elseif($order->status == 3): ?> 
                         <p>Bezahlt</p>
                      <?php endif; ?>
                      </td>
                      <td><?php echo e($order->company->name); ?> <?php echo e($order->company->firstname); ?> <?php echo e($order->company->lastname); ?></td>
                      <td class="row" justify-content-start align-items-center>
                          <a href="<?php echo e(route('orders.show' , $order->id)); ?>" class="btn btn-primary">SHOW</a>
                          <a href="<?php echo e(route('orders.edit' , $order->id)); ?>" class="btn btn-info mx-3">EDIT</a>
                          <form action="<?php echo e(route('orders.destroy' , $order->id)); ?>" method="post">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/orders/index.blade.php ENDPATH**/ ?>
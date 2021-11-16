 
<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('posts.create')); ?>"> Create New Post</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($value->title); ?></td>
            <td><?php echo e(\Str::limit($value->description, 100)); ?></td>
            <td>
                <form action="<?php echo e(route('posts.destroy',$value->id)); ?>" method="POST">   
                    <a class="btn btn-info" href="<?php echo e(route('posts.show',$value->id)); ?>">Show</a>    
                    <a class="btn btn-primary" href="<?php echo e(route('posts.edit',$value->id)); ?>">Edit</a>   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>  
    <?php echo $data->links(); ?>      
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/posts/index.blade.php ENDPATH**/ ?>
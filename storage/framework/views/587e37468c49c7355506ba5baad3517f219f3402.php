<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Todo List</div>
                    <div class="panel-body">
                        <a href="<?php echo e(url('todos/create')); ?>" class="btn btn-primary">Add todo</a>

                        <br>
                        <br>
                        <br>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <th>Is Done</th>
                                    <th>Action</th>
                                </tr>

                                <?php if(! count($todos)): ?>
                                    <tr>
                                        <td colspan="3">No Todo</td>
                                    </tr>
                                <?php endif; ?>
                                <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($todo->name); ?></td>
                                        <td><?php echo e($todo->is_done ? 'Done' : 'Not Done'); ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?php echo e(url('todos/'.$todo->id.'/edit')); ?>">Edit</a>
                                            <a class="btn btn-danger" href="<?php echo e(url('todos/'.$todo->id.'/delete')); ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
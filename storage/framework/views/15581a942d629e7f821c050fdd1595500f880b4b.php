<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', ['title' => __('Add Agent')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e(__('Agent Management')); ?></h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?php echo e(route('agents.create')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Add Agent')); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"><?php echo e(__('fName')); ?></th>
                                                <th scope="col"><?php echo e(__('lName')); ?></th>
                                                <th scope="col"><?php echo e(__('Gender')); ?></th>
                                                <th scope="col"><?php echo e(__('Password')); ?></th>
                                                <th scope="col"><?php echo e(__('Signature')); ?></th>
                                                <th scope="col"><?php echo e(__('District ID')); ?></th>
                                                <th scope="col"><?php echo e(__('Agent Head ID')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($agent->fName); ?></td>
                                                    <td><?php echo e($agent->lName); ?></td>
                                                    <td><?php echo e($agent->gender); ?></td>
                                                    <td><?php echo e($agent->password); ?></td>
                                                    <td><?php echo e($agent->signature); ?></td>
                                                    <td><?php echo e($agent->districtID); ?></td>
                                                    <td><?php echo e($agent->agentHeadID); ?></td>
                                                    <!--<td class="text-right">
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                <?php if($agents->id != auth()->id()): ?>
                                                                    <form action="<?php echo e(route('user.destroy', $user)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('delete'); ?>
                                                                        
                                                                        <a class="dropdown-item" href="<?php echo e(route('agents.edit', $user)); ?>"><?php echo e(__('Edit')); ?></a>
                                                                        <button type="button" class="dropdown-item" onclick="confirm('<?php echo e(__("Are you sure you want to delete this user?")); ?>') ? this.parentElement.submit() : ''">
                                                                            <?php echo e(__('Delete')); ?>

                                                                        </button>
                                                                    </form>    
                                                                <?php else: ?>
                                                                    <a class="dropdown-item" href="<?php echo e(route('profile.edit')); ?>"><?php echo e(__('Edit')); ?></a>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </td>-->
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <br /> <br /> <br />
                                    
                                </div>
                    
                    </div>
                </div>
            </div>
        </div>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/RMS/resources/views/agents/index.blade.php ENDPATH**/ ?>
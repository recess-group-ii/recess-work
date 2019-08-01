<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', ['title' => __('Funds Registration')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e(__('Register Funds')); ?></h3>
                            </div>
    
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/create" autocomplete="off">
                            <?php echo csrf_field(); ?>
                        
                            <div class="pl-lg-4">
                                <div class="form-group<?php echo e($errors->has('donor') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-donor"><?php echo e(__('Donor')); ?></label>
                                    <input type="text" name="donor" id="input-donor" class="form-control form-control-alternative<?php echo e($errors->has('donor') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('donor')); ?>" required autofocus>

                                    <?php if($errors->has('donor')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('donor')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('amount') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-amount"><?php echo e(__('Amount')); ?></label>
                                    <input type="text" name="amount" id="input-amount" class="form-control form-control-alternative<?php echo e($errors->has('amount') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('amount')); ?>" required autofocus>

                                    <?php if($errors->has('amount')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('amount')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('date') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-date"><?php echo e(__('Date')); ?></label>
                                    <input type="date" name="date" id="input-date" class="form-control form-control-alternative<?php echo e($errors->has('date') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('date')); ?>" required autofocus>

                                    <?php if($errors->has('date')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('date')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('receiver') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-receiver"><?php echo e(__('Received by')); ?></label>
                                    <input type="text" name="receiver" id="input-receiver" class="form-control form-control-alternative<?php echo e($errors->has('receiver') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('receiver')); ?>" required autofocus>

                                    <?php if($errors->has('reciever')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('receiver')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4"><?php echo e(__('Save')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/RMS/resources/views/funds.blade.php ENDPATH**/ ?>
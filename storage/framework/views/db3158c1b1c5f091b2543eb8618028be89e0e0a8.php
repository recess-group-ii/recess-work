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
                                <a href="<?php echo e(route('agents.index')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Back to list')); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post" action="<?php echo e(route('agents.store')); ?>" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            
                           
                            <div class="pl-lg-4">
                                <div class="form-group<?php echo e($errors->has('fName') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-fName"><?php echo e(__('First name')); ?></label>
                                    <input type="text" name="fName" id="input-fName" class="form-control form-control-alternative<?php echo e($errors->has('fName') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('fNname')); ?>" required autofocus>

                                    <?php if($errors->has('fName')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('fName')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('lName') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-lName"><?php echo e(__('Last Name')); ?></label>
                                    <input type="text" name="lName" id="input-lName" class="form-control form-control-alternative<?php echo e($errors->has('lName') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('lName')); ?>" required autofocus>

                                    <?php if($errors->has('lName')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('lName')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('gender') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-gender"><?php echo e(__('Gender')); ?></label>
                                    <input type="text" name="gender" id="input-gender" class="form-control form-control-alternative<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('gender')); ?>" required autofocus>

                                    <?php if($errors->has('gender')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('gender')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-password"><?php echo e(__('Password')); ?></label>
                                    <input type="text" name="password" id="input-password" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('password')); ?>" required autofocus>

                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('signature') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-password"><?php echo e(__('Signature')); ?></label>
                                    <input type="text" name="signature" id="input-signature" class="form-control form-control-alternative<?php echo e($errors->has('signature') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('signature')); ?>" required autofocus>

                                    <?php if($errors->has('signature')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('signature')); ?></strong>
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
<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/RMS/resources/views/agents/create.blade.php ENDPATH**/ ?>
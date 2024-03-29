
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="d-flex justify-content-between mb20">
                    <h1 class="title-bar"><?php echo e(__('Tools')); ?></h1>
                </div>
                <div class="panel">
                    <div class="panel-body pd15">
                        <div class="row area-setting-row">
                            <div class="col-md-4">
                                <div class="area-setting-item">
                                    <a class="setting-item-link" href="<?php echo e(url('admin/module/language')); ?>">
                                        <span class="setting-item-media">
                                            <i class="icon ion-ios-globe"></i>
                                        </span>
                                        <span class="setting-item-info">
                                            <span class="setting-item-title"><?php echo e(__("Languages")); ?></span>
                                            <span class="setting-item-desc"><?php echo e(__("Manage languages of your website")); ?></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="area-setting-item">
                                    <a class="setting-item-link" href="<?php echo e(url('admin/module/language/translations')); ?>">
                                        <span class="setting-item-media">
                                            <i class="icon ion-ios-globe"></i>
                                        </span>
                                        <span class="setting-item-info">
                                            <span class="setting-item-title"><?php echo e(__("Translations")); ?></span>
                                            <span class="setting-item-desc"><?php echo e(__("Translation manager of your website")); ?></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="area-setting-item">
                                    <a class="setting-item-link" href="<?php echo e(url('admin/logs')); ?>">
                                        <span class="setting-item-media">
                                            <i class="icon ion-ios-nuclear"></i>
                                        </span>
                                        <span class="setting-item-info">
                                            <span class="setting-item-title"><?php echo e(__("System Log Viewer")); ?></span>
                                            <span class="setting-item-desc"><?php echo e(__("Views and manage system log of your website")); ?></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/booking-core/modules/Core/Views/admin/tools/index.blade.php ENDPATH**/ ?>
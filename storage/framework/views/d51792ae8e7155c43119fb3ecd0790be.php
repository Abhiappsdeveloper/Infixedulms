<?php
    use Illuminate\Support\Facades\DB;
try {
    $isConnected = DB::connection()->getPdo();
 }catch (\Exception $exception){
    $isConnected =false;

 }
?>

<?php if($isConnected): ?>
    <?php echo $__env->make(theme('partials._header'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make(theme('partials._menu'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(Settings('frontend_active_theme') == 'kidslms'): ?>
        <section class="error-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                        <div class="img">
                            <img src="<?php echo e(themeAsset('img/shape/404-v1.png')); ?>" alt="error:page not found">
                        </div>
                        <h2><?php echo $__env->yieldContent('message'); ?></h2>
                        <p><?php echo $__env->yieldContent('details'); ?></p>
                        <a href="/" class="theme-btn fw-500"><?php echo e(__('frontend.Back To Homepage')); ?></a>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <div class="error_wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="error_wrapper_info text-center">
                            <div class="thumb">
                                <img src="<?php echo e(asset('public/errors/'.$exception->getStatusCode().'.png')); ?>" alt="">
                            </div>
                            <h3><?php echo $__env->yieldContent('message'); ?></h3>
                            <p><?php echo $__env->yieldContent('details'); ?></p>
                            <a href="<?php echo e(url('/')); ?>" class="theme_btn ">
                                <?php echo e(__('frontend.Back To Homepage')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('mainContent'); ?>
    <?php echo $__env->make(theme('partials._footer'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('errors.static', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/errors/layout.blade.php ENDPATH**/ ?>
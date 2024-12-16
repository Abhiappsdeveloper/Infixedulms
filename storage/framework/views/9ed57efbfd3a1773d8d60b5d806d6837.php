<!doctype html>
<html dir="<?php echo e(isRtl()?'rtl':''); ?>" class="<?php echo e(isRtl()?'rtl':''); ?>" lang="en" itemscope
      itemtype="<?php echo e(url('/')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e(Settings('site_title')); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(getCourseImage(Settings('favicon') )); ?><?php echo e(assetVersion()); ?>">

    <?php if (isset($component)) { $__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c = $component; } ?>
<?php $component = App\View\Components\FrontendDynamicStyleColor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-dynamic-style-color'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontendDynamicStyleColor::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c)): ?>
<?php $component = $__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c; ?>
<?php unset($__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9 = $component; } ?>
<?php $component = App\View\Components\BackendDynamicColor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend-dynamic-color'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BackendDynamicColor::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9)): ?>
<?php $component = $__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9; ?>
<?php unset($__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9); ?>
<?php endif; ?>


    <?php if(isRtl()): ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/bootstrap.rtl.min.css<?php echo e(assetVersion()); ?> ">
    <?php else: ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/bootstrap.min.css<?php echo e(assetVersion()); ?> ">
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/app.css<?php echo e(assetVersion()); ?>">
    <?php if(isRtl()): ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/frontend_style_rtl.css<?php echo e(assetVersion()); ?>">
    <?php else: ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/frontend_style.css<?php echo e(assetVersion()); ?>">
    <?php endif; ?>

    <script src="<?php echo e(asset('public/js/common.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/app.js')); ?><?php echo e(assetVersion()); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/gijgo.min.css<?php echo e(assetVersion()); ?>">
    <script src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/js/gijgo.min.js<?php echo e(assetVersion()); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/themify-icons.css')); ?><?php echo e(assetVersion()); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/preloader.css')); ?><?php echo e(assetVersion()); ?>"/>

    <script>
        window._locale = '<?php echo e(app()->getLocale()); ?>';
        window._translations = <?php echo $jsonLang??''; ?>;
    </script>
 
</head>

<body>
<?php echo $__env->make('secret_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>


<?php echo \Brian2694\Toastr\Facades\Toastr::message(); ?>

<?php echo NoCaptcha::renderJs(); ?>


<script>
    if ($('.small_select').length > 0) {
        $('.small_select').niceSelect();
    }

    if ($('.datepicker').length > 0) {
        $('.datepicker').datepicker();
    }
    setTimeout(function () {
        $('.preloader').fadeOut('hide', function () {
            // $(this).remove();

        });
    }, 0);
</script>

</body>


</html>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/auth/layouts/app.blade.php ENDPATH**/ ?>
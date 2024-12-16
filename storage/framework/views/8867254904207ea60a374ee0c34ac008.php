<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('frontendmanage.Notifications')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>


        $('.unread_notification').on('click', function (e) {
            e.preventDefault();
            let notification_id = $(this).attr('data-notification_id');
            $(this).css('color', 'red');

            $('.notify_' + notification_id).addClass('notify_normal');
            $('.notify_' + notification_id).removeClass('notifi_par');

            let url = $('#url').val();

            let formData = {
                id: notification_id
            };
            $.ajax({
                type: "GET",
                data: formData,
                dataType: 'json',
                url: url + '/' + 'ajaxNotificationMakeRead',
                success: function (data) {
                    console.log(data);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php if (isset($component)) { $__componentOriginal3ee5f24dacde043f3af28d2554da86cb = $component; } ?>
<?php $component = App\View\Components\Notification::resolve(['request' => $request] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Notification::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ee5f24dacde043f3af28d2554da86cb)): ?>
<?php $component = $__componentOriginal3ee5f24dacde043f3af28d2554da86cb; ?>
<?php unset($__componentOriginal3ee5f24dacde043f3af28d2554da86cb); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.dashboard_master'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/pages/myNotifications.blade.php ENDPATH**/ ?>
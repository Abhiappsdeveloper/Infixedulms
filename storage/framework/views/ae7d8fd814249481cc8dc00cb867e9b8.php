<div
    class="full-page"
    data-type="component-text"
    data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/instractor/all_section.jpg')); ?>"
    data-aoraeditor-title="All Instructor Section" data-aoraeditor-categories="Instructor Page">

    <div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content">
            <?php echo $__env->make(theme('snippets.components._banner'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content">
            <?php echo $__env->make(theme('snippets.components._popular_instructors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content">
            <?php echo $__env->make(theme('snippets.components._all_instructors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

</div>

<?php echo $__env->make(theme('snippets.components._popular_instructors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make(theme('snippets.components._all_instructors'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/pages/instructors.blade.php ENDPATH**/ ?>
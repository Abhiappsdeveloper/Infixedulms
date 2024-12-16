<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/become_instructor_page/join_section.jpg')); ?>"
     data-aoraeditor-title="Join section"
     data-aoraeditor-categories="Become Instructor Page"
>
    <section class="instructor_process section_padding bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <?php $__currentLoopData = $become_instructor->whereIn('id',[1,2,3]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_instructor_part">
                            <i class="<?php echo e($item->icon); ?> fa-5x"></i>
                            <h4><?php echo e($item->title); ?></h4>
                            <p><?php echo e($item->description); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_become-instructor-page-join.blade.php ENDPATH**/ ?>
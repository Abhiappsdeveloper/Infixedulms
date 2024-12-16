<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/become_instructor_page/process.jpg')); ?>"
     data-aoraeditor-title="Process"
     data-aoraeditor-categories="Become Instructor Page"
>
    <?php
        $work=  $become_instructor->where('id',6)->first();
    ?>
    <section class="work_process section_padding bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section__title  text-center mb_50">
                        <h3>
                            <?php echo e($work->section); ?>

                        </h3>
                        <p>
                            <?php echo e($work->title); ?>


                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5 col-xl-4">
                    <div class="work_process_content">
                        <?php if(isset($work_progress)): ?>
                            <?php $__currentLoopData = $work_progress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single_work_process">
                                    <div class="list_number">
                                        0<?php echo e(++$key); ?>

                                    </div>
                                    <h4><?php echo e($p->title); ?></h4>
                                    <p>
                                        <?php echo e($p->description); ?>

                                    </p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-7 col-xl-7">
                    <div class="work_process_video">
                        <div class="video_img">
                            <img src="<?php echo e(asset($work->image)); ?>" alt="#"
                                 class="img-fluid">
                            <a href="<?php echo e(youtubeVideo($work->video)); ?>" class="popup_video popup-video"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_become-instructor-page-process.blade.php ENDPATH**/ ?>
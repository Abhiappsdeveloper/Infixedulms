<?php if($paginator->hasPages()): ?>
    <nav>
        <ul class="pagination pt-3 mt-4">
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span class="page-link" aria-hidden="true">
                        <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/pagination_arrow.svg')); ?>" alt="">
                    </span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link prevDynamicPage" href="#" rel="prev"
                       aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                        <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/pagination_arrow.svg')); ?>" alt="">
                    </a>
                </li>
            <?php endif; ?>


            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_string($element)): ?>
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span>
                    </li>
                <?php endif; ?>

                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="page-item active" data-page="<?php echo e($page); ?>" aria-current="page"><span
                                    class="page-link"><?php echo e(translatedNumber($page)); ?></span>
                            </li>
                        <?php else: ?>
                            <li class="page-item">
                                <a class="page-link changeDynamicPage"
                                   href="#" data-page="<?php echo e($page); ?>"><?php echo e(translatedNumber($page)); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link nextDynamicPage" href="#" rel="next"
                       aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                        <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/pagination_arrow.svg')); ?>" alt="">
                    </a>
                </li>
            <?php else: ?>
                <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span class="page-link" aria-hidden="true">
                        <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/pagination_arrow.svg')); ?>" alt="">
                    </span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<script>
    $(document).on('click', '.changeDynamicPage', function (e) {
        e.preventDefault();
        let $this = $(this);
        let page = $(this).data('page');
        loadPaginationData($this, page);
    });

    $(document).on('click', '.nextDynamicPage', function (e) {
        e.preventDefault();
        let $this = $(this);
        let page = $(this).closest('.pagination').find('.page-item.active').data('page');
        page = page + 1;
        loadPaginationData($this, page);
    });

    $(document).on('click', '.prevDynamicPage', function (e) {
        e.preventDefault();
        let $this = $(this);
        let page = $(this).closest('.pagination').find('.page-item.active').data('page');
        page = page - 1;
        loadPaginationData($this, page);
    });


    function loadPaginationData(element, page) {
        $('.preloader').fadeIn('slow');
        let div = element.closest('.dynamicData');
        let parent = div.parent();
        let data = {};

        $.each(parent.data(), function (i, v) {
            data['data-' + i.split(/(?=[A-Z])/).join('-').toLowerCase()] = v;
        });
        data['page'] = page;

        let url = div.data('dynamic-href');
        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (res) {
                div.html(res);
                $('.preloader').fadeOut('slow');

            }
        });
    }

    if ($.isFunction($.fn.lazy)) {
        $('.lazy').lazy();
    }
    if ($.isFunction($.fn.niceSelect)) {
        if ($('.small_select').length > 0) {
            $('.small_select').niceSelect();
        }
    }

</script>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_dynamic_pagination.blade.php ENDPATH**/ ?>
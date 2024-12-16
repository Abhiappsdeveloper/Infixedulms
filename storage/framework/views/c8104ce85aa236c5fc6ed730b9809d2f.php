<style>
    @media only screen and (max-width: 991px) {
        .sponsor {
            padding: 50px 0
        }
    }

    .sponsor-title {
        margin-bottom: 50px
    }

    .sponsor-title h4 {
        font-size: 48px;
        line-height: 1.25;
        margin-bottom: 0
    }

    @media only screen and (min-width: 1280px) and (max-width: 1439px) {
        .sponsor-title h4 {
            font-size: 42px
        }
    }

    @media only screen and (min-width: 992px) and (max-width: 1279px) {
        .sponsor-title h4 {
            font-size: 36px
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .sponsor-title h4 {
            font-size: 32px
        }
    }

    @media only screen and (max-width: 767px) {
        .sponsor-title h4 {
            font-size: 28px
        }
    }

    .sponsor-wrapper {
        padding: 0 80px;
        gap: 14px
    }

    @media (max-width: 1339px) {
        .sponsor-wrapper {
            padding: 0 15px
        }
    }

    .sponsor-single {
        width: calc(100% / 12 * 3 - 11px);
        flex: 0 0 auto;
        border-radius: 8px;
        overflow: hidden;
        padding: 10px;
        background-color: #fff
    }

    @media only screen and (min-width: 992px) and (max-width: 1279px) {
        .sponsor-single {
            width: calc(100% / 12 * 4 - 11px)
        }
    }

    @media only screen and (max-width: 767px) {
        .sponsor-single {
            width: calc(100% / 12 * 4 - 11px)
        }
    }

    .sponsor-single img {
        width: 100%;
        height: 60px;
        object-fit: contain;
        margin: auto
    }

    @media only screen and (min-width: 992px) and (max-width: 1279px) {
        .sponsor-single img {
            height: 50px
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .sponsor-single img {
            height: 80px
        }
    }

    @media only screen and (max-width: 767px) {
        .sponsor-single img {
            height: 60px
        }
    }

    @media only screen and (max-width: 479px) {
        .sponsor-single img {
            height: 80px
        }
    }

</style>

<div class="sponsor">
    <div class="sponsor-title text-center">
        <h4 class="fw-bold text-primary"><?php echo e(__('frontend.Brand Who Trust Us')); ?></h4>
    </div>
    <div class="sponsor-wrapper d-flex flex-wrap align-items-center justify-content-center">
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="sponsor-single">
                <img src="<?php echo e(asset($sponsor->image)); ?>" alt="<?php echo e($sponsor->title); ?>">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_sponsor_v2.blade.php ENDPATH**/ ?>
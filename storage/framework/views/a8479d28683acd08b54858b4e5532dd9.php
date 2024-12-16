<div class="main_content_iner main_content_padding">
    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('payment.Purchase history')); ?></h3>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php if(count($enrolls)==0): ?>
                                <div class="col-xl-12">
                                    <div class="section__title3 margin_50">
                                        <p class="text-center"><?php echo e(__('student.No Course Purchased Yet')); ?>!</p>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="col-xl-12">
                                    <div class="table-responsive">
                                        <table class="table custom_table3">
                                            <thead>
                                            <tr>
                                                <th scope="col"><?php echo e(__('common.SL')); ?></th>

                                                <th scope="col"><?php echo e(__('common.Date')); ?></th>

                                                <th scope="col"><?php echo e(__('common.Total Courses')); ?>   </th>
                                                <th scope="col"><?php echo e(__('payment.Total Price')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Discount')); ?></th>
                                                <?php if(hasTax()): ?>
                                                    <th scope="col"><?php echo e(__('tax.TAX')); ?></th>
                                                <?php endif; ?>
                                                <th scope="col"><?php echo e(__('common.Payment Type')); ?></th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php $__currentLoopData = $enrolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$enroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td scope="row"><?php echo e(@$key+1); ?></td>
                                                    <td><?php echo e(showDate($enroll->updated_at)); ?></td>
                                                    <td>
                                                        <?php if(count($enroll->courses)==0): ?>
                                                            1
                                                        <?php else: ?>
                                                            <?php echo e(count($enroll->courses)); ?>

                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e(getPriceFormat($enroll->purchase_price,false)); ?></td>

                                                    <td> <?php echo e(getPriceFormat($enroll->discount,false)); ?>  </td>
                                                    <?php if(hasTax()): ?>
                                                        <td><?php echo e(getPriceFormat($enroll->tax,false)); ?> </td>
                                                    <?php endif; ?>


                                                    <td>
                                                        <?php if($enroll->payment_method=='Wallet'): ?>
                                                            <?php echo e(__('payment.Wallet')); ?>

                                                        <?php elseif($enroll->payment_method=='None'): ?>
                                                            <?php echo e(__('common.None')); ?>

                                                        <?php else: ?>
                                                            <?php echo e($enroll->payment_method); ?>

                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(route('invoice',$enroll->id)); ?>"
                                                           class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>
                                        <div class="mt-4">
                                            <?php echo e($enrolls->links()); ?>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(isModuleActive("Store")): ?>
        <div class="dashboard_lg_card mt-5">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-12">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section__title3 mb_40">
                                        <h3 class="mb-0"><?php echo e(__('store.Order History')); ?></h3>
                                        <h4></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <?php if(count($orders)==0): ?>
                                    <div class="col-xl-12">
                                        <div class="section__title3 margin_50">
                                            <p class="text-center"><?php echo e(__('student.No Product Purchased Yet!')); ?></p>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="col-xl-12">
                                        <div class="table-responsivex">
                                            <table class="table custom_table3">
                                                <thead>
                                                <tr>
                                                    <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                                    <th scope="col"><?php echo e(__('product.Order ID')); ?></th>

                                                    <th scope="col"><?php echo e(__('common.Date')); ?></th>

                                                    <th scope="col"> <?php echo e(__('common.Total')); ?> <?php echo e(__('product.Products')); ?> </th>
                                                    <th scope="col"><?php echo e(__('payment.Total Price')); ?></th>
                                                    <th scope="col"><?php echo e(__('common.Discount')); ?></th>
                                                    <?php if(hasTax()): ?>
                                                        <th scope="col"><?php echo e(__('tax.TAX')); ?></th>
                                                    <?php endif; ?>
                                                    <th scope="col"><?php echo e(__('product.Delivery Fee')); ?></th>

                                                    <th scope="col"><?php echo e(__('common.Status')); ?></th>

                                                    <th scope="col"><?php echo e(__('common.Payment Type')); ?></th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td scope="row"><?php echo e(@$key+1); ?></td>

                                                        <td><?php echo e($order->order_number); ?></td>

                                                        <td><?php echo e(showDate($order->updated_at)); ?></td>

                                                        <td>
                                                            <?php echo e($order->courses->sum('qty')); ?>

                                                        </td>
                                                        <td>

                                                            <?php echo e(getPriceFormat($order->purchase_price,false)); ?>


                                                        </td>


                                                        <td>
                                                            <?php echo e(getPriceFormat($enroll->discount,false)); ?>

                                                        </td>


                                                        <?php if(hasTax()): ?>
                                                            <td>
                                                                <?php echo e(getPriceFormat($order->tax,false)); ?>

                                                            </td>
                                                        <?php endif; ?>
                                                        <td>
                                                            <?php echo e(getPriceFormat($order->shipping->cost,false)); ?>


                                                        </td>

                                                        <td>
                                                            <?php
                                                                if (isModuleActive('Store')) {
                                                                    $is_paid = $order->status == 1 && $order->is_paid == 1;
                                                                }else {
                                                                    $is_paid = $order->status == 1;
                                                                }
                                                            ?>
                                                            <?php echo e($is_paid ? __('student.Paid') : __('student.Unpaid')); ?>

                                                        </td>

                                                        <td>
                                                            <?php if($order->payment_method=='Wallet'): ?>
                                                                <?php echo e(__('payment.Wallet')); ?>

                                                            <?php elseif($order->payment_method=='None'): ?>
                                                                <?php echo e(__('common.None')); ?>

                                                            <?php else: ?>
                                                                <?php echo e($order->payment_method); ?>

                                                            <?php endif; ?>
                                                        </td>
                                                        <td>

                                                            <div class="btn-group">
                                                                <button type="button"
                                                                        class="dropdown-toggle link_value theme_btn small_btn4"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <?php echo e(trans('common.Action')); ?>

                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="<?php echo e(route('invoice',$order->id)); ?>"
                                                                       class="dropdown-item"><?php echo e(__('common.View')); ?></a>
                                                                    <?php
                                                                        $is_store = 0;
                                                                        $is_virtual = 0;
                                                                        foreach (@$order->courses as $key => $value) {
                                                                            $is_store += $value->course->product_type==2?1:0;
                                                                            $is_virtual += $value->course->product_type==1?1:0;
                                                                        }
                                                                    ?>
                                                                    <?php if($is_store > 0): ?>
                                                                        <a href="<?php echo e(route('my_purchase_order_detail', $order->id)); ?>"
                                                                           class="dropdown-item"><?php echo e(__('product.Tracking Details')); ?></a>
                                                                    <?php endif; ?>
                                                                    <?php if($is_virtual > 0): ?>
                                                                        <a href="<?php echo e(route('my_virtual_file_download', $order->id)); ?>"
                                                                           class="dropdown-item"><?php echo e(__('product.Virtual Files')); ?></a>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            </table>
                                            <div class="mt-4">
                                                <?php echo e($orders->links()); ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(isModuleActive("Subscription")): ?>
        <div class="dashboard_lg_card mt-5">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-12">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section__title3 mb_40">
                                        <h3 class="mb-0"><?php echo e(__('subscription.Subscription History')); ?></h3>
                                        <h4></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <?php if(count($checkouts)==0): ?>
                                    <div class="col-xl-12">
                                        <div class="section__title3 margin_50">
                                            <p class="text-center"><?php echo e(__('student.No Subscription Purchased Yet')); ?>!</p>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="col-xl-12">
                                        <div class="table-responsive">
                                            <table class="table custom_table3 mb-0">
                                                <thead>
                                                <tr>
                                                    <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                                    <th scope="col"><?php echo e(__('subscription.Plan')); ?></th>
                                                    <th scope="col"><?php echo e(__('subscription.Start Date')); ?></th>
                                                    <th scope="col"><?php echo e(__('subscription.End Date')); ?></th>
                                                    <th scope="col"><?php echo e(__('subscription.Days')); ?></th>
                                                    <th scope="col"><?php echo e(__('subscription.Price')); ?></th>
                                                    <th scope="col"><?php echo e(__('subscription.Payment Method')); ?></th>
                                                    <th scope="col"><?php echo e(__('subscription.Status')); ?></th>
                                                    <th scope="col"><?php echo e(__('payment.Invoice')); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(isset($checkouts)): ?>

                                                    <?php $__currentLoopData = $checkouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$checkout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td scope="row"><?php echo e(@$key+1); ?></td>
                                                            <td><?php echo e($checkout->plan->title); ?></td>

                                                            <td><?php echo e(showDate($checkout->start_date)); ?></td>
                                                            <td><?php echo e(showDate($checkout->end_date)); ?></td>


                                                            <td> <?php echo e($checkout->days); ?>    </td>
                                                            <td> <?php echo e($checkout->price); ?>    </td>
                                                            <td> <?php echo e($checkout->payment_method); ?>    </td>
                                                            <td>
                                                                <?php
                                                                    $date_of_subscription = $checkout->end_date;
                                                                    $now = new DateTime();
                                                                    $startdate = new DateTime($checkout->start_date);
                                                                    $enddate = new DateTime($checkout->end_date);

                                                                    if($startdate <= $now && $now <= $enddate) {
                                                                        echo "Valid";
                                                                    }else{
                                                                        echo "Expire";
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo e(route('subInvoice',$checkout->id)); ?>"
                                                                   class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                                </tbody>
                                            </table>
                                            <div class="mt-4">
                                                <?php echo e($checkouts->links()); ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/components/my-purchase-page-secton.blade.php ENDPATH**/ ?>
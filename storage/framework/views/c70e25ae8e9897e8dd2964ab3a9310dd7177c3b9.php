<?php $__env->startSection('content'); ?>
    <style>
        .container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .left-part,
        .right-part {
            flex: 1;
            /* Each part will take up equal space */
            padding: 10px;
            /* Adjust padding as needed */
        }

        .left-part {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center horizontally */
            border-right: 1px solid #ccc;
            /* Optional: Add a border to separate the parts */
        }

        .right-part {
            border-left: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center horizontally */
            border-right: 1px solid #ccc;
            /* Optional: Add a border to separate the parts */
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-part,
            .right-part {
                flex: none;
                /* Reset flex */
                width: 100%;
                /* Full width */
                border-right: none;
                /* Remove the right border */
                border-left: none;
                /* Remove the left border */
            }

            .left-part {
                border-bottom: 1px solid #ccc;
                /* Optional: Add a bottom border to separate the parts */
            }
        }
    </style>
    <?php
        $locale = App::getLocale();
        $name_l = 'name_' . $locale;
    ?>

    <div class="pt-5 border container">
        <div class="left-part ">
            <p><?php echo e(__('custom.text_bakalavr')); ?></p>
            <a href="<?php echo e(route('petition_for_bakalavr')); ?>"> <button
                    class="btn btn-success"><?php echo e(__('custom.bakalavr_send_application')); ?></button> </a>
        </div>
        <div class="right-part">
            <p><?php echo e(__('custom.text_magistr')); ?></p>
            <a href="<?php echo e(route('petition_for_magistr')); ?>"> <button
                    class="btn btn-success"><?php echo e(__('custom.magistr_send_application')); ?></button> </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\github_clone\qabul2024_tsul\resources\views/user/pages/petition/select_type_petition.blade.php ENDPATH**/ ?>
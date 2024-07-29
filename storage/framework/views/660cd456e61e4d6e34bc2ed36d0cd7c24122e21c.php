<?php $__env->startSection('content'); ?>
    <?php
        $locale = App::getLocale();
        $name_l = 'name_' . $locale;
    ?>
    <style type="text/css">
        .form_one {
            display: none;
        }
    </style>
    <style>
        .hidden_document {
            display: none;
        }
    </style>

    <div class="container">
        <form method="post" action="<?php echo e(route('petition.update', ['id' => $petition->id])); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="form_one image birth_date gender middle_name first_name last_name">
                <div class="top">
                    <b><?php echo app('translator')->get('other.PERSONAL INFORMATION'); ?></b>
                </div>
                <div class="row">
                    <div class="col-md-4 kk first_name middle_name last_name bor_right">
                        <div class="divinput first_name">
                            <h2><?php echo app('translator')->get('petition.First name'); ?> <span class="color-red">*</span> <b id="first_name_error">
                                    <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input id="first_name" type="text" id="latyn" class="in_first_name input_disable"
                                name="first_name" value="<?php echo e($petition->first_name); ?>">
                        </div>

                        <div class="divinput last_name">
                            <h2><?php echo app('translator')->get('petition.Last name'); ?> <span class="color-red">*</span> <b id="last_name_error">
                                    <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input type="text" id="lastname" id="latyn" class="in_last_name input_disable"
                                name="last_name" value="<?php echo e($petition->last_name); ?>">
                        </div>

                        <div class="divinput middle_name">
                            <h2><?php echo app('translator')->get('petition.Father`s name'); ?> <span class="color-red">*</span> <b id="middle_name_error">
                                    <?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input id="middle_name" type="text" id="latyn" class="in_middle_name input_disable"
                                name="middle_name" value="<?php echo e($petition->middle_name); ?>">
                        </div>
                    </div>
                    <div class="col-md-3 kk bor_right gender birth_date ">
                        <div class="divinput gender">
                            <h2><?php echo app('translator')->get('petition.Gender'); ?> <span class="color-red">*</span> <b id="gender_error">*</b>
                            </h2>
                            <div class="all_radio">
                                <div class="radio">
                                    <input type="radio" <?php if($petition->gender == 1): ?> checked="" <?php endif; ?>
                                        class="in_gender input_disable" name="gender"
                                        value="1"><b><?php echo app('translator')->get('petition.Male'); ?></b>
                                </div>
                                <div class="radio">
                                    <input type="radio" <?php if($petition->gender == 0): ?> checked="" <?php endif; ?>
                                        class="in_gender input_disable" name="gender"
                                        value="0"><b><?php echo app('translator')->get('petition.Female'); ?></b>
                                </div>
                            </div>
                        </div>

                        <div class="divinput birth_date">
                            <h2><?php echo app('translator')->get('petition.Date of birth'); ?> <span class="color-red">*</span> <b id="birth_date_error">
                                    <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <div class="date_input">
                                <span>
                                    <img src="<?php echo e(asset('newdesign/img/icondate.png')); ?>" alt="">
                                </span>
                                <input type="date" id="birth_date" value="<?php echo e($petition->birth_date); ?>"
                                    class="in_birth_date input_disable" name="birth_date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 kk image">
                        <div class="img_upload">
                            <div class="left">
                                <div class="divinput image">
                                    <h2><?php echo app('translator')->get('petition.Upload photo 3x4'); ?> <span class="color-red">*</span> <b id="image_error">
                                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                ! <?php echo e($message); ?>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </b></h2>
                                    <div class="chose_file upload-button in_image input_disable">
                                        <b><?php echo app('translator')->get('petition.Choose file'); ?></b>
                                    </div>
                                    <input type="file" id="image_doc " accept="image/x-png,image/jpeg" name="image"
                                        class="file-upload input_disable in_image" hidden>
                                </div>
                            </div>
                            <div class="right">
                                <div class="img image">
                                    <img src="<?php echo e(asset('users/documents/image')); ?>/<?php echo e($petition->image); ?>"
                                        class="profile-pic">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_one country_id region_id  area_id address citizenship nationality">
                <div class="top">
                    <b><?php echo app('translator')->get('petition.Permanent Residence Information'); ?></b>
                </div>
                <div class="row">
                    <div class="col-md-6 kk bor_right region_id country_id area_id">
                        <div class="divinput country_id">
                            <h2><?php echo app('translator')->get('petition.Country'); ?> <span class="color-red">*</span> <b id="country_id_error">
                                    <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <select id="country" class="in_country_id input_disable" name="country_id">
                                <option disabled value="">--------</option>
                                <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($petition->country_id == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->$name_l); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="divinput region_id">
                            <h2><?php echo app('translator')->get('petition.Region Of Permanent Residence'); ?> <span class="color-red">*</span> <b id="region_id_error">
                                    <?php $__errorArgs = ['region_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <select class="in_region_id input_disable" name="region_id" id="country_region">
                                <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($petition->region_id == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->$name_l); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="divinput area_id">
                            <h2><?php echo app('translator')->get('petition.City Of Permanent Residence'); ?> <span class="color-red">*</span> <b id="area_id_error">
                                    <?php $__errorArgs = ['region_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <select class="in_area_id input_disable" name="area_id" id="country_region_area">

                                <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($petition->area_id == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->$name_l); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 kk address citizenship nationality">
                        <div class="divinput address">
                            <h2><?php echo app('translator')->get('petition.Address'); ?> <span class="color-red">*</span> <b id="address_error">
                                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input type="text" id="latyn_address" value="<?php echo e($petition->address); ?>"
                                class="in_address input_disable" name="address" class="address">
                        </div>

                        <div class="divinput citizenship">
                            <h2><?php echo app('translator')->get('petition.Citizenship'); ?> <span class="color-red">*</span> <b id="citizenship_error">
                                    <?php $__errorArgs = ['citizenship'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input type="text" id="latyn" value="<?php echo e($petition->citizenship); ?>"
                                class="in_citizenship input_disable" name="citizenship" class="citizenship">
                        </div>

                        <div class="divinput nationality">
                            <h2><?php echo app('translator')->get('petition.Nationality'); ?> <span class="color-red">*</span> <b id="nationality_error">
                                    <?php $__errorArgs = ['nationality'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input type="text" id="latyn" value="<?php echo e($petition->nationality); ?>"
                                class="in_nationality input_disable" name="nationality">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_one passport_seria passport_image">
                <div class="top">
                    <b><?php echo app('translator')->get('petition.Passport Information'); ?></b>
                </div>
                <div class="row">
                    <div class="col-md-6 kk bor_right passport_seria passport_image">
                        <div class="divinput passport_seria">
                            <h2><?php echo app('translator')->get('petition.Passport seria and number'); ?> <span class="color-red">*</span> <b id="passport_seria_error">
                                    <?php $__errorArgs = ['passport_seria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b>
                            </h2>
                            <input type="text" class="in_passport_seria input_disable" name="passport_seria"
                                value="<?php echo e($petition->passport_seria); ?>" placeholder="AA1234567" id="passport_seria">
                        </div>

                        <div class="divinput passport_image">
                            <h2><?php echo app('translator')->get('petition.Upload passport copy (Upload only the main page)'); ?> <span class="color-red">*</span> <b id="passport_image_error">
                                    <?php $__errorArgs = ['passport_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b>
                            </h2>
                            <div class="chose_file upload-button2">
                                <b><?php echo app('translator')->get('petition.Choose file'); ?></b>
                            </div>
                            <input type="file" class="file-upload2 input_disable in_passport_image" hidden
                                id="image_pass" accept="image/x-png,image/jpeg,image/jpg,application/pdf"
                                name="passport_image">
                        </div>

                    </div>
                    <div class="col-md-6 kk passport_image">
                        <div class="img_all">
                            <div class="big_img">
                                <iframe id="iframePdf" style="display: block; width: 100%; height: auto"
                                    src="<?php echo e(asset('users/documents/passport_images')); ?>/<?php echo e($petition->passport_image); ?>"
                                    class="profile-pic2-pdf" src=""></iframe>
                                <img src="<?php echo e(asset('users/documents/passport_images')); ?>/<?php echo e($petition->passport_image); ?>"
                                    class="profile-pic2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_one home_phone mother_phone father_phone mobile_phone">
                <div class="top">
                    <b><?php echo app('translator')->get('petition.Contact Information'); ?></b>
                </div>
                <div class="row">
                    <div class="col-md-4 kk home_phone mobile_phone ">
                        <div class="divinput mobile_phone">
                            <h2><?php echo app('translator')->get('petition.Telefon raqam'); ?> <b id="mobile_phone_error">
                                    <?php $__errorArgs = ['mobile_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input type="text" class="in_mobile_phone input_disable" disabled
                                value="<?php echo e(Auth::user()->email); ?>">
                        </div>
                        <div class="divinput home_phone">
                            <h2><?php echo app('translator')->get('petition.Qoshimcha telefon raqam'); ?> <b id="home_phone_error">
                                    <?php $__errorArgs = ['home_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input type="text" class="in_home_phone input_disable" name="home_phone"
                                value="<?php echo e($petition->home_phone); ?>">
                        </div>


                    </div>
                    <div class="col-md-4 kk father_phone mother_phone">
                        <div class="divinput father_phone">
                            <h2><?php echo app('translator')->get('petition.Father`s phone number'); ?> <b id="father_phone_error">
                                    <?php $__errorArgs = ['father_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b>
                            </h2>
                            <input type="text" class="in_father_phone input_disable" name="father_phone"
                                value="<?php echo e($petition->father_phone); ?>">
                        </div>

                        <div class="divinput mother_phone">
                            <h2><?php echo app('translator')->get('petition.Mother`s phone number'); ?> <b id="mother_phone_error">
                                    <?php $__errorArgs = ['mother_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b>
                            </h2>
                            <input type="text" class="in_mother_phone input_disable" name="mother_phone"
                                value="<?php echo e($petition->mother_phone); ?>">
                        </div>

                    </div>
                </div>
            </div>


            <div class="form_one school type_school graduation_date diplom_number diplom_image diplom_image_app">
                <div class="top">
                    <b><?php echo app('translator')->get('petition.High School (College Information)'); ?></b>
                </div>
                <div class="row">
                    <div class="col-md-6 kk bor_right school type_school graduation_date">
                        <div class="divinput school">
                            <h2><?php echo app('translator')->get('petition.Name of school or number'); ?> <span class="color-red">*</span> <b id="school_error">
                                    <?php $__errorArgs = ['school'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input type="text" id="latyn_address" class="in_school input_disable" name="school"
                                value="<?php echo e($petition->school); ?>">
                        </div>

                        <div class="divinput type_school">
                            <h2><?php echo app('translator')->get('petition.Type school'); ?> <span class="color-red">*</span> <b id="type_school_error">
                                    <?php $__errorArgs = ['type_school'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <select class="in_type_school input_disable" name="type_school">
                                <?php $__currentLoopData = $typeschool; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($petition->type_school == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->$name_l); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="divinput graduation_date">
                            <h2><?php echo app('translator')->get('petition.Select graduation date'); ?> <span class="color-red">*</span> <b id="graduation_date_error">
                                    <?php $__errorArgs = ['graduation_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <select class="in_graduation_date input_disable" name="graduation_date">
                                <?php for($i = date('Y'); $i > date('Y') - 21; $i--): ?>
                                    <option <?php if($petition->graduation_date == $i): ?> selected <?php endif; ?> value="<?php echo e($i); ?>">
                                        <?php echo e($i); ?></option>
                                <?php endfor; ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 kk diplom_number diplom_image">
                        <div class="divinput diplom_number">
                            <h2><?php echo app('translator')->get('petition.Diploma number'); ?> <span class="color-red">*</span> <b id="diplom_number_error">
                                    <?php $__errorArgs = ['diplom_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <input type="text" id="latyn_address" class="in_diplom_number input_disable"
                                name="diplom_number" value="<?php echo e($petition->diplom_number); ?>">
                        </div>


                    </div>
                    <div class="col-md-3 kk diplom_number diplom_image">
                        <div class="divinput diplom_image">
                            <h2><?php echo app('translator')->get('petition.Upload Diploma (Upload only diploma)'); ?> <span class="color-red">*</span>
                                <b id="diplom_image_error">
                                    <?php $__errorArgs = ['diplom_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b>
                            </h2>
                            <div class="chose_file upload-button3">
                                <b><?php echo app('translator')->get('petition.Choose file'); ?></b>
                            </div>
                            <input type="file" class="file-upload3 input_disable in_diplom_image" hidden
                                id="image_dip" accept="image/x-png,image/jpeg,application/pdf" name="diplom_image">
                        </div>
                    </div>
                    <div class="col-md-3 kk diplom_image">
                        <div class="big_img2">
                            <img src="<?php echo e(asset('users/documents/diplom_images')); ?>/<?php echo e($petition->diplom_image); ?>"
                                class="profile-pic3" alt="">
                            <iframe id="iframePdf" style="display: block; width: 100%; height: auto"
                                src="<?php echo e(asset('users/documents/diplom_images')); ?>/<?php echo e($petition->diplom_image); ?>"
                                class="profile-pic3-pdf" src=""></iframe>
                        </div>
                    </div>
                    <div class="col-md-3 kk diplom_number diplom_image_app">
                        <div class="divinput diplom_image_app">
                            <h2><?php echo app('translator')->get('petition.Upload Diploma application (Upload only diploma application)'); ?> <span class="color-red">*</span> <b id="diplom_image_app_error">
                                    <?php $__errorArgs = ['diplom_image_app'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <div class="chose_file upload-button6">
                                <b><?php echo app('translator')->get('petition.Choose file'); ?></b>
                            </div>
                            <input type="file" class="file-upload6 input_disable in_diplom_image_app" hidden
                                id="image_dip_app" accept="image/x-png,image/jpeg,application/pdf"
                                name="diplom_image_app">
                        </div>
                    </div>
                    <div class="col-md-3 kk diplom_image_app">
                        <div class="big_img2">
                            <img src="<?php echo e(asset('users/documents/diplom_images')); ?>/<?php echo e($petition->diplom_image_app); ?>"
                                class="profile-pic6" alt="">
                            <iframe id="iframePdf" style="display: block; width: 100%; height: auto"
                                src="<?php echo e(asset('users/documents/diplom_images')); ?>/<?php echo e($petition->diplom_image_app); ?>"
                                class="profile-pic6-pdf" src=""></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_one  english_degree english_image overall_score_english ilts_number ilts_number">
                <div class="top">
                    <b><?php echo app('translator')->get('petition.English Proficiency Information'); ?></b>
                </div>
                <div class="row">
                    <div class="col-md-4 kk bor_right english_degree overall_score_english">

                        <div class="divinput english_degree">
                            <h2><?php echo app('translator')->get('petition.English degree'); ?> <b id="english_degree_error">
                                    <?php $__errorArgs = ['english_degree'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <select class="in_english_degree input_disable" name="english_degree">
                                <?php $__currentLoopData = $endegree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($petition->endegree == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->$name_l); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="divinput overall_score_english">
                            <h2><?php echo app('translator')->get('petition.Overall band score'); ?> <b id="overall_score_english_error"></b></h2>
                            <input type="text" style="width: 100px !important;" id="latyn_address"
                                class="in_overall_score_english input_disable" name="overall_score_english"
                                value="<?php echo e($petition->overall_score_english); ?>">
                        </div>

                        <div class="divinput ilts_number">
                            <h2><?php echo app('translator')->get('petition.IELTS Test Report Form Number (only if IELTS)'); ?> <b id="ilts_number_error"></b></h2>
                            <input type="text" id="latyn_address" class="in_ilts_number input_disable"
                                name="ilts_number" value="<?php echo e($petition->ilts_number); ?>">
                        </div>


                    </div>
                    <div class="col-md-4 kk english_image">


                        <div class="divinput english_image">
                            <h2><?php echo app('translator')->get('petition.Upload test report copy'); ?> <b id="english_image_error">
                                    <?php $__errorArgs = ['english_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b>
                            </h2>
                            <div class="chose_file upload-button4">
                                <b><?php echo app('translator')->get('petition.Choose file'); ?></b>
                            </div>
                            <input type="file" class="file-upload4 input_disable in_english_image" hidden
                                id="image_eng" accept="image/x-png,image/jpeg,application/pdf" name="english_image">
                        </div>

                    </div>
                    <div class="col-md-4 kk english_image">
                        <div class="big_img2">
                            <img src="<?php echo e(asset('users/documents/english_images')); ?>/<?php echo e($petition->english_image); ?>"
                                class="profile-pic4" alt="">
                            <iframe id="iframePdf" style="display: block; width: 100%; height: auto"
                                src="<?php echo e(asset('users/documents/english_images')); ?>/<?php echo e($petition->english_image); ?>"
                                class="profile-pic4-pdf" src=""></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="form_one faculty_id high_school_id type_education_id type_language_id disability_description disability_status_id olympics recommendation years">
                <div class="top">
                    <b><?php echo app('translator')->get('petition.Faculty Selection'); ?></b>
                </div>
                <div class="row">
                    <div class="col-md-6 kk bor_right faculty_id type_education_id type_language_id years">
                        <div class="divinput">
                            <h2><?php echo app('translator')->get('petition.Talim tashkilotini tanlang'); ?> <span class="color-red">*</span> <b id="high_school_id_error">
                                    <?php $__errorArgs = ['high_school_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b></h2>
                            <select class="form-control input_disable in_high_school_id" id="high_school"
                                name="high_school_id" style="width: 100%;">
                                <option value="">-----</option>
                                <?php $__currentLoopData = $high_schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($petition->high_school_id == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->$name_l); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="divinput faculty_id">
                            <h2><?php echo app('translator')->get('petition.Select faculty'); ?> <span class="color-red">*</span>
                                <b id="faculty_id_error">
                                    <?php $__errorArgs = ['faculty_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b>
                            </h2>
                            <select id="faculty" class="in_faculty_id input_disable" name="faculty_id"
                                style="width: 100%;">
                                <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($petition->faculty_id == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->$name_l); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="divinput years">
                            <h2><?php echo app('translator')->get('petition.Select Edu Years'); ?> <span class="color-red">*</span>
                                <b id="years_error">
                                    <?php $__errorArgs = ['years'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        ! <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </b>
                            </h2>
                            <select class="form-control" id="years" name="years" style="width: 100%;">
                                <?php
                                    $regions = ('App\FacultyEduYear')
                                        ::where('faculty_id', $petition->faculty_id)
                                        ->get();
                                ?>
                                <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($petition->years == $item->years): ?> selected <?php endif; ?>
                                        value="<?php echo e($item->years); ?>"><?php echo e($item->years); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="send">
                    <button type="submit"><?php echo app('translator')->get('petition.Send'); ?></button>
                </div>
        </form>

        <div class="send back">
            <button style="background-color: #4997CF"><?php echo app('translator')->get('login.back'); ?></button>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $('#image_doc').bind('change', function() {
            console.log('lalal');
            var a = (this.files[0].size);
            // alert(a);
            if (a > 4000000) {
                alert(notf);
                $(this).val('');
            };
        });
        $('#image_pass').bind('change', function() {
            var a = (this.files[0].size);
            // alert(a);
            if (a > 4000000) {
                alert(notf);
                $(this).val('');
            };
        });
        $('#image_dip').bind('change', function() {
            var a = (this.files[0].size);
            // alert(a);
            if (a > 4000000) {
                alert(notf);
                $(this).val('');
            };
        });
        $('#image_eng').bind('change', function() {
            var a = (this.files[0].size);
            // alert(a);
            if (a > 4000000) {
                alert(notf);
                $(this).val('');
            };
        });
        $('.input_disable').attr('disabled', 'true');

        function get_edits(id) {
            var c_id = id;
            var url = '/get-edits/' + c_id;
            $.ajax({
                url: url,
                type: 'GET',
                success: function(result) {
                    var regions = $.parseJSON(result);
                    console.log(regions);
                    $.each(regions, function(key, value) {
                        $('.' + value['column']).css({
                            'display': 'block',
                        });
                        var comment = value['comment'];
                        var old = $('#' + value['column'] + '_error').html();
                        comment = old + ' | ' + comment;
                        $('#' + value['column'] + '_error').html(comment);
                        $('.in_' + value['column']).removeAttr('disabled');
                    });

                }
            });
        }

        // $('.send button').click(function(){
        // 	if ($('input[name="image"]').val() == '') {
        // 		window.location.href = '#image_error';
        // 	}
        // });


        get_edits(<?php echo e($petition->id); ?>);

        $('.back').click(function() {
            window.location.href = '<?php echo e(route('petition.status')); ?>';
        });
    </script>
    <script type="text/javascript">
        function get_enable_documents(id) {
            $.ajax({
                url: '/get-enable_documents/' + id,
                type: 'GET',
                success: function(res) {
                    var res2 = JSON.parse(res);
                    $.each(res2, function(key, value) {
                        $('.en_' + value.column).removeClass('hidden_document');
                        if (value.type_input == 'required') {
                            $('.en_' + value.column + ' input').attr('required', 'true');
                        }
                    })
                }
            })
        }

        $('#high_school').change(function() {
            $('.document_input').addClass('hidden_document');
            var id = $(this).val();
            get_enable_documents(id)
        })
        $(document).ready(function() {
            var id = $('#high_school').val();
            get_enable_documents(id)
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\github_clone\qabul2024_tsul\resources\views/user/pages/petition/edit.blade.php ENDPATH**/ ?>
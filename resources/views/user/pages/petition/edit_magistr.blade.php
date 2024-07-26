@extends('admin.layouts.master_new')

@section('content')
    @php
        $locale = App::getLocale();
        $name_l = 'name_' . $locale;
    @endphp
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
        <form method="post" action="{{ route('petition.update', ['id' => $petition->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form_one image birth_date gender middle_name first_name last_name">
                <div class="top">
                    <b>@lang('other.PERSONAL INFORMATION')</b>
                </div>
                <div class="row">
                    <div class="col-md-4 kk first_name middle_name last_name bor_right">
                        <div class="divinput first_name">
                            <h2>@lang('petition.First name') <span class="color-red">*</span> <b id="first_name_error">
                                    @error('first_name')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input id="first_name" type="text" id="latyn" class="in_first_name input_disable"
                                name="first_name" value="{{ $petition->first_name }}">
                        </div>

                        <div class="divinput last_name">
                            <h2>@lang('petition.Last name') <span class="color-red">*</span> <b id="last_name_error">
                                    @error('last_name')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input type="text" id="lastname" id="latyn" class="in_last_name input_disable"
                                name="last_name" value="{{ $petition->last_name }}">
                        </div>

                        <div class="divinput middle_name">
                            <h2>@lang('petition.Father`s name') <span class="color-red">*</span> <b id="middle_name_error">
                                    @error('middle_name')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input id="middle_name" type="text" id="latyn" class="in_middle_name input_disable"
                                name="middle_name" value="{{ $petition->middle_name }}">
                        </div>
                    </div>
                    <div class="col-md-3 kk bor_right gender birth_date ">
                        <div class="divinput gender">
                            <h2>@lang('petition.Gender') <span class="color-red">*</span> <b id="gender_error">*</b>
                            </h2>
                            <div class="all_radio">
                                <div class="radio">
                                    <input type="radio" @if ($petition->gender == 1) checked="" @endif
                                        class="in_gender input_disable" name="gender"
                                        value="1"><b>@lang('petition.Male')</b>
                                </div>
                                <div class="radio">
                                    <input type="radio" @if ($petition->gender == 0) checked="" @endif
                                        class="in_gender input_disable" name="gender"
                                        value="0"><b>@lang('petition.Female')</b>
                                </div>
                            </div>
                        </div>

                        <div class="divinput birth_date">
                            <h2>@lang('petition.Date of birth') <span class="color-red">*</span> <b id="birth_date_error">
                                    @error('birth_date')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <div class="date_input">
                                <span>
                                    <img src="{{ asset('newdesign/img/icondate.png') }}" alt="">
                                </span>
                                <input type="date" id="birth_date" value="{{ $petition->birth_date }}"
                                    class="in_birth_date input_disable" name="birth_date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 kk image">
                        <div class="img_upload">
                            <div class="left">
                                <div class="divinput image">
                                    <h2>@lang('petition.Upload photo 3x4') <span class="color-red">*</span> <b id="image_error">
                                            @error('image')
                                                ! {{ $message }}
                                            @enderror
                                        </b></h2>
                                    <div class="chose_file upload-button in_image input_disable">
                                        <b>@lang('petition.Choose file')</b>
                                    </div>
                                    <input type="file" id="image_doc " accept="image/x-png,image/jpeg" name="image"
                                        class="file-upload input_disable in_image" hidden>
                                </div>
                            </div>
                            <div class="right">
                                <div class="img image">
                                    <img src="{{ asset('users/documents/image') }}/{{ $petition->image }}"
                                        class="profile-pic">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_one country_id region_id  area_id address citizenship nationality">
                <div class="top">
                    <b>@lang('petition.Permanent Residence Information')</b>
                </div>
                <div class="row">
                    <div class="col-md-6 kk bor_right region_id country_id area_id">
                        <div class="divinput country_id">
                            <h2>@lang('petition.Country') <span class="color-red">*</span> <b id="country_id_error">
                                    @error('country')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select id="country" class="in_country_id input_disable" name="country_id">
                                <option disabled value="">--------</option>
                                @foreach ($country as $item)
                                    <option @if ($petition->country_id == $item->id) selected @endif value="{{ $item->id }}">
                                        {{ $item->$name_l }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="divinput region_id">
                            <h2>@lang('petition.Region Of Permanent Residence') <span class="color-red">*</span> <b id="region_id_error">
                                    @error('region_id')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select class="in_region_id input_disable" name="region_id" id="country_region">
                                @foreach ($regions as $item)
                                    <option @if ($petition->region_id == $item->id) selected @endif value="{{ $item->id }}">
                                        {{ $item->$name_l }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="divinput area_id">
                            <h2>@lang('petition.City Of Permanent Residence') <span class="color-red">*</span> <b id="area_id_error">
                                    @error('region_id')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select class="in_area_id input_disable" name="area_id" id="country_region_area">

                                @foreach ($areas as $item)
                                    <option @if ($petition->area_id == $item->id) selected @endif value="{{ $item->id }}">
                                        {{ $item->$name_l }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 kk address citizenship nationality">
                        <div class="divinput address">
                            <h2>@lang('petition.Address') <span class="color-red">*</span> <b id="address_error">
                                    @error('address')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input type="text" id="latyn_address" value="{{ $petition->address }}"
                                class="in_address input_disable" name="address" class="address">
                        </div>

                        <div class="divinput citizenship">
                            <h2>@lang('petition.Citizenship') <span class="color-red">*</span> <b id="citizenship_error">
                                    @error('citizenship')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input type="text" id="latyn" value="{{ $petition->citizenship }}"
                                class="in_citizenship input_disable" name="citizenship" class="citizenship">
                        </div>

                        <div class="divinput nationality">
                            <h2>@lang('petition.Nationality') <span class="color-red">*</span> <b id="nationality_error">
                                    @error('nationality')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input type="text" id="latyn" value="{{ $petition->nationality }}"
                                class="in_nationality input_disable" name="nationality">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_one passport_seria passport_image">
                <div class="top">
                    <b>@lang('petition.Passport Information')</b>
                </div>
                <div class="row">
                    <div class="col-md-6 kk bor_right passport_seria passport_image">
                        <div class="divinput passport_seria">
                            <h2>@lang('petition.Passport seria and number') <span class="color-red">*</span> <b id="passport_seria_error">
                                    @error('passport_seria')
                                        ! {{ $message }}
                                    @enderror
                                </b>
                            </h2>
                            <input type="text" class="in_passport_seria input_disable" name="passport_seria"
                                value="{{ $petition->passport_seria }}" placeholder="AA1234567" id="passport_seria">
                        </div>

                        <div class="divinput passport_image">
                            <h2>@lang('petition.Upload passport copy (Upload only the main page)') <span class="color-red">*</span> <b id="passport_image_error">
                                    @error('passport_image')
                                        ! {{ $message }}
                                    @enderror
                                </b>
                            </h2>
                            <div class="chose_file upload-button2">
                                <b>@lang('petition.Choose file')</b>
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
                                    src="{{ asset('users/documents/passport_images') }}/{{ $petition->passport_image }}"
                                    class="profile-pic2-pdf" src=""></iframe>
                                <img src="{{ asset('users/documents/passport_images') }}/{{ $petition->passport_image }}"
                                    class="profile-pic2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_one home_phone mother_phone father_phone mobile_phone">
                <div class="top">
                    <b>@lang('petition.Contact Information')</b>
                </div>
                <div class="row">
                    <div class="col-md-4 kk home_phone mobile_phone ">
                        <div class="divinput mobile_phone">
                            <h2>@lang('petition.Telefon raqam') <b id="mobile_phone_error">
                                    @error('mobile_phone')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input type="text" class="in_mobile_phone input_disable" disabled
                                value="{{ Auth::user()->email }}">
                        </div>
                        <div class="divinput home_phone">
                            <h2>@lang('petition.Qoshimcha telefon raqam') <b id="home_phone_error">
                                    @error('home_phone')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input type="text" class="in_home_phone input_disable" name="home_phone"
                                value="{{ $petition->home_phone }}">
                        </div>


                    </div>
                    <div class="col-md-4 kk father_phone mother_phone">
                        <div class="divinput father_phone">
                            <h2>@lang('petition.Father`s phone number') <b id="father_phone_error">
                                    @error('father_phone')
                                        ! {{ $message }}
                                    @enderror
                                </b>
                            </h2>
                            <input type="text" class="in_father_phone input_disable" name="father_phone"
                                value="{{ $petition->father_phone }}">
                        </div>

                        <div class="divinput mother_phone">
                            <h2>@lang('petition.Mother`s phone number') <b id="mother_phone_error">
                                    @error('mother_phone')
                                        ! {{ $message }}
                                    @enderror
                                </b>
                            </h2>
                            <input type="text" class="in_mother_phone input_disable" name="mother_phone"
                                value="{{ $petition->mother_phone }}">
                        </div>

                    </div>
                </div>
            </div>


            <div class="form_one school type_school graduation_date diplom_number diplom_image diplom_image_app">
                <div class="top">
                    <b>@lang('petition.High School (College Information)')</b>
                </div>
                <div class="row">
                    <div class="col-md-6 kk bor_right school type_school graduation_date">
                        <div class="divinput school">
                            <h2>@lang('petition.Name of school or number') <span class="color-red">*</span> <b id="school_error">
                                    @error('school')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input type="text" id="latyn_address" class="in_school input_disable" name="school"
                                value="{{ $petition->school }}">
                        </div>

                        <div class="divinput type_school">
                            <h2>@lang('petition.Type school') <span class="color-red">*</span> <b id="type_school_error">
                                    @error('type_school')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select class="in_type_school input_disable" name="type_school">
                                @foreach ($typeschool as $item)
                                    <option @if ($petition->type_school == $item->id) selected @endif value="{{ $item->id }}">
                                        {{ $item->$name_l }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="divinput graduation_date">
                            <h2>@lang('petition.Select graduation date') <span class="color-red">*</span> <b id="graduation_date_error">
                                    @error('graduation_date')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select class="in_graduation_date input_disable" name="graduation_date">
                                @for ($i = date('Y'); $i > date('Y') - 21; $i--)
                                    <option @if ($petition->graduation_date == $i) selected @endif value="{{ $i }}">
                                        {{ $i }}</option>
                                @endfor

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 kk diplom_number diplom_image">
                        <div class="divinput diplom_number">
                            <h2>@lang('petition.Diploma number') <span class="color-red">*</span> <b id="diplom_number_error">
                                    @error('diplom_number')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <input type="text" id="latyn_address" class="in_diplom_number input_disable"
                                name="diplom_number" value="{{ $petition->diplom_number }}">
                        </div>


                    </div>
                    <div class="col-md-3 kk diplom_number diplom_image">
                        <div class="divinput diplom_image">
                            <h2>@lang('petition.Upload Diploma (Upload only diploma)') <span class="color-red">*</span>
                                <b id="diplom_image_error">
                                    @error('diplom_image')
                                        ! {{ $message }}
                                    @enderror
                                </b>
                            </h2>
                            <div class="chose_file upload-button3">
                                <b>@lang('petition.Choose file')</b>
                            </div>
                            <input type="file" class="file-upload3 input_disable in_diplom_image" hidden
                                id="image_dip" accept="image/x-png,image/jpeg,application/pdf" name="diplom_image">
                        </div>
                    </div>
                    <div class="col-md-3 kk diplom_image">
                        <div class="big_img2">
                            <img src="{{ asset('users/documents/diplom_images') }}/{{ $petition->diplom_image }}"
                                class="profile-pic3" alt="">
                            <iframe id="iframePdf" style="display: block; width: 100%; height: auto"
                                src="{{ asset('users/documents/diplom_images') }}/{{ $petition->diplom_image }}"
                                class="profile-pic3-pdf" src=""></iframe>
                        </div>
                    </div>
                    <div class="col-md-3 kk diplom_number diplom_image_app">
                        <div class="divinput diplom_image_app">
                            <h2>@lang('petition.Upload Diploma application (Upload only diploma application)') <span class="color-red">*</span> <b id="diplom_image_app_error">
                                    @error('diplom_image_app')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <div class="chose_file upload-button6">
                                <b>@lang('petition.Choose file')</b>
                            </div>
                            <input type="file" class="file-upload6 input_disable in_diplom_image_app" hidden
                                id="image_dip_app" accept="image/x-png,image/jpeg,application/pdf"
                                name="diplom_image_app">
                        </div>
                    </div>
                    <div class="col-md-3 kk diplom_image_app">
                        <div class="big_img2">
                            <img src="{{ asset('users/documents/diplom_images') }}/{{ $petition->diplom_image_app }}"
                                class="profile-pic6" alt="">
                            <iframe id="iframePdf" style="display: block; width: 100%; height: auto"
                                src="{{ asset('users/documents/diplom_images') }}/{{ $petition->diplom_image_app }}"
                                class="profile-pic6-pdf" src=""></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_one  english_degree english_image overall_score_english ilts_number ilts_number">
                <div class="top">
                    <b>@lang('petition.English Proficiency Information')</b>
                </div>
                <div class="row">
                    <div class="col-md-4 kk bor_right english_degree overall_score_english">

                        <div class="divinput english_degree">
                            <h2>@lang('petition.English degree') <b id="english_degree_error">
                                    @error('english_degree')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select class="in_english_degree input_disable" name="english_degree">
                                @foreach ($endegree as $item)
                                    <option @if ($petition->endegree == $item->id) selected @endif value="{{ $item->id }}">
                                        {{ $item->$name_l }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="divinput overall_score_english">
                            <h2>@lang('petition.Overall band score') <b id="overall_score_english_error"></b></h2>
                            <input type="text" style="width: 100px !important;" id="latyn_address"
                                class="in_overall_score_english input_disable" name="overall_score_english"
                                value="{{ $petition->overall_score_english }}">
                        </div>

                        <div class="divinput ilts_number">
                            <h2>@lang('petition.IELTS Test Report Form Number (only if IELTS)') <b id="ilts_number_error"></b></h2>
                            <input type="text" id="latyn_address" class="in_ilts_number input_disable"
                                name="ilts_number" value="{{ $petition->ilts_number }}">
                        </div>


                    </div>
                    <div class="col-md-4 kk english_image">


                        <div class="divinput english_image">
                            <h2>@lang('petition.Upload test report copy') <b id="english_image_error">
                                    @error('english_image')
                                        ! {{ $message }}
                                    @enderror
                                </b>
                            </h2>
                            <div class="chose_file upload-button4">
                                <b>@lang('petition.Choose file')</b>
                            </div>
                            <input type="file" class="file-upload4 input_disable in_english_image" hidden
                                id="image_eng" accept="image/x-png,image/jpeg,application/pdf" name="english_image">
                        </div>

                    </div>
                    <div class="col-md-4 kk english_image">
                        <div class="big_img2">
                            <img src="{{ asset('users/documents/english_images') }}/{{ $petition->english_image }}"
                                class="profile-pic4" alt="">
                            <iframe id="iframePdf" style="display: block; width: 100%; height: auto"
                                src="{{ asset('users/documents/english_images') }}/{{ $petition->english_image }}"
                                class="profile-pic4-pdf" src=""></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="form_one faculty_id high_school_id type_education_id type_language_id disability_description disability_status_id olympics recommendation">
                <div class="top">
                    <b>@lang('petition.Faculty Selection')</b>
                </div>
                <div class="row">
                    <div class="col-md-6 kk bor_right faculty_id type_education_id type_language_id">
                        <div class="divinput">
                            <h2>@lang('petition.Talim tashkilotini tanlang') <span class="color-red">*</span> <b id="high_school_id_error">
                                    @error('high_school_id')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select class="form-control input_disable in_high_school_id" id="high_school"
                                name="high_school_id" style="width: 100%;">
                                <option value="">-----</option>
                                @foreach ($high_schools as $item)
                                    <option @if ($petition->high_school_id == $item->id) selected @endif value="{{ $item->id }}">
                                        {{ $item->$name_l }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="divinput faculty_id">
                            <h2>@lang('petition.Select faculty') <span class="color-red">*</span> <b id="faculty_id_error">
                                    @error('faculty_id')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select id="faculty" class="in_faculty_id input_disable" name="faculty_id"
                                style="width: 100%;">
                                @foreach ($faculties as $item)
                                    <option @if ($petition->faculty_id == $item->id) selected @endif value="{{ $item->id }}">
                                        {{ $item->$name_l }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="divinput type_education_id">
                            <h2>@lang('petition.Type of Education') <span class="color-red">*</span> <b id="type_education_id_error">
                                    @error('type_education_id')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select id="faculty_type_edu" class="in_type_education_id input_disable"
                                name="type_education_id" style="width: 100%;">
                                @foreach ($edutypes as $item)
                                    <option @if ($petition->type_education_id == $item->id) selected @endif
                                        value="{{ $item->id }}">{{ $item->$name_l }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="divinput type_language_id">
                            <h2>@lang('petition.Language of further education') <span class="color-red">*</span> <b id="type_language_id_error">
                                    @error('type_language_id')
                                        ! {{ $message }}
                                    @enderror
                                </b></h2>
                            <select id="faculty_type_lang" class="in_type_language_id input_disable"
                                name="type_language_id" style="width: 100%;">
                                @foreach ($languagetype as $item)
                                    <option @if ($petition->type_language_id == $item->id) selected @endif
                                        value="{{ $item->id }}">{{ $item->$name_l }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="divinput recommendation">
                            <h2>@lang('petition.Tavfsiyanoma nusxasi (magistrlar uchun)') <b id="recommendation_error">
                                    @error('recommendation')
                                        ! {{ @message }}
                                    @enderror
                                </b></h2>
                            <div class="col-md-6">
                                <div class="divinput">
                                    <h2>@lang('petition.Tavsiyanoma nusxasini yuklang') </h2>
                                    <div class="chose_file upload-button5">
                                        <b>@lang('petition.Choose file')</b>
                                    </div>
                                    <input type="file" class="file-upload5 input_disable in_recommendation" hidden
                                        id="image_recommendation" accept="image/x-png,image/jpeg,application/pdf"
                                        name="image_recommendation">
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="big_img2">
                                    <img src="{{ asset('users/documents/recommendation_images') }}/{{ $petition->image_recommendation }}"
                                        class="profile-pic5" alt="">
                                    <iframe id="iframePdf" style="display: block; width: 100%; height: auto"
                                        src="" class="profile-pic5-pdf"
                                        src="{{ asset('users/documents/recommendation_images') }}/{{ $petition->image_recommendation }}"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <div class="send">
                <button type="submit">@lang('petition.Send')</button>
            </div>
        </form>

        <div class="send back">
            <button style="background-color: #4997CF">@lang('login.back')</button>
        </div>
    </div>
@endsection


@section('js')
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


        get_edits({{ $petition->id }});

        $('.back').click(function() {
            window.location.href = '{{ route('petition.status') }}';
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
@endsection

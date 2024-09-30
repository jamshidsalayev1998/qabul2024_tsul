@extends('admin.layouts.master_new')

@section('content')
    <style>
        .container1 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            padding: 5px;
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
            .container1 {
                padding-top: 60px;
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
                border-right: none;
                /* Remove the left border */
            }

            .left-part {
                border-bottom: 1px solid #ccc;
                /* Optional: Add a bottom border to separate the parts */
            }
        }
    </style>
    <style>
        .content {
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            font-size: 0.9em;
            color: #555;
        }

        ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
    @php
        $locale = App::getLocale();
        $name_l = 'name_' . $locale;
    @endphp

    <div class=" border container1">
        <div class="left-part ">
            @if ($locale == 'uz')
                <div class="header">
                    <h2>Hurmatli abituriyent (BAKALAVRIAT)!</h2>
                </div>
                <div class="content">
                    <p>Ushbu platforma orqali Sizda Toshkent davlat yuridik universiteti bakalavriati qo‘shma ta’lim
                        dasturiga qabul qilish to‘g‘risidagi arizangizni elektron shaklda yuborish imkoniyati mavjud.</p>
                    <p>Siz yuborayotgan ushbu ariza rasmiy maqomga ega ekanligini va ariza to‘ldirayotgan vaqtda barcha
                        ma’lumotlarni to‘g‘ri kiritishingiz kerakligini eslatib o‘tamiz.</p>
                    <p>Arizangiz 72 soat ichida ko‘rib chiqiladi.</p>
                    <p>Quyidagi holatlar arizani rad etilish uchun asos bo‘ladi:</p>
                    <ul>
                        <li>ariza mazmunidagi ma’lumotlar noto‘g‘ri bo‘lganida;</li>
                        <li>arizaga ilova qilingan hujjatlar sifati, mazmuni va texnik ko‘rsatkichlari o‘rnatilgan
                            talablarga javob bermagan taqdirda.</li>
                    </ul>
                    <p>Ariza qabul qilingan taqdirda, Toshkent davlat yuridik universiteti bakalavriati qo‘shma ta’lim
                        dasturiga qabul qilish 2 bosqich asosida amalga oshiriladi:</p>
                    <ul>
                        <li>1 - bosqich suhbat (Rossiya Federatsiyasi OTMlari uchun “jamiyatshunoslik” va “rus tili”
                            fanlaridan elektron
                            test sinovi)</li>
                        <li>2 - bosqich O‘zbekiston Respublikasi Oliy ta’lim, fan va innovatsiyalar vazirligi huzuridagi
                            Bilim va
                            malakalarni baholash agentligi tomonidan ta’lim tilidan (rus tili) o‘tkaziladigan test sinovi.
                        </li>
                    </ul>
                </div>
            @endif
            @if ($locale == 'ru')
                <div class="header">
                    <h2>Уважаемые абитуриенты (БАКАЛАВРИАТ)!</h2>
                </div>
                <div class="content">
                    <p>Через данную платформу Вы сможете в электронном виде отправить заявление на прием в бакалавриат по
                        двудипломным программам Ташкентского государственного юридического университета.</p>
                    <p>Напоминаем, что заявление, которое Вы отправляете, имеет официальный статус и при его заполнении, Вы
                        должны правильно ввести всю необходимую информацию.</p>
                    <p>Ваше заявление будет рассмотрено в течение 72 часов.</p>
                    <p>Основаниями для отказа заявления являются следующие:</p>
                    <ul>
                        <li>в содержании заявления имеются неверные сведения;</li>
                        <li>документы, прилагаемые к заявлению, по качеству, содержанию и техническим параметрам не отвечают
                            установленным требованиям.</li>
                    </ul>
                    <p>В случае принятия заявления, прием на совместную образовательную программу бакалавриата Ташкентского
                        государственного юридического университета будет осуществляться в 2 этапа:</p>
                    <ul>
                        <li>1 этап – собеседование (для вузов РФ электронное тестирование по предметам “обществознание” и
                            “русский язык”)</li>
                        <li>2 этап – тестирование по языку обучения (русский язык), проводимое Агентством по оценке знаний и
                            квалификаций при Министерстве высшего образования, науки и инноваций Республики Узбекистан.
                        </li>
                    </ul>
                </div>
            @endif
            @if ($locale == 'en')
                <div class="header">
                    <h2>Dear applicants (Bachelor’s Degree)!</h2>
                </div>
                <div class="content">
                    <p>Through this platform, you can electronically submit an application for admission to a bachelor’s
                        degree in double degree programs at Tashkent state university of law.</p>
                    <p>We remind you that the application you are sending has an official status and while filling it out
                        you must enter correctly all the required information.</p>
                    <p>Your application will be reviewed within 72 hours.</p>
                    <p>The followings are reasons for rejecting an application:</p>
                    <ul>
                        <li>there is incorrect information in the content of the application;</li>
                        <li>the documents attached to the application do not meet the established requirements in terms of
                            quality, content and technical parameters.</li>
                    </ul>
                    <p>If the application is accepted, admission to the double Bachelor’s degree program of Tashkent state
                        university of law will be carried out in 2 stages:</p>
                    <ul>
                        <li>Stage 1 – interview (for universities of the Russian Federation, electronic testing in the
                            subjects “social studies” and “Russian language”)</li>
                        <li>Stage 2 – language of education testing (Russian language) conducted by the Agency of Knowledge
                            and Qualifications under the Ministry of higher education, science and innovation of the
                            Republic of Uzbekistan.
                        </li>
                    </ul>
                </div>
            @endif
            {{-- <p>{{ __('custom.text_bakalavr') }}</p> --}}
            <a href="{{ route('petition_for_bakalavr') }}"> <button
                    class="btn btn-success">{{ __('custom.bakalavr_send_application') }}</button> </a>
        </div>
        <div class="right-part">
            @if ($locale == 'uz')
                <div class="header">
                    <h2>Hurmatli abituriyent (MAGISTRATURA)!</h2>
                </div>
                <div class="content">
                    <p>Ushbu platforma orqali Sizda Toshkent davlat yuridik universiteti magistratura qo‘shma ta’lim
                        dasturiga qabul qilish to‘g‘risidagi arizangizni elektron shaklda yuborish imkoniyati mavjud.</p>
                    <p>Siz yuborayotgan ushbu ariza rasmiy maqomga ega ekanligini va ariza to‘ldirayotgan vaqtda barcha
                        ma’lumotlarni to‘g‘ri kiritishingiz kerakligini eslatib o‘tamiz.</p>
                    <p>Arizangiz 72 soat ichida ko‘rib chiqiladi.</p>
                    <p>Quyidagi holatlar arizani rad etilish uchun asos bo‘ladi:</p>
                    <ul>
                        <li>ariza mazmunidagi ma’lumotlar noto‘g‘ri bo‘lganida;</li>
                        <li>arizaga ilova qilingan hujjatlar sifati, mazmuni va texnik ko‘rsatkichlari o‘rnatilgan
                            talablarga javob bermagan taqdirda.</li>
                    </ul>
                    <p>Ariza qabul qilingan taqdirda, Toshkent davlat yuridik universiteti magistraturasi qo‘shma ta’lim
                        dasturiga qabul qilish quyidagicha amalga oshiriladi:</p>
                    <ul>
                        <li>1 bosqich – suhbat</li>
                        <li>2 bosqich –ta’lim tilini (ingliz tili) B2 darajasida bilishni tasdiqlovchi sertifikatga ega
                            bo‘lish.
                        </li>
                    </ul>
                </div>
            @endif
            @if ($locale == 'ru')
                <div class="header">
                    <h2>Уважаемые абитуриенты (МАГИСТРАТУРА)!</h2>
                </div>
                <div class="content">
                    <p>Через данную платформу Вы сможете в электронном виде отправить заявление на прием в магистратуру по
                        двудипломным программам Ташкентского государственного юридического университета.</p>
                    <p>Напоминаем, что заявление, которое Вы отправляете, имеет официальный статус и при его заполнении, Вы
                        должны правильно ввести всю необходимую информацию.</p>
                    <p>Ваше заявление будет рассмотрено в течение 72 часов.</p>
                    <p>Основаниями для отказа заявления являются следующие:</p>
                    <ul>
                        <li>в содержании заявления имеются неверные сведения;</li>
                        <li>документы, прилагаемые к заявлению, по качеству, содержанию и техническим параметрам не отвечают
                            установленным требованиям.</li>
                    </ul>
                    <p>В случае принятия заявления, прием на совместную образовательную программу магистратуры Ташкентского
                        государственного юридического университета будет осуществляться следующим образом:</p>
                    <ul>
                        <li>1 этап – собеседование</li>
                        <li>2 этап – наличие сертификата о знании языка обучения (английский язык) на уровне В2.
                        </li>
                    </ul>
                </div>
            @endif
            @if ($locale == 'en')
                <div class="header">
                    <h2>Dear applicants (Master’s Degree)!</h2>
                </div>
                <div class="content">
                    <p>Through this platform, you can electronically submit an application for admission to a Master’s
                        degree in double degree programs at Tashkent state university of law.</p>
                    <p>We remind you that the application you are sending has an official status and while filling it out
                        you must enter correctly all the required information.</p>
                    <p>Your application will be reviewed within 72 hours.</p>
                    <p>The followings are reasons for rejecting an application:</p>
                    <ul>
                        <li>there is incorrect information in the content of the application;</li>
                        <li>the documents attached to the application do not meet the established requirements in terms of
                            quality, content and technical parameters.</li>
                    </ul>
                    <p>If the application is accepted, admission to the double Master’s degree program of Tashkent state
                        university of law will be carried out as follows:</p>
                    <ul>
                        <li>Stage 1 – interview</li>
                        <li>Stage 2 – having a certificate confirming knowledge of the language of education (English) at
                            the B2 level.
                        </li>
                    </ul>
                </div>
            @endif
            <a href="{{ route('petition_for_magistr') }}"> <button
                    class="btn btn-success">{{ __('custom.magistr_send_application') }}</button> </a>
        </div>
    </div>
@endsection

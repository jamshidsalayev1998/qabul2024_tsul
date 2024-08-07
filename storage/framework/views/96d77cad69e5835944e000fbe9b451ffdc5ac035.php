
<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="endi_done">
        <?php $locale = App::getLocale(); $name_l = 'name_'.$locale; ?>

        <div class="test_done"></div>
        <div class="applicants">
            <div class="row_app one">
                <h3><?php echo app('translator')->get('menu.All aplicants'); ?></h3>
                <?php $__currentLoopData = $high_schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $high_school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bottom">
                        <h4 class=""><?php echo e($high_school->short_name); ?> : <?php echo e($high_school->all_count); ?></h4>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="bottom">

                    <h4 class="all_count"><?php echo e($all_count); ?></h4>
                </div>

            </div>
            <div class="row_app two">
                <h3><?php echo app('translator')->get('menu.Accepted'); ?></h3>
                <?php $__currentLoopData = $high_schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $high_school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bottom">
                        <h4 class=""><?php echo e($high_school->short_name); ?> : <?php echo e($high_school->acc_count); ?></h4>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="bottom">
                    <h4 class="accepted_count"><?php echo e($acc_count); ?></h4>
                </div>
            </div>
            <div class="row_app three">
                <h3><?php echo app('translator')->get('menu.Rejected'); ?></h3>
                <?php $__currentLoopData = $high_schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $high_school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bottom">
                        <h4 class=""><?php echo e($high_school->short_name); ?> : <?php echo e($high_school->return_count); ?></h4>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="bottom">
                    <h4 class="return_count"><?php echo e($return_count); ?></h4>
                </div>
            </div>
            <div class="row_app four">
                <h3><?php echo app('translator')->get('menu.Waiting'); ?></h3>
                <?php $__currentLoopData = $high_schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $high_school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bottom">
                        <h4 class=""><?php echo e($high_school->short_name); ?> : <?php echo e($high_school->new_count); ?></h4>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="bottom">
                    <h4 class="wait_count"><?php echo e($new_count); ?></h4>
                </div>
            </div>
        </div>

        <div class="back_div">
            <div>
                <div class="tab_index">
                    <ul>
                        <li pdf-url="<?php echo e(route('export_all_excel')); ?>"
                            class="act_li all_pet f_tab"><?php echo app('translator')->get('menu.All applications'); ?></li>
                        <li pdf-url="<?php echo e(route('export_wait_excel')); ?>"
                            class="wait_pet f_tab"><?php echo app('translator')->get('menu.New applications'); ?></li>
                        <li pdf-url="<?php echo e(route('export_return_excel')); ?>"
                            class="return_pet f_tab"><?php echo app('translator')->get('menu.Returned applications'); ?></li>
                        <li pdf-url="<?php echo e(route('export_acc_excel')); ?>"
                            class="acc_pet f_tab"><?php echo app('translator')->get('menu.Accepted applications'); ?></li>
                    </ul>
                    <a href="<?php echo e(route('export_all_excel')); ?>" class="export_pdf">EXCEL EXPORT</a>
                </div>
                <div class="tab_content">
                    <aside class="active">
                        <div class="form-group col-md-3 pt-2 float-right">
                            <input type="" name="all" class="form-control search">
                        </div>
                        <table id="myTable1" class="tb">
                            <thead>
                            <th>#</th>
                            <th>FULL NAME</th>
                            <th>REGISTRATION DATE</th>
                            <th>FACULTY</th>
                            <th>Topshirgan joyi</th>

                            <th>

                            </th>

                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <ul class="pgg myTable1_pag mt-3 " id="pagination-demo1">
                            
                            
                            
                            
                            
                        </ul>


                    </aside>
                    <aside>
                        <div class="form-group col-md-3 pt-2 float-right">
                            <input type="" name="wait" class="form-control search">
                        </div>
                        <table id="myTable2" class="tb">
                            <thead>
                            <th>#</th>
                            <th>FULL NAME</th>
                            <th>REGISTRATION DATE</th>
                            <th>FACULTY</th>
                            <th>Topshirgan joyi</th>

                            <th>

                            </th>

                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <ul class="pgg myTable2_pag mt-3 " id="pagination-demo2">
                            
                            
                            
                            
                            
                        </ul>
                    </aside>
                    <aside>
                        <div class="form-group col-md-3 pt-2 float-right">
                            <input type="" name="return" class="form-control search">
                        </div>
                        <table id="myTable3" class="tb">
                            <thead>
                            <th>#</th>
                            <th>FULL NAME</th>
                            <th>REGISTRATION DATE</th>
                            <th>FACULTY</th>
                            <th>Topshirgan joyi</th>

                            <th>

                            </th>

                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                        <ul class="pgg myTable3_pag mt-3 " id="pagination-demo3">
                            
                            
                            
                            
                            
                        </ul>
                    </aside>
                    <aside>
                        <div class="form-group col-md-3 pt-2 float-right">
                            <input type="" name="acc" class="form-control search">
                        </div>
                        <table id="myTable4" class="tb">
                            <thead>
                            <th>#</th>
                            <th>F.I.O</th>
                            <th>Ariza topshirilgan sana</th>
                            <th>Yo'nalish</th>
                            <th>Topshirgan joyi</th>

                            <th>

                            </th>

                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                        <ul class="pgg myTable4_pag mt-3 " id="pagination-demo4">
                        </ul>
                    </aside>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

    <script type="text/javascript">
        $('.search').on('keypress', function (e) {
            var code = e.keyCode || e.which;
            var nomi = $(this).attr('name');
            if (code == 13) {
                var data = $(this).val();
                if ($(this).attr('name') == 'all') {
                    var url = '/search-all/' + data;
                    var table = '#myTable1';
                    var pag = '#pagination-demo1';
                    if ($(this).val() == '') {
                        if ($(pag).data("twbs-pagination")) {
                            $(pag).twbsPagination('destroy');
                        }
                        get_all_totable('<?php echo e(route('get_all_totable')); ?>');
                    }
                }
                if ($(this).attr('name') == 'acc') {
                    var url = '/search-acc/' + data;
                    var table = '#myTable4';
                    var pag = '#pagination-demo4';
                    if ($(this).val() == '') {
                        if ($(pag).data("twbs-pagination")) {
                            $(pag).twbsPagination('destroy');
                        }
                        get_acc_totable('<?php echo e(route('get_acc_totable')); ?>');
                    }
                }
                if ($(this).attr('name') == 'wait') {
                    var url = '/search-wait/' + data;
                    var table = '#myTable2';
                    var pag = '#pagination-demo2';
                    if ($(this).val() == '') {
                        if ($(pag).data("twbs-pagination")) {
                            $(pag).twbsPagination('destroy');
                        }
                        get_wait_totable('<?php echo e(route('get_wait_totable')); ?>');
                    }
                }
                if ($(this).attr('name') == 'return') {
                    var url = '/search-return/' + data;
                    var table = '#myTable3';
                    var pag = '#pagination-demo3';
                    if ($(this).val() == '') {
                        if ($(pag).data("twbs-pagination")) {
                            $(pag).twbsPagination('destroy');
                        }
                        get_return_totable('<?php echo e(route('get_return_totable')); ?>');
                    }
                }
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (result) {
                        var pets = JSON.parse(result);
                        console.log(pets);
                        var tbody = '';
                        var name_l = 'name_' + '<?php echo e(App::getLocale()); ?>';
                        var i = 1;
                        $.each(pets.data, function (key, value) {
                            <?php if(Auth::user()->role == 3): ?>
                                tbody = tbody + '<tr class="href_tr" href="/applications-show/' + value['id'] + '"><td>' + i + '</td><td>' + value['last_name'] + ' ' + value['first_name'] + ' ' + value['middle_name'] + '</td><td>' + value['created_at'] + '</td><td>' + value[name_l] + '</td></td><td>' + value['hg_name_uz'] + '</td><td>' + value['email'] + '</td></tr>';
                            <?php else: ?>
                                tbody = tbody + '<tr class="href_tr" href="/applications-show/' + value['id'] + '"><td>' + i + '</td><td>' + value['last_name'] + ' ' + value['first_name'] + ' ' + value['middle_name'] + '</td><td>' + value['created_at'] + '</td><td>' + value[name_l] + '</td><td>' + value['hg_name_uz'] + '</td></tr>';
                            <?php endif; ?>
                                $newtab = '<td><button></button></td>';
                            i++;

                        });
                        var page = '<li class="page-item"><a class="page-link" href="#">Previous</a></li>';
                        for (var i = 1; i <= pets.last_page; i++) {
                            page = page + '<li class="page-item"><a onclick="return chichi(' + i + ')" class="page-link">' + i + '</a></li>';
                        }
                        page = page + '<li class="page-item"><a class="page-link" href="#">Next</a></li>';
                        // $('.myTable1_pag').html(page);
                        if ($(pag).data("twbs-pagination")) {
                            $(pag).twbsPagination('destroy');
                        }
                        $(table + ' tbody').html(tbody);
                        $(pag).twbsPagination({
                            totalPages: pets.last_page,
                            visiblePages: 10,
                            onPageClick: function (event, page) {
                                if (nomi == 'all') {
                                    chichi_search(data, page);
                                }
                                if (nomi == 'wait') {
                                    chichi2_search(data, page);
                                }
                                if (nomi == 'return') {
                                    chichi3_search(data, page);
                                }
                                if (nomi == 'acc') {
                                    chichi4_search(data, page);
                                }
                            }
                        });
                    }
                });
            }
        });
    </script>

    <script type="text/javascript">
        function all_app_count() {
            var url = '<?php echo e(route('all_app_count')); ?>';
            $.ajax({
                url: url,
                type: 'GET',
                success: function (result) {
                    $('.all_count').html(result);
                }
            });
        }

        function acc_app_count() {
            var url = '<?php echo e(route('acc_app_count')); ?>';
            $.ajax({
                url: url,
                type: 'GET',
                success: function (result) {
                    $('.accepted_count').html(result);
                }
            });
        }

        function return_app_count() {
            var url = '<?php echo e(route('return_app_count')); ?>';
            $.ajax({
                url: url,
                type: 'GET',
                success: function (result) {
                    $('.return_count').html(result);
                }
            });
        }

        function wait_app_count() {
            var url = '<?php echo e(route('wait_app_count')); ?>';
            $.ajax({
                url: url,
                type: 'GET',
                success: function (result) {
                    $('.wait_count').html(result);
                }
            });
        }

        function get_all_totable(url) {
            // var url = '<?php echo e(route('get_all_totable')); ?>';
            $.ajax({
                url: url,
                type: 'GET',
                success: function (result) {
                    var pets = JSON.parse(result);
                    console.log(pets);
                    var tbody = '';
                    var name_l = 'name_' + '<?php echo e(App::getLocale()); ?>';
                    var i = 1;
                    $.each(pets.data, function (key, value) {

                        tbody = tbody + '<tr class="href_tr" href="/applications-show/' + value['id'] + '"><td>' + i + '</td><td>' + value['last_name'] + ' ' + value['first_name'] + ' ' + value['middle_name'] + '</td><td>' + value['created_at'] + '</td><td>' + value[name_l] + '</td><td>' + value['hg_name_uz'] + '</td><td>' + value['email'] + '</td></tr>';

                        $newtab = '<td><button></button></td>';
                        i++;

                    });
                    var page = '<li class="page-item"><a class="page-link" href="#">Previous</a></li>';
                    for (var i = 1; i <= pets.last_page; i++) {
                        page = page + '<li class="page-item"><a onclick="return chichi(' + i + ')" class="page-link">' + i + '</a></li>';
                    }
                    page = page + '<li class="page-item"><a class="page-link" href="#">Next</a></li>';
                    // $('.myTable1_pag').html(page);
                    $('#myTable1 tbody').html(tbody);

                    $('#pagination-demo1').twbsPagination({
                        totalPages: pets.last_page,
                        visiblePages: 10,
                        onPageClick: function (event, page) {
                            chichi(page);
                            // alert(page);
                            // $('#page-content').text('Page ' + page);
                        }
                    });
                    // $('#myTable1').DataTable().destroy();
                    //  $('#myTable1').DataTable();


                }
            });
        }

        function get_acc_totable(url) {
            // var url = '<?php echo e(route('get_acc_totable')); ?>';
            $.ajax({
                url: url,
                type: 'GET',
                success: function (result) {
                    var pets = JSON.parse(result);
                    var tbody = '';
                    var name_l = 'name_' + '<?php echo e(App::getLocale()); ?>';
                    var i = 1;
                    $.each(pets.data, function (key, value) {

                        tbody = tbody + '<tr class="href_tr" href="/applications-show/' + value['id'] + '"><td>' + i + '</td><td>' + value['last_name'] + ' ' + value['first_name'] + ' ' + value['middle_name'] + '</td><td>' + value['created_at'] + '</td><td>' + value[name_l] + '</td><td>' + value['hg_name_uz'] + '</td><td>' + value['email'] + '</td></tr>';

                        i++;
                    });
                    var page = '<li class="page-item"><a class="page-link" href="#">Previous</a></li>';
                    for (var i = 1; i <= pets.last_page; i++) {
                        page = page + '<li class="page-item"><a onclick="return chichi(' + i + ')" class="page-link">' + i + '</a></li>';
                    }
                    page = page + '<li class="page-item"><a class="page-link" href="#">Next</a></li>';
                    $('#myTable4 tbody').html(tbody);
                    $('#myTable4 tbody').html(tbody);
                    $('#pagination-demo4').twbsPagination({
                        totalPages: pets.last_page,
                        visiblePages: 10,
                        onPageClick: function (event, page) {
                            chichi4(page);
                            // alert(page);
                            // $('#page-content').text('Page ' + page);
                        }
                    });
                    // $('#myTable4').DataTable().destroy();
                    //  $('#myTable4').DataTable();


                }
            });
        }

        function get_return_totable(url) {
            // var url = '<?php echo e(route('get_return_totable')); ?>';
            $.ajax({
                url: url,
                type: 'GET',
                success: function (result) {
                    var pets = JSON.parse(result);
                    var tbody = '';
                    var name_l = 'name_' + '<?php echo e(App::getLocale()); ?>';
                    var i = 1;
                    $.each(pets.data, function (key, value) {

                        tbody = tbody + '<tr class="href_tr" href="/applications-show/' + value['id'] + '"><td>' + i + '</td><td>' + value['last_name'] + ' ' + value['first_name'] + ' ' + value['middle_name'] + '</td><td>' + value['created_at'] + '</td><td>' + value[name_l] + '</td><td>' + value['hg_name_uz'] + '</td><td>' + value['email'] + '</td></tr>';

                        i++;
                    });
                    var page = '<li class="page-item"><a class="page-link" href="#">Previous</a></li>';
                    for (var i = 1; i <= pets.last_page; i++) {
                        page = page + '<li class="page-item"><a onclick="return chichi(' + i + ')" class="page-link">' + i + '</a></li>';
                    }
                    page = page + '<li class="page-item"><a class="page-link" href="#">Next</a></li>';
                    $('#myTable3 tbody').html(tbody);
                    $('#pagination-demo3').twbsPagination({
                        totalPages: pets.last_page,
                        visiblePages: 10,
                        onPageClick: function (event, page) {
                            chichi3(page);
                            // alert(page);
                            // $('#page-content').text('Page ' + page);
                        }
                    });
                    // $('#myTable3').DataTable().destroy();

                    //  $('#myTable3').DataTable();


                }
            });
        }

        function get_wait_totable(url) {
            // var url = '<?php echo e(route('get_wait_totable')); ?>';
            $.ajax({
                url: url,
                type: 'GET',
                success: function (result) {
                    var pets = JSON.parse(result);
                    var tbody = '';
                    var name_l = 'name_' + '<?php echo e(App::getLocale()); ?>';
                    var i = 1;
                    $.each(pets.data, function (key, value) {

                        tbody = tbody + '<tr class="href_tr" href="/applications-show/' + value['id'] + '"><td>' + i + '</td><td>' + value['last_name'] + ' ' + value['first_name'] + ' ' + value['middle_name'] + '</td><td>' + value['created_at'] + '</td><td>' + value[name_l] + '</td><td>' + value['hg_name_uz'] + '</td><td>' + value['email'] + '</td></tr>';

                        i++;
                    });
                    var page = '<li class="page-item"><a class="page-link" href="#">Previous</a></li>';
                    for (var i = 1; i <= pets.last_page; i++) {
                        page = page + '<li class="page-item"><a onclick="return chichi(' + i + ')" class="page-link">' + i + '</a></li>';
                    }
                    page = page + '<li class="page-item"><a class="page-link" href="#">Next</a></li>';
                    $('#myTable2 tbody').html(tbody);
                    $('#pagination-demo2').twbsPagination({
                        totalPages: pets.last_page,
                        visiblePages: 10,
                        onPageClick: function (event, page) {
                            chichi2(page);
                            // alert(page);
                            // $('#page-content').text('Page ' + page);
                        }
                    });
                    // $('#myTable2').DataTable().destroy();
                    //  $('#myTable2').DataTable();


                }
            });
        }


        function downloadURI(uri, name) {
            var link = document.createElement("a");
            link.download = name;
            link.href = uri;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            delete link;
        }

        function chichi(id) {
            // alert(id);
            var url = '/get_all_totable?page=' + id;
            get_all_totable(url);
        }

        function chichi4(id) {
            // alert(id);
            var url = '/get_acc_totable?page=' + id;
            get_acc_totable(url);
        }

        function chichi2(id) {
            // alert(id);
            var url = '/get_wait_totable?page=' + id;
            get_wait_totable(url);
        }

        function chichi3(id) {
            // alert(id);
            var url = '/get_return_totable?page=' + id;
            get_return_totable(url);
        }

        function chichi_search(tekst, id) {
            // alert(id);
            var url = '/search-all/' + tekst + '?page=' + id;
            get_all_totable(url);
        }

        function chichi4_search(tekst, id) {
            // alert(id);
            var url = '/search-acc/' + tekst + '?page=' + id;
            get_acc_totable(url);
        }

        function chichi2_search(tekst, id) {
            // alert(id);
            var url = '/search-wait/' + tekst + '?page=' + id;
            get_wait_totable(url);
        }

        function chichi3_search(tekst, id) {
            // alert(id);
            var url = '/search-return/' + tekst + '?page=' + id;
            get_return_totable(url);
        }
    </script>

    <script type="text/javascript">
        all_app_count();
        acc_app_count();
        return_app_count();
        wait_app_count();
        get_all_totable('<?php echo e(route('get_all_totable')); ?>');
        // get_all_totable('<?php echo e(route('get_all_totable')); ?>');

        get_wait_totable('<?php echo e(route('get_wait_totable')); ?>');

        get_return_totable('<?php echo e(route('get_return_totable')); ?>');

        get_acc_totable('<?php echo e(route('get_acc_totable')); ?>');

        // $('#pagination-demo').pagination({
        //     items: 518,
        //     itemOnPage: 10,
        //     currentPage: 1,
        //     cssStyle: '',
        //     prevText: '<span aria-hidden="true">&laquo;</span>',
        //     nextText: '<span aria-hidden="true">&raquo;</span>',
        //     onInit: function () {
        //         // fire first page loading

        //     },
        //     onPageClick: function (page, evt) {
        //         // some code
        //         chichi(page);
        //     }
        // });
        // $('.page-link').click(function(){
        // 	// var url = $(this).attr('dd-href');
        // 	alert("sdsdsd");
        // 	// get_all_totable(url);
        // });
        $('.all_pet').click(function (event) {
            // get_all_totable('<?php echo e(route('get_all_totable')); ?>');
            var pdf = $(this).attr('pdf-url');
            $('.export_pdf').attr('href', pdf);
        });
        $('.wait_pet').click(function (event) {
            // get_wait_totable('<?php echo e(route('get_wait_totable')); ?>');
            var pdf = $(this).attr('pdf-url');
            $('.export_pdf').attr('href', pdf);
        });
        $('.return_pet').click(function (event) {
            // get_return_totable('<?php echo e(route('get_return_totable')); ?>');
            var pdf = $(this).attr('pdf-url');
            $('.export_pdf').attr('href', pdf);
        });
        $('.acc_pet').click(function (event) {
            // get_acc_totable( '<?php echo e(route('get_acc_totable')); ?>');
            var pdf = $(this).attr('pdf-url');
            $('.export_pdf').attr('href', pdf);
        });


        $('.tb').on('click', 'tbody tr', function () {
            var url = $(this).attr('href');
            window.open(url, '_blank');
        });

        // $('.export_pdf').click(function(){
        // 	window.location.href = $(this).attr('dhref');
        // 	// var url = $(this).attr('dhref');
        // 	// $.ajax({
        // 	// 	url: url,
        // 	// 	type: 'GET',
        // 	// 	success:function(result){
        // 	// 		var kkk = '/kkk/'+result;
        // 	// 		window.location.href = kkk;
        // 	// 	}
        // 	// });
        // });


    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\github_clone\qabul2024_tsul\resources\views/admin/pages/petition/new_index.blade.php ENDPATH**/ ?>
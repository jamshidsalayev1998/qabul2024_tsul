
<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $locale = App::getLocale(); $name_l = 'name_'.$locale; ?>
<style type="text/css">

</style>
<style>
.loader {
  border: 8px solid #f3f3f3;
  border-radius: 50%;
  border-top: 8px solid #3498db;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes  spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<div class="endi_done">
                <div class="test_done"></div>

                <div class="all_padd">
                    
                    <?php echo csrf_field(); ?>

                    <div class="message">
                        <div class="text">
                            <textarea name="sms_text" class="sms_text" placeholder="Message..." id="" cols="30" rows="15"></textarea>
                        </div>
                        <div class="check">
                            <div class="left">
                                <span class="item">
                                    <input type="radio" name="who" value="3" checked id="">
                                    <b>TO ALL</b>
                                </span>
                                <span class="item">
                                    <input type="radio" name="who" value="2" id="">
                                    <b>ACCEPTED</b>
                                </span>
                                <span class="item">
                                    <input type="radio" name="who" value="1" id="">
                                    <b>REJECTED</b>
                                </span>
                            </div>
                            <div class="right">
                                <h6>0 / 1000</h6>
                            </div>
                        </div>
                        <div class="bottom">
                            <button  class="send send_ajax" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                                SEND
                            </button>

                        </div>
                    </div>
                
               
	             

                <div class="row p-3">
                        <div class="col-md-12">
                            <?php if(isset($send)): ?>
                                <?php if($send == 1): ?>
                                    <?php echo e($umumiy); ?> ta raqamga jo`natildi
                                <?php endif; ?>
                                <br>
                                <?php if(!empty($errors)): ?>
                                Xatoliklar:
                                <?php endif; ?>
                                <br>
                                <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($e); ?>

                                <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

            </div>



            <div class="modal fade cl_modal" id="myModal">
			    <div class="modal-dialog">
			      <div class="modal-content">

			        <!-- Modal Header -->
			        <div class="modal-header">
			        	<p style="color: red;">
			        		Jo`ntish mobaynida boshqa sahifaga o`tmang saytdan chiqib ketmang jo`natish yakunlanmagunicha kutishingizni so`raymiz!
			        	</p><br>
			          <h4 class="modal-title">

			          	<div class="row">
			          		<div class="col-md-6">

			          		</div>
			          		<div class="col-md-6">

			          		</div>
			          	</div>
			          </h4>
			          
			        </div>

			        <!-- Modal body -->
			        <div class="modal-body">
			         <div class="row">
			         	<div class="col-md-12 text-center">

			         		<div class="loaderr col-md-3 ml-auto mr-auto text-center">
			         			<div class="loader ml-auto mr-auto"></div>
			         		</div>
			         	</div>
			         	<div class="col-md-12 mt-3 text-center">
			         		<span class="count">0</span>
			         	</div>
			         	<div class="col-md-12 mt-3 ">
			         		Xatoliklar:
			         	</div>
			         	<div class="col-md-12 mt-3 errors">

			         	</div>
			         </div>

			        </div>

			        <!-- Modal footer -->
			        <div class="modal-footer">
			          <a type="button" href="<?php echo e(route('admin.messages')); ?>" hidden  class="btn btn-danger m_close"  >Yopish</a>
			        </div>

			      </div>
			    </div>
			  </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
$('.send_ajax').click(function(){

	var url = '<?php echo e(route('admin.send.sms.ajax')); ?>';
	var token = $('input[name="_token"]').val();
	var text = $('.sms_text').val();
	var type = $('input[name="who"]:checked').val();
	console.log(type);
	if (text !=  '') {
	$.ajax({
			url: url,
			type: 'POST',
			data: {
				'who': type ,
				'sms_text': text,
				'_token': token,
				'part':'0',
			},
			success: function(result){
				var result = JSON.parse(result);
				console.log(result);
				var e = $('.errors').html();
				if (result['error'].length > 0) {
					e = e + '#error: ' + result['error'] + '<br>' + ' #soni:' + result['ketmagan'] + '<br>';
					$('.errors').html(e);
				}
				part_two();
				$('.count').html(result['count']);

			}

		});

	}
	else{
		$('.m_close').removeAttr('hidden');
			$('.ss').html('');
			$('.loaderr').html('');
			$('.count').html('Matn kiritilmagan qaytadan urinib ko\'ring');
	}



})
function part_two(){
	var url = '<?php echo e(route('admin.send.sms.ajax')); ?>';
	var token = $('input[name="_token"]').val();
	var type = $('input[name="who"]:checked').val();
	var text = $('.sms_text').val();
	$.ajax({
		url: url,
		type: 'POST',
		data: {
			'who': type ,
			'sms_text': text,
			'_token': token,
			'part':'1',
		},
		success: function(result){
			var result = JSON.parse(result);
			console.log(result);
			var tt = $('.count').html();
			var tp = parseInt(tt);
			tp = tp+parseInt(result['count']);
			$('.count').html(tp);
			var e = $('.errors').html();
			if (result['error'].length > 0) {
				e = e + '#error: ' + result['error'] + '<br>' + ' #soni:' + result['ketmagan'] + '<br>';
				$('.errors').html(e);
			}
			part_three();

		}

	});
}
function part_three(){
	var url = '<?php echo e(route('admin.send.sms.ajax')); ?>';
	var token = $('input[name="_token"]').val();
	var type = $('input[name="who"]:checked').val();
	var text = $('.sms_text').val();
	$.ajax({
		url: url,
		type: 'POST',
		data: {
			'who': type ,
			'sms_text': text,
			'_token': token,
			'part':'2',
		},
		success: function(result){
			var result = JSON.parse(result);
			console.log(result);
			var tt = $('.count').html();
			var tp = parseInt(tt);
			tp = tp+parseInt(result['count']);
			$('.count').html(tp);
			var e = $('.errors').html();
			if (result['error'].length > 0) {
				e = e + '#error: ' + result['error'] + '<br>' + ' #soni:' + result['ketmagan'] + '<br>';
				$('.errors').html(e);
			}
			part_four();
		}

	});
}
function part_four(){
	var url = '<?php echo e(route('admin.send.sms.ajax')); ?>';
	var token = $('input[name="_token"]').val();
	var type = $('input[name="who"]:checked').val();
	var text = $('.sms_text').val();
	$.ajax({
		url: url,
		type: 'POST',
		data: {
			'who': type ,
			'sms_text': text,
			'_token': token,
			'part':'3',
		},
		success: function(result){
			var result = JSON.parse(result);
			console.log(result);
			var tt = $('.count').html();
			var tp = parseInt(tt);
			tp = tp+parseInt(result['count']);
			$('.count').html(tp);
			var e = $('.errors').html();
			if (result['error'].length > 0) {
				e = e + '#error: ' + result['error'] + '<br>' + ' #soni:' + result['ketmagan'] + '<br>';
				$('.errors').html(e);
			}
			part_five();
		}

	});
}
function part_five(){
	var url = '<?php echo e(route('admin.send.sms.ajax')); ?>';
	var token = $('input[name="_token"]').val();
	var type = $('input[name="who"]:checked').val();
	var text = $('.sms_text').val();
	$.ajax({
		url: url,
		type: 'POST',
		data: {
			'who': type ,
			'sms_text': text,
			'_token': token,
			'part':'4',
		},
		success: function(result){
			var result = JSON.parse(result);
			console.log(result);
			var tt = $('.count').html();
			var tp = parseInt(tt);
			tp = tp+parseInt(result['count']);
			$('.count').html(tp);
			var e = $('.errors').html();
			if (result['error'].length > 0) {
				e = e + '#error: ' + result['error'] + '<br>' + ' #soni:' + result['ketmagan'] + '<br>';
				$('.errors').html(e);
			}
			part_six();
		}

	});
}
function part_six(){
	var url = '<?php echo e(route('admin.send.sms.ajax')); ?>';
	var token = $('input[name="_token"]').val();
	var type = $('input[name="who"]:checked').val();
	var text = $('.sms_text').val();
	$.ajax({
		url: url,
		type: 'POST',
		data: {
			'who': type ,
			'sms_text': text,
			'_token': token,
			'part':'5',
		},
		success: function(result){
			var result = JSON.parse(result);
			console.log(result);
			var tt = $('.count').html();
			var tp = parseInt(tt);
			tp = tp+parseInt(result['count']);
			$('.count').html(tp);
			var e = $('.errors').html();
			if (result['error'].length > 0) {
				e = e + '#error: ' + result['error'] + '<br>' + ' #soni:' + result['ketmagan'] + '<br>';
				$('.errors').html(e);
			}
			part_seven();
		}

	});
}
function part_seven(){
	var url = '<?php echo e(route('admin.send.sms.ajax')); ?>';
	var token = $('input[name="_token"]').val();
	var type = $('input[name="who"]:checked').val();
	var text = $('.sms_text').val();
	$.ajax({
		url: url,
		type: 'POST',
		data: {
			'who': type ,
			'sms_text': text,
			'_token': token,
			'part':'6',
		},
		success: function(result){
			var result = JSON.parse(result);
			console.log(result);
			var tt = $('.count').html();
			var tp = parseInt(tt);
			tp = tp+parseInt(result['count']);
			$('.count').html(tp);
			var e = $('.errors').html();
			if (result['error'].length > 0) {
				e = e + '#error: ' + result['error'] + '<br>' + ' #soni:' + result['ketmagan'] + '<br>';
				$('.errors').html(e);
			}
			part_eight();
		}

	});
}
function part_eight(){
	var url = '<?php echo e(route('admin.send.sms.ajax')); ?>';
	var token = $('input[name="_token"]').val();
	var type = $('input[name="who"]:checked').val();
	var text = $('.sms_text').val();
	$.ajax({
		url: url,
		type: 'POST',
		data: {
			'who': type ,
			'sms_text': text,
			'_token': token,
			'part':'7',
		},
		success: function(result){
			var result = JSON.parse(result);
			console.log(result);
			var tt = $('.count').html();
			var tp = parseInt(tt);
			tp = tp+parseInt(result['count']);
			var e = $('.errors').html();
			if (result['error'].length > 0) {
				e = e + '#error: ' + result['error'] + '<br>' + ' #soni:' + result['ketmagan'] + '<br>';
				$('.errors').html(e);
			}
			$('.count').html(tp);
			$('.m_close').removeAttr('hidden');
			$('.ss').html('Sended');
			$('.loaderr').html('');
			$('.loaderr').html('<i style="color:green;" class="fa fa-check"></i>');
		}

	});
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tsul/domains/qabul2023.tsul.uz/public_html/resources/views/admin/pages/messages/index.blade.php ENDPATH**/ ?>
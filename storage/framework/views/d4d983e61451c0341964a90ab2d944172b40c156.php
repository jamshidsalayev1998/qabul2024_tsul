<form class="iwla<?php echo e($item->id); ?>" action="<?php echo e(route('high_school.update' , ['id' => $item->id])); ?>" method="post">
  <?php echo csrf_field(); ?>
  <?php echo method_field('put'); ?>
<div class="modal fade" id="edit_modal<?php echo e($item->id); ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Talim tashkilotini o`zgartirish</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->

        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-8 ml-auto mr-auto">
                <div class="form-group">
                  <label>Uz</label>
                  <input type="text" class="form-control" name="name_uz" value="<?php echo e($item->name_uz); ?>" required>
                </div>
              </div>
              <div class="col-md-8 ml-auto mr-auto">
                <div class="form-group">
                  <label>En</label>
                  <input type="text" class="form-control" value="<?php echo e($item->name_en); ?>" name="name_en" required>
                </div>
              </div>
              <div class="col-md-8 ml-auto mr-auto">
                <div class="form-group">
                  <label>Ru</label>
                  <input type="text" class="form-control" name="name_ru" value="<?php echo e($item->name_ru); ?>" required>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success ddd<?php echo e($item->id); ?>" >Saqlash</button>
        </div>

      </div>
    </div>
  </div>
</form>
<?php /**PATH D:\github_clone\qabul2024_tsul\resources\views/superadmin/pages/datas/high_school/edit.blade.php ENDPATH**/ ?>
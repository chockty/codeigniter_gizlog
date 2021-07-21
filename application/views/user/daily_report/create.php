<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
		<?php echo form_open('report'); ?>
      <div class="form-group form-size-small <? if (form_error('reporting_time')) : ?> has-error <? endif; ?>">
				<input type="date" name="reporting_time" class="form-control" value="<? echo set_value('reporting_time') ?>">
        <? if (form_error('reporting_time')) : ?>
          <span class="help-block"><?php echo form_error('reporting_time'); ?></span>
				<? endif; ?>
      </div>
      <div class="form-group <? if (form_error('title')) : ?> has-error <? endif; ?>">
				<input type="text" name="title" class="form-control" value="<? echo set_value('title') ?>" placeholder="Title">
				<? if (form_error('title')) : ?>
          <span class="help-block"><?php echo form_error('title'); ?></span>
				<? endif; ?>
      </div>
      <div class="form-group <? if (form_error('content')) : ?> has-error <? endif; ?>">
				<textarea name="content" placeholder="Content" class="form-control" cols="50" rows="10"><? echo set_value('content') ?></textarea>
				<? if (form_error('content')) : ?>
          <span class="help-block"><?php echo form_error('content'); ?></span>
				<? endif; ?>
      </div>
			<input type="submit" name="submit" value="Add" class="btn btn-success pull-right">
  </div>
</div>

<h1 class="brand-header">日報編集</h1>
<div class="main-wrap">
  <div class="container">
    <?php echo form_open('report/'. $daily_report['id']); ?>
      <div class="form-group form-size-small <? if (form_error('reporting_time')) : ?> has-error <? endif; ?>">
        <? echo form_input(['name' => 'date', 'value' => nice_date($daily_report['reporting_time'], 'Y-m-d'), 'type' => 'date', 'name' => 'reporting_time', 'class' => 'form-control']) ?>
        <? if (form_error('reporting_time')) : ?>
          <span class="help-block"><?php echo form_error('reporting_time'); ?></span>
        <? endif; ?>
      </div>
      <div class="form-group <? if (form_error('title')) : ?> has-error <? endif; ?>">
        <? echo form_input('title', $daily_report['title'], ['name' => 'title','class' => 'form-control']) ?>
        <? if (form_error('title')) : ?>
          <span class="help-block"><?php echo form_error('title'); ?></span>
        <? endif; ?>
      </div>
      <div class="form-group <? if (form_error('content')) : ?> has-error <? endif; ?>">
        <? echo form_textarea('content', $daily_report['content'], ['name' => 'content','class' => 'form-control', 'placeholder' => 'Content', 'cols' => '50', 'rows' => '10']) ?>
        <? if (form_error('content')) : ?>
          <span class="help-block"><?php echo form_error('content'); ?></span>
        <? endif; ?>
      </div>
      <? echo form_submit('submit', 'update', ['type' => 'submit', 'class' => 'btn btn-success pull-right']) ?>
    <?= form_close() ?>
  </div>
</div>

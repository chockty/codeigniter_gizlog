<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
		<?php echo form_open('report/create'); ?>
      <div class="form-group form-size-small">
				<input type="date" name="reporting_time" class="form-control" value="">
        <!-- {!! Form::date('reporting_time', date('Y-m-d'), ['class' => 'form-control']) !!} -->
        <!-- @if ($errors->has('reporting_time'))
          <span class="help-block">{{ $errors->first('reporting_time') }}</span>
        @endif -->
      </div>
      <div class="form-group">
				<input type="text" name="title" class="form-control" value="" placeholder="Title">
        <!-- {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!} -->
        <!-- @if ($errors->has('title'))
          <span class="help-block">{{ $errors->first('title') }}</span>
        @endif -->
      </div>
      <div class="form-group">
				<textarea name="content" placeholder="Content" cols="50" rows="10"></textarea>
        <!-- {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Content', 'cols' => '50', 'rows' => '10']) !!}
        @if ($errors->has('content'))
          <span class="help-block">{{ $errors->first('content') }}</span>
        @endif -->
      </div>
			<input type="button" value="submit" class="btn btn-success pull-right">
      <!-- {!! Form::button('Add', ['type' => 'submit', 'class' => 'btn btn-success pull-right']) !!} -->
    <!-- {!! Form::close() !!} -->
  </div>
</div>

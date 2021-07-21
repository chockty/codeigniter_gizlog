<h2 class="brand-header">日報一覧</h2>
<div class="main-wrap">
  <div class="btn-wrapper daily-report">
		<? echo form_open('report/index',['method' => 'get']) ?>
     <!-- {!! Form::open(['route' => 'report.index', 'method' => 'GET']) !!} -->
		 <? echo form_input('date', ['name' => 'reporting_time','class' => 'form-control']) ?>
      <!-- {!! Form::month('reporting_time', $date, ['class' => 'form-control']) !!} -->
			<? echo form_button('submit', '<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'btn btn-icon']) ?>
      <!-- {!! Form::button('<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'btn btn-icon']) !!} -->
    <a class="btn btn-icon" href="<? echo site_url('report/create') ?>"><i class="fa fa-plus"></i></a>
  </div>
  <div class="content-wrapper table-responsive">
    <table class="table table-striped">
      <thead>
        <tr class="row">
          <th class="col-xs-2">Date</th>
          <th class="col-xs-3">Title</th>
          <th class="col-xs-5">Content</th>
          <th class="col-xs-2"></th>
        </tr>
      </thead>
      <tbody>
        <!-- @foreach ($dailyReports as $dailyReport) -->
          <!-- <tr class="row">
            <td class="col-xs-2">{{ $dailyReport->reporting_time->format('m/d (D)') }}</td>
            <td class="col-xs-3">{!! e(str_limit($dailyReport->title, 30)) !!}</td>
            <td class="col-xs-5">{!! e(str_limit($dailyReport->title, 50)) !!}</td>
            <td class="col-xs-2"><a class="btn" href="{{ route('report.edit', $dailyReport->id ) }}"><i class="fa fa-book"></i></a></td>
          </tr> -->
        <!-- @endforeach -->
      </tbody>
    </table>
    <div class="text-center">
      <!-- {{ $dailyReports->appends(request()->query())->links() }} -->
    </div>
  </div>
</div>

<h1 class="brand-header">日報詳細</h1>
<div class="main-wrap">
  <div class="panel panel-success">
    <div class="panel-heading">
			<? echo html_escape(nice_date($daily_report['reporting_time'], 'Y-m-d')) ?>&nbsp;の日報
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <tbody>
          <tr>
            <th class="table-column">Title</th>
            <td class="td-text"><? echo html_escape(nl2br_except_pre($daily_report['title'])) ?></td>
          </tr>
          <tr>
            <th class="table-column">Content</th>
            <td class='td-text'><? echo html_escape($daily_report['content']) ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="btn-bottom-wrapper">
    <a class="btn btn-edit" href="{{ route('report.edit', $dailyReport->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <div class="btn-delete">
			<!-- 削除機能は後ほど -->
      <!-- {!! Form::open(['route' => ['report.destroy', $dailyReport->id], 'method' => 'DELETE']) !!}
        {!! Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
      {!! Form::close() !!} -->
    </div>
  </div>
</div>

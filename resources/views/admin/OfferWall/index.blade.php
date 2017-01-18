@extends('admin.layout')
@section('css')
<link href="{!!url('public/assets/plugins/jquery-datatable/css/jquery.dataTables.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!!url('public/assets/plugins/datatables-responsive/css/datatables.responsive.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{!!url('public/assets/css/switchery.min.css')!!}" rel="stylesheet" type="text/css" media="screen"/>

@stop
@section('content')
<a href="{!!route('admin.offerwall.create')!!}"><button type="button" class="btn btn-primary">Add OfferWall</button></a><p></p>
@if (session('status'))
<div class="alert alert-{{session('class')}}">
	<button data-dismiss="alert" class="close"></button>
	Success: {{ session('status') }}                               
</div>
@endif 
<div class="row-fluid">
	<div class="span12">
		<div class="grid simple ">
			<div class="grid-title">
				<h4>List <span class="semi-bold">Network</span></h4>
			</div>
			<div class="grid-body ">
				<table class="table table-hover table-condensed" id="example">
					<thead>
						<tr>
							<th style="width:1%">#</th>
							<th style="width:10%">Name</th>
							<th style="width:10%" data-hide="phone,tablet">Iframe</th>
							<th style="width:10%" data-hide="phone,tablet">SecretKey</th>
							<th style="width:10%">DailyPoint</th>
							<th style="width:5%">Status</th>
							<th style="width:12%">Action</th>
						</tr>
					</thead>
					<tbody>
					@if(isset($offerWalls))
					@foreach ($offerWalls as $offerWall)
						<tr>
							<td class="v-align-middle">{!!$offerWall->id!!}</td>
							<td class="v-align-middle">{!!$offerWall->network!!}</td>
							<td class="v-align-middle">{!!$offerWall->iframe!!}</td>
							<td class="v-align-middle">{!!$offerWall->secretKey!!}</td>
							<td class="v-align-middle">{!!$offerWall->dailypoint!!}</td>
							<td class="v-align-middle">
								<input type="checkbox" class="js-switch" checked />
							</td>
							<td>
								<a href="{!!route('admin.offerwall.edit',$offerWall->id)!!}" class="btn btn-small btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								<a href="#" onclick="event.preventDefault(); $('.delete_{!!$offerWall->id!!}').submit()" class="btn btn-small btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
								<form action="{!!route('admin.offerwall.destroy',$offerWall->id)!!}" method="POST" class="delete_{!!$offerWall->id!!}" style="display: none">
									{!!csrf_field()!!}
									{!!method_field('DELETE')!!}
									<input type="hidden" name="network" value="{!!$offerWall->network!!}">
									<button type="submit" class="btn btn-small btn-danger">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
					@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
<script src="{!!url('public/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js')!!}" type="text/javascript" ></script>
<script src="{!!url('public/assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js')!!}" type="text/javascript" ></script>
<script src="{!!url('public/assets/plugins/datatables-responsive/js/datatables.responsive.js')!!}" type="text/javascript" ></script>
<script src="{!!url('public/assets/plugins/datatables-responsive/js/lodash.min.js')!!}" type="text/javascript" ></script>
<script src="{!!url('public/assets/js/datatables.js')!!}" type="text/javascript" ></script>
<script src="{!!url('public/assets/js/switchery.min.js')!!}" type="text/javascript" ></script>
<script>
	// Switchery
$(document).ready(function() {
    if ($(".js-switch")[0]) {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                color: '#26B99A',
                size:'small'
            });
        });
    }
});
// /Switchery
</script>
@stop
@extends('admin.layout')
@section('css')
<link href="{!!url('public/assets/plugins/jquery-datatable/css/jquery.dataTables.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!!url('public/assets/plugins/datatables-responsive/css/datatables.responsive.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{!!url('public/assets/css/switchery.min.css')!!}" rel="stylesheet" type="text/css" media="screen"/>

@stop
@section('content')
<a href="{!!route('admin.offer.create',$subOffer)!!}"><button type="button" class="btn btn-primary">Add Offer</button></a><p></p>
@if (session('status'))
<div class="alert alert-{{session('class')}}">
	<button data-dismiss="alert" class="close"></button>
	Success: {{ session('status') }}                               
</div>
@endif 
<div class="row-fluid">
	<div class="span10">
		<div class="grid simple ">
			<div class="grid-title">
				<h4>List <span class="semi-bold">Offers</span></h4>
			</div>
			<div class="grid-body ">
				<table class="table table-hover table-condensed" id="example">
					<thead>
						<tr>
							<th data-hide="phone,tablet">#</th>
							<th>ID</th>
							<th>Name</th>
							<th data-hide="phone">Point</th>
							<th data-hide="phone,tablet">PayOut</th>
							<th data-hide="phone,tablet">Rate</th>
							<th data-hide="phone">DailyCap</th>
							<th data-hide="phone">Country</th>
							<th data-hide="phone">Network</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@if(isset($offers))
					@foreach ($offers as $offer)
						<tr>
							<td class="v-align-middle">{!!$offer->id!!}</td>
							<td class="v-align-middle">{!!$offer->off_id!!}</td>
							<td class="v-align-middle">{!!$offer->off_name!!}</td>
							<td class="v-align-middle">{!!$offer->point!!}</td>
							<td class="v-align-middle">{!!$offer->payout!!}</td>
							<td class="v-align-middle">{!!$offer->rate!!}</td>
							<td class="v-align-middle">{!!$offer->dailycap!!}</td>
							<td class="v-align-middle">{!!trim($offer->country,",")!!}</td>
							<td class="v-align-middle">{!!ucfirst($offer->network->networkname)!!}</td>
							<td class="v-align-middle">
								<input type="checkbox" class="js-switch" checked />
							</td>
							<td>
								<a href="{!!route('admin.offer.edit',[$subOffer,$offer->id])!!}" class="btn btn-small btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								<a href="#" onclick="event.preventDefault(); $('.delete_{!!$offer->id!!}').submit()" class="btn btn-small btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
								<form action="{!!route('admin.offer.destroy',[$subOffer,$offer->id])!!}" method="POST" class="delete_{!!$offer->id!!}" style="display: none">
									{!!csrf_field()!!}
									{!!method_field('DELETE')!!}
									<input type="hidden" name="offername" value="{!!$offer->off_name!!}">
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
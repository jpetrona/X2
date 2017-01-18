@extends('admin.layout')
@section('css')
<link href="{!!url('public/assets/plugins/jquery-datatable/css/jquery.dataTables.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!!url('public/assets/plugins/datatables-responsive/css/datatables.responsive.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{!!url('public/assets/css/switchery.min.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
@stop
@section('content')
<a href="{!!route('admin.members.create')!!}"><button type="button" class="btn btn-primary">Add Member</button></a><p></p>
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
				<h4>List <span class="semi-bold">Members</span></h4>
			</div>
			<div class="grid-body ">
				<table class="table table-hover table-condensed" id="example">
					<thead>
						<tr>
							<th>#</th>
							<th data-hide="phone,tablet">Fullname</th>
							<th>Username</th>
							<th data-hide="phone,tablet">Email</th>
							<th data-hide="phone,tablet">Group</th>
							<th data-hide="phone,tablet">Clone</th>
							<th data-hide="phone,tablet">Point</th>
							<th data-hide="phone,tablet">Active</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@if(isset($users))
					@foreach ($users as $user)
						<tr >
							<td class="v-align-middle">{!!$user->id!!}</td>
							<td class="v-align-middle">{!!$user->fullname!!}</td>
							<td class="v-align-middle">{!!$user->username!!}</td>
							<td class="v-align-middle">{!!$user->email!!}</td>
							<td class="v-align-middle">{!!$user->groupname!!}</td>
							<td class="v-align-middle">{!!count($user->usersTemp)!!}</td>
							<td class="v-align-middle">{!!$user->point!!}</td>
							<td class="v-align-middle">
							@if($user->active==1)
							<button type="button" data="{!!$user->active!!}" class="btn btn-small btn-success active"><i class="fa fa-check" aria-hidden="true"></i></button>
							@else
							<button type="button" data="{!!$user->active!!}" class="btn btn-small btn-danger active"><i class="fa fa-remove" aria-hidden="true"></i></button>
							@endif
							</td>
							<td class="v-align-middle"><input type="checkbox" name="status" class="js-switch" checked /></td>
							<td>
								<a href="{!!route('admin.members.edit',$user->id)!!}" class="btn btn-small btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								<a href="#" onclick="event.preventDefault(); $('.delete_{!!$user->id!!}').submit()" class="btn btn-small btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
								<form action="{!!route('admin.members.destroy',$user->id)!!}" method="POST" class="delete_{!!$user->id!!}" style="display: none">
									{!!csrf_field()!!}
									{!!method_field('DELETE')!!}
									<input type="hidden" name="username" value="{!!$user->username!!}">
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
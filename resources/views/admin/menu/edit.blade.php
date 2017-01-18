@extends('admin.layout')
@section('content')
<div class="row">
	<div class="col-md-12">
	<div class="grid simple vertical green">
		<div class="grid-title no-border">
              <h4><span class="semi-bold">Edit Menu Banner</span></h4>
            </div>
		<div class="grid-body no-border">
	        <div class="row-fluid">
	        <div class="col-md-8">
				<form action="{!!route('admin.menu.update',$menu->id)!!}" method="POST" id="form_iconic_validation" role="form">
					{!!csrf_field()!!}
					{!!method_field('PUT')!!}
					<div class="form-group">						
	                        <label class="form-label">Menu Name</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="name" class="form-control" value="{!!$menu->name!!}">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">Icon</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="icon" value="{!!$menu->icon!!}" class="form-control">
								</div>
							</div>
                    </div>				
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</form>
				</div>
	        </div>
        </div>

	</div>
	</div>
</div>
@stop
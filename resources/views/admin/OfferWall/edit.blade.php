@extends('admin.layout')
@section('content')
<div class="row">
	<div class="col-md-12">
	<div class="grid simple vertical green">
		<div class="grid-title no-border">
              <h4><span class="semi-bold">Edit OfferWall</span></h4>
            </div>
		<div class="grid-body no-border">
	        <div class="row-fluid">
	        <div class="col-md-8">
				<form action="{!!route('admin.offerwall.update',$offerWall->id)!!}" method="POST" id="form_iconic_validation" role="form">
					{!!csrf_field()!!}
					{!!method_field('PUT')!!}
					<div class="form-group">						
	                        <label class="form-label">Network Name</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="network" value="{!!$offerWall->network!!}" class="form-control">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">Iframe</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<textarea name="iframe" class="form-control" rows="10">{!!$offerWall->iframe!!}</textarea>

								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">SecretKey</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="secretkey" value="{!!$offerWall->secretKey!!}" class="form-control">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">DailyPoint</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="dailypoint" value="{!!$offerWall->dailypoint!!}" class="form-control">
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
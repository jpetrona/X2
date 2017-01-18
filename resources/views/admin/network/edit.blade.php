@extends('admin.layout')
@section('content')
<div class="row">
	<div class="col-md-12">
	<div class="grid simple vertical green">
		<div class="grid-title no-border">
              <h4><span class="semi-bold">Add New Network</span></h4>
            </div>
		<div class="grid-body no-border">
	        <div class="row-fluid">
	        <div class="col-md-8">
				<form action="{!!route('admin.network.update',$network->id)!!}" method="POST" id="form_iconic_validation" role="form">
					{!!csrf_field()!!}
					{!!method_field('PUT')!!}
					<div class="form-group">						
	                        <label class="form-label">Network Name</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="networkname" value="{!!$network->networkname!!}" class="form-control">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">Network ID</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="networkid" value="{!!$network->networkid!!}"  class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">API</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="api" value="{!!$network->api!!}" class="form-control">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">Aff Sub</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="aff_sub" value="{!!$network->aff_sub!!}" class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Rate</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="rate" value="{!!$network->rate!!}"  class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Postback</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="postback" value="{!!$network->postback!!}" class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Flatform</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<select name="platform" class="form-control" required="required">
										<option value="hasoffer" {!!($network->platform=="hasoffers")?"selected":""!!} >HasOffer</option>
										<option value="adworkmedia" {!!($network->platform=="adworkmedia")?"selected":""!!} >Adworkmedia</option>
										<option value="afftrack" {!!($network->platform=="afftrack")?"selected":""!!} >Afftrack</option>
										<option value="khac" {!!($network->platform=="khac")?"selected":""!!} >#</option>
									</select>
								</div>
							</div>
                    </div>			
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Submit</button>
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
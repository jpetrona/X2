@extends('admin.layout')
@section('css')
<link href="{!!url('public/assets/plugins/jquery-notifications/css/messenger.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{!!url('public/assets/plugins/jquery-notifications/css/messenger-theme-flat.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
<link href="{!!url('public/assets/css/jquery.tokenize.css')!!}" rel="stylesheet" type="text/css" media="screen"/>

@stop
@section('content')
<div class="row">
	<div class="col-md-12">
	<div class="grid simple vertical green">
		<div class="grid-title no-border">
              <h4><span class="semi-bold">Add New Offer</span></h4>
            </div>           
		<div class="grid-body no-border">
	        <div class="row-fluid">
	        <div class="col-md-8">
				<form action="{!!route('admin.offer.index',$subOffer)!!}" method="POST" id="form_iconic_validation" role="form">
					{!!csrf_field()!!}
					<div class="form-group">						
	                        <label class="form-label">Offer Name</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="offername" value="{!!old('offername')!!}" class="form-control">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">Offer ID</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="offerid" value="{!!old('offerid')!!}" class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Tracking</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="tracking" value="{!!old('tracking')!!}" class="form-control">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">Image</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="image" value="{!!old('image')!!}" class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Description</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<textarea name="description" rows="3" class="form-control" >{!!old('description')!!}</textarea>
								</div>
							</div>
                    </div>
          			<div class="form-group">						
	                        <label class="form-label">PayOut</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="payout" value="{!!old('payout')!!}" class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">
		                        <div class="checkbox check-success">
								   <input type="checkbox" checked id="checkbox">
								   <label for="checkbox">Default Rate</label>
								</div>
							</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="rate" disabled value="{!!old('rate')!!}" class="form-control">
								</div>
							</div>
                    </div>

                    <div class="form-group">						
	                        <label class="form-label">Country</label>
	                        <div class="control">
									@include('admin.country')
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Network</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<select name="network" class="form-control" required="required">
									@foreach ($network as $net)
										<option value="{!!$net->id!!}">{!!$net->networkname!!}</option>
									@endforeach										
									</select>
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">DailyCap</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="dailycap" value="{!!old('dailycap')!!}" class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Postback</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="postback" value="{!!old('postback')!!}" class="form-control">
								</div>
							</div>
                    </div>
			
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="button" class="btn btn-primary">Get Offer</button>
							<button type="button" class="btn btn-primary" data-hide="phone,tablet">Request Offer</button>
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
@section('script')
<script src="{!!url('public/assets/plugins/jquery-notifications/js/messenger.min.js')!!}" type="text/javascript"></script>
<script src="{!!url('public/assets/plugins/jquery-notifications/js/messenger-theme-future.js')!!}" type="text/javascript"></script>
<script src="{!!url('public/assets/plugins/jquery-notifications/js/demo/demo.js')!!}" type="text/javascript"></script>
<script src="{!!url('public/assets/js/jquery.tokenize.js')!!}" type="text/javascript"></script>
<script>
	$('#tokenize').tokenize({displayDropdownOnFocus:true,autosize:true});
</script>
<script>
function showErrorMessage(msg){
 Messenger().post({
	message: msg,
	type: 'error',
    showCloseButton: true
	});
}
$("#checkbox").change(function(){
	if($(this).is(":checked")){
		$("input[name=rate]").attr("disabled", "false");
	}else{
		$("input[name=rate]").removeAttr("disabled");
	}
});
</script>
 @foreach ($errors->all() as $error) 
	<script>
		showErrorMessage("{!!$error!!}");
	</script>
@endforeach
@stop
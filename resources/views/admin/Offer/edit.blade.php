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
              <h4><span class="semi-bold">Edit Offer</span></h4>
            </div>           
		<div class="grid-body no-border">
	        <div class="row-fluid">
	        <div class="col-md-8">
				<form action="{!!route('admin.offer.update',[$subOffer,$offer->id])!!}" method="POST" id="form_iconic_validation" role="form">
					{!!csrf_field()!!}
					{!!method_field('PUT')!!}
					<div class="form-group">						
	                        <label class="form-label">Offer Name</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="offername" value="{!!($offer->off_name)?$offer->off_name:old('offername')!!}" class="form-control">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">Offer ID</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="offerid" value="{!!($offer->off_id)?$offer->off_id:old('offerid')!!}" class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Tracking</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="tracking" value="{!!($offer->tracking)?$offer->tracking:old('tracking')!!}" class="form-control">
								</div>
							</div>
                    </div>	
                    <div class="form-group">						
	                        <label class="form-label">Image</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="image" value="{!!($offer->img_link)?$offer->img_link:old('image')!!}" class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Description</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<textarea name="description" rows="5" class="form-control" >{!!($offer->des)?$offer->des:old('description')!!}</textarea>
								</div>
							</div>
                    </div>
          			<div class="form-group">						
	                        <label class="form-label">Point</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<input type="text" name="point" value="{!!($offer->point)?$offer->point:old('point')!!}" class="form-control">
								</div>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Country</label>
	                        <div class="control">									
									<?php $countries=DB::table('country')->get();?>
									<select id="tokenize" multiple="multiple" name="country[]" class="tokenize-sample">
									<option value="ALL">ALL</option>
									@foreach ($countries as $country)
										<option value="{!!$country->code!!}" {!!(strpos($offer->country,$country->code)>0)?"selected":""!!}>{!!$country->name!!}</option>
									@endforeach
									
									</select>
							</div>
                    </div>
                    <div class="form-group">						
	                        <label class="form-label">Network</label>
	                        <div class="control">
								<div class="input-with-icon  right">                                     
									<i class=""></i>
									<select name="network" class="form-control" required="required">
									<?php $network=DB::table('network')->get();?>
									@foreach ($network as $net)
										<option value="{!!$net->id!!}" {!!($net->id==$offer->menu_id)?"selected":""!!}>{!!$net->networkname!!}</option>
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
									<input type="text" name="dailycap" value="{!!($offer->dailycap)?$offer->dailycap:old('dailycap')!!}" class="form-control">
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
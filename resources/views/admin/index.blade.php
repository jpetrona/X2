@extends('admin.layout')
@section('css')
{{-- <link rel="stylesheet" href="{!!url('public/assets/plugins/jquery-morris-chart/css/morris.css')!!}" type="text/css" media="screen"> --}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

@stop
@section('content')
	 <div class="row">	 
		<div class="col-md-4 col-vlg-3 col-sm-6">
			<div class="tiles green m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">TODAY </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
						<span class="item-title">Users</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">0</span>
					  </div>
                    </div>

                    <div class="widget-stats">
                      <div class="wrapper transparent">
						<span class="item-title">Leads</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">0</span> 
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper transparent"> 
						<span class="item-title">Clicks</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span> 
					 </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
						<span class="item-title">Point</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span> 
					 </div>
                    </div>
			  </div>			
			</div>	
	
		</div>

		<div class="col-md-4 col-vlg-3 col-sm-6">
			<div class="tiles blue  m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">MONTH </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
						<span class="item-title">Users</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">0</span>
					  </div>
                    </div>

                    <div class="widget-stats">
                      <div class="wrapper transparent">
						<span class="item-title">Leads</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">0</span> 
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper transparent"> 
						<span class="item-title">Clicks</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span> 
					 </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
						<span class="item-title">Point</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span> 
					 </div>
                    </div>
			  </div>			
			</div>	
	
		</div>

		<div class="col-md-4 col-vlg-3 col-sm-6">
			<div class="tiles purple  m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">TOTAL </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
						<span class="item-title">Users</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">0</span>
					  </div>
                    </div>

                    <div class="widget-stats">
                      <div class="wrapper transparent">
						<span class="item-title">Leads</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">0</span> 
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper transparent"> 
						<span class="item-title">Clicks</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span> 
					 </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
						<span class="item-title">Point</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">0</span> 
					 </div>
                    </div>
			  </div>			
			</div>	
	
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="grid simple">
		        <div class="grid-title no-border">
		          <h4>Last <span class="semi-bold">7 days</span></h4>
		        </div>
			    <div class="grid-body no-border">
					<div id="area-example" style="height: 257px;"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="grid simple">
		        <div class="grid-title no-border">
		          <h4>TopLead <span class="semi-bold">Today</span></h4>
		        </div>
			    <div class="grid-body no-border">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Point</th>
								<th>Lead</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="grid simple">
		        <div class="grid-title no-border">
		          <h4><span class="semi-bold">Statistic</span></h4>
		        </div>
			    <div class="grid-body no-border">
					<div class="panel-group" id="accordion" data-toggle="collapse">
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				   TOP MEMBERS TODAY 
				</a>
			  </h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse">
			  <div class="panel-body">
				 Click headers to expand/collapse content that is broken into logical sections, much like tabs. Optionally, toggle sections open/closed on mouseover. 
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion"  href="#collapseTwo">
				  TOP MEMBERS MONTH 
				</a>
			  </h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse">
			  <div class="panel-body">				
                  <h1 class="light">go explore the <span class="semi-bold">world</span></h1>
                  <h4>small things in life matters the most</h4>
                  <h2>Big Heading <span class="semi-bold">Body</span>, <i>Variations</i> </h2>
                  <h4><span class="semi-bold">Open Me</span>, Light , <span class="semi-bold">Bold</span> , <i>Everything</i></h4>
                  <p> is the art and technique of arranging type in order to make language visible. The arrangement of type involves the selection of typefaces, point size, line length, leading (line spacing), adjusting the spaces between groups of letters (tracking) </p>
                  <p>and adjusting the Case space between pairs of letters (kerning). Type design is a closely related craft, which some consider distinct and others a part of typography</p>
                
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				 TOP OFFERS MONTH
				</a>
			  </h4>
			</div>
			<div id="collapseThree" class="panel-collapse collapse">
			  <div class="panel-body">
				 Click headers to expand/collapse content that is broken into logical sections, much like tabs. Optionally, toggle sections open/closed on mouseover. 
			  </div>
			</div>
		  </div>
		</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('script')
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
{{-- <script src="{!!url('public/assets/plugins/jquery-morris-chart/js/morris.min.js')!!}"></script> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
	Morris.Area({
	  element: 'area-example',
	  data: [
		{ y: '{!!date('d/m',strtotime('-7 days'))!!}', a: 100, b: 90 },
		{ y: '{!!date('d/m',strtotime('-6 days'))!!}', a: 100, b: 90 },
		{ y: '{!!date('d/m',strtotime('-5 days'))!!}', a: 75,  b: 65 },
		{ y: '{!!date('d/m',strtotime('-4 days'))!!}', a: 50,  b: 40 },
		{ y: '{!!date('d/m',strtotime('-3 days'))!!}', a: 75,  b: 65 },
		{ y: '{!!date('d/m',strtotime('-2 days'))!!}', a: 50,  b: 40 },
		{ y: '{!!date('d/m',strtotime('-1 days'))!!}', a: 75,  b: 65 },
	  ],
	  xkey: 'y',
	  parseTime: false,
	  ykeys: ['a', 'b'],
	  labels: ['Clicks', 'Leads'],
	  lineColors:['#0090d9','red'],
	  lineWidth:'0',
	   grid:'false',
	  fillOpacity:'0.5'
	});
</script>
@stop
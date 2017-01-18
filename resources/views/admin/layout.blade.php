<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>System Maketing</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="" name="description" />
<meta content="" name="author" />
    
<!-- BEGIN PLUGIN CSS -->
<link href="{!!url('public/assets/plugins/pace/pace-theme-flash.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="{!!url('public/assets/plugins/boostrapv3/css/bootstrap.min.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!!url('public/assets/plugins/boostrapv3/css/bootstrap-theme.min.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!!url('public/assets/plugins/font-awesome/css/font-awesome.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!!url('public/assets/css/animate.min.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!!url('public/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')!!}" rel="stylesheet" type="text/css"/>
@yield('css')

<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="{!!url('public/assets/css/style.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!!url('public/assets/css/responsive.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!!url('public/assets/css/custom-icon-set.css')!!}" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse "> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
	<div class="header-seperation"> 
		<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
		 <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
		</ul>
      <!-- BEGIN LOGO -->	
      <a href="index.html"><img src="{!!url('public/assets/img/logo.png')!!}" class="logo" alt=""  data-src="{!!url('public/assets/img/logo.png')!!}" data-src-retina="assets/img/logo2x.png" width="106" height="21"/></a>
      <!-- END LOGO --> 
      <ul class="nav pull-right notifcation-center">	
        <li class="dropdown" id="header_task_bar"> <a href="index.html" class="dropdown-toggle active" data-toggle=""> <div class="iconset top-home"></div> </a> </li>
        <li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" > <div class="iconset top-messages"></div>  <span class="badge" id="msgs-badge">2</span> </a></li>
		<li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div> </a> </li>        
      </ul>
      </div>
      <!-- END RESPONSIVE MENU TOGGLER --> 
      <div class="header-quick-nav" > 
      <!-- BEGIN TOP NAVIGATION MENU -->
	  <div class="pull-left"> 
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>

	  </div>
	 <!-- END TOP NAVIGATION MENU -->
	 <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right"> 
		<div class="chat-toggler">	
				<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">
					<div class="user-details"> 
						<div class="username">
							<span class="badge badge-important">3</span> 
							John <span class="bold">Smith</span>									
						</div>						
					</div> 
					<div class="iconset top-down-arrow"></div>
				</a>	
				<div id="notification-list" style="display:none">
					<div style="width:300px">
						  <div class="notification-messages info">
									<div class="user-profile">
										<img src="{!!url('public/assets/img/profiles/d.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/d.jpg')!!}" data-src-retina="{!!url('assets/img/profiles/d2x.jpg')!!}" width="35" height="35">
									</div>
									<div class="message-wrapper">
										<div class="heading">
											David Nester - Commented on your wall
										</div>
										<div class="description">
											Meeting postponed to tomorrow
										</div>
										<div class="date pull-left">
										A min ago
										</div>										
									</div>
									<div class="clearfix"></div>									
								</div>	
							<div class="notification-messages danger">
								<div class="iconholder">
									<i class="icon-warning-sign"></i>
								</div>
								<div class="message-wrapper">
									<div class="heading">
										Server load limited
									</div>
									<div class="description">
										Database server has reached its daily capicity
									</div>
									<div class="date pull-left">
									2 mins ago
									</div>
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="notification-messages success">
								<div class="user-profile">
									<img src="{!!url('public/assets/img/profiles/h.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/h.jpg')!!}" data-src-retina="{!!url('public/assets/img/profiles/h2x.jpg')!!}" width="35" height="35">
								</div>
								<div class="message-wrapper">
									<div class="heading">
										You haveve got 150 messages
									</div>
									<div class="description">
										150 newly unread messages in your inbox
									</div>
									<div class="date pull-left">
									An hour ago
									</div>									
								</div>
								<div class="clearfix"></div>
							</div>							
						</div>				
				</div>
				<div class="profile-pic"> 
					<img src="{!!url('public/assets/img/profiles/avatar_small.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/avatar_small.jpg')!!}" data-src-retina="{!!url('public/assets/img/profiles/avatar_small2x.jpg')!!}" width="35" height="35" /> 
				</div>       			
			</div>
		 <ul class="nav quick-section ">
			<li class="quicklinks"> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">						
					<div class="iconset top-settings-dark "></div> 	
				</a>
				<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li><a href="user-profile.html"> My Account</a>
                  </li>
                  <li><a href="calender.html">My Calendar</a>
                  </li>
                  <li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a>
                  </li>
                  <li class="divider"></li>                
                  <li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
               </ul>
			</li> 
			<li class="quicklinks"> <span class="h-seperate"></span></li> 
			<li class="quicklinks"> 	
			<a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle" ><i class="fa fa-wifi"></i>
			</a> 
				<div class="simple-chat-popup chat-menu-toggle hide" >
					<div class="simple-chat-popup-arrow"></div><div class="simple-chat-popup-inner">
						 <div style="width:100px">
						 <div class="semi-bold">David Nester</div>
						 <div class="message">Hey you there </div>
						</div>
					</div>
				</div>
			</li> 
		</ul>
      </div>
	   <!-- END CHAT TOGGLER -->
      </div> 
      <!-- END TOP NAVIGATION MENU --> 
   
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu"> 
  <!-- BEGIN MINI-PROFILE -->
   <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper"> 
   <div class="user-info-wrapper">	
	<div class="profile-wrapper">
		<img src="{!!url('public/assets/img/profiles/avatar.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/avatar.jpg')!!}" data-src-retina="{!!url('public/assets/img/profiles/avatar2x.jpg')!!}" width="69" height="69" />
	</div>
    <div class="user-info">
    <br/>
	<br/>
      <div class="status">Welcome<a href="#"><div class="status-icon green"></div>Admin</a></div>
      <br>
    </div>
   </div>
  <!-- END MINI-PROFILE -->
   
   <!-- BEGIN SIDEBAR MENU -->	
	
    <ul>	
      <li class="start {!!($active=='home')?'active':''!!}"><a href="{!!route('admin.home')!!}"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span></a> </li>
	   <li class="{!!($active=='offer')?'active':''!!}"> <a href="javascript:;"> <i class="fa fa fa-adjust"></i> <span class="title">Offers</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <?php $menuBanners=DB::table('menu_banner')->get(); ?>
          @foreach ($menuBanners as $menu)
            <li class="{!!(isset($subOffer) && $subOffer==$menu->id)?"active":""!!}"> <a href="http://x2.dev/admin/offer/{!!strtolower($menu->id)!!}" ><i class="{!!$menu->icon!!}"></i> {!!ucfirst($menu->name)!!} </a> </li>
          @endforeach
        </ul>
	  </li>    
	  <li class="{!!($active=='offerwall')?'active':''!!}"> 
    <a href="{!!route('admin.offerwall.index')!!}">
      <i class="fa fa-file-text"></i> <span class="title">OfferWall</span>
    </a>
    </li>     
	  <li class="{!!($active=='network')?'active':''!!}"> <a href="{!!route('admin.network.index')!!}"> <i class="fa fa-globe"></i> <span class="title">Network</span></a></li>     
	  <li class="{!!($active=='menu')?'active':''!!}"> <a href="{!!route('admin.menu.index')!!}"> <i class="fa fa-bars"></i> <span class="title">Menu</span></a></li>     
	  <li class=""> <a href="{!!route('admin.members.index')!!}"> <i class="fa fa-user"></i> <span class="title">Members</span></a></li>     
	  <li class=""> <a href="admin/invoices"> <i class="fa fa-money"></i> <span class="title">Invoices</span></a></li>     
	  <li class=""> <a href="admin/check"> <i class="fa fa-search"></i> <span class="title">Check</span></a></li>     
      <li class=""> <a href="javascript:;"> <i class="fa fa-area-chart"></i> <span class="title">Reports</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
		  <li > <a href="typography.html"> Typography </a> </li>
		  <li > <a href="messages_notifications.html"> Messages & Notifications </a> </li>
		   <li > <a href="icons.html">Icons</a> </li>
		   <li > <a href="buttons.html">Buttons</a> </li>		 
          <li > <a href="tabs_accordian.html"> Tabs & Accordions </a> </li>
          <li > <a href="sliders.html">Sliders</a> </li>
          <li > <a href="group_list.html">Group list </a> </li>
        </ul>
      </li>
	  <li class=""> <a href="admin/setting"> <i class="fa fa-cogs"></i> <span class="title">Setting</span></a></li>
	  <li class=""> <a href="admin/backup"> <i class="fa fa-database"></i> <span class="title">Backup</span></a></li>
      
    </ul>
	<p class="menu-title"></p>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
		<div class="details-status">
		<span data-animation-duration="560" data-value="86" class="animate-number"></span>%
	</div>	
	<a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
  </div>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content"> 
    @yield('content') 
    </div>
  </div>
<!-- BEGIN CHAT --> 
<div class="chat-window-wrapper">
	<div id="main-chat-wrapper" class="inner-content">
        <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users" >
            <div class="chat-header">	
            <div class="pull-left">
                <input type="text" placeholder="search">
            </div>		
                <div class="pull-right">
                    <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
                </div>			
            </div>	
            <div class="side-widget">
               <div class="side-widget-title">group chats</div>
                <div class="side-widget-content">
                 <div id="groups-list">
                    <ul class="groups" >
                        <li><a href="#"><div class="status-icon green"></div>Office work</a></li>
                        <li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="side-widget fadeIn">
               <div class="side-widget-title">favourites</div>
               <div id="favourites-list">
                <div class="side-widget-content" >
                    <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="{!!url('public/assets/img/profiles/d.jpg')!!}" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile">
                            <img src="{!!url('public/assets/img/profiles/d.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/d.jpg')!!}" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            Jane Smith
                            </div>
                            <div class="user-more">
                            Hello you there?
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <span class="badge badge-important">3</span>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>	
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="{!!url('public/assets/img/profiles/d.jpg')!!}" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile">
                            <img src="{!!url('public/assets/img/profiles/c.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/c.jpg')!!}" data-src-retina="{!!url('public/assets/img/profiles/c2x.jpg')!!}" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            David Nester
                            </div>
                            <div class="user-more">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>					
                </div>
                </div>
            </div>
            <div class="side-widget">
               <div class="side-widget-title">more friends</div>
                 <div class="side-widget-content" id="friends-list">
                    <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="{!!url('public/assets/img/profiles/d.jpg')!!}" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile">
                            <img src="{!!url('public/assets/img/profiles/d.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/d.jpg')!!}" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            Jane Smith
                            </div>
                            <div class="user-more">
                            Hello you there?
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">

                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>	
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="{!!url('public/assets/img/profiles/d.jpg')!!}" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile">
                            <img src="{!!url('public/assets/img/profiles/h.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/h.jpg')!!}" data-src-retina="{!!url('public/assets/img/profiles/h2x.jpg')!!}" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            David Nester
                            </div>
                            <div class="user-more">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>		
                    <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="{!!url('public/assets/img/profiles/d.jpg')!!}" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile">
                            <img src="{!!url('public/assets/img/profiles/c.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/c.jpg')!!}" data-src-retina="{!!url('public/assets/img/profiles/c2x.jpg')!!}" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            Jane Smith
                            </div>
                            <div class="user-more">
                            Hello you there?
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">

                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>	
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="{!!url('public/assets/img/profiles/d.jpg')!!}" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile">
                            <img src="{!!url('public/assets/img/profiles/h.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/h.jpg')!!}" data-src-retina="{!!url('public/assets/img/profiles/h2x.jpg')!!}" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            David Nester
                            </div>
                            <div class="user-more">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>				
                </div>		
            </div>
        </div>

        <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
        <div class="chat-header">	
            <div class="pull-left">
                <input type="text" placeholder="search">
            </div>		
                <div class="pull-right">
                    <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
                </div>					
            </div>
        <div class="clearfix"></div>	
        <div class="chat-messages-header">
        <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
        <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
        </div>
        <div class="chat-messages scrollbar-dynamic clearfix">
            <div class="inner-scroll-content clearfix">
            <div class="sent_time">Yesterday 11:25pm</div>
            <div class="user-details-wrapper " >
                <div class="user-profile">
                    <img src="{!!url('public/assets/img/profiles/d.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/d.jpg')!!}" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="bubble">	
                        Hello, You there?
                   </div>
                </div>					
                <div class="clearfix"></div>
               <div class="sent_time off">Yesterday 11:25pm</div>
            </div>		
            <div class="user-details-wrapper ">
                <div class="user-profile">
                    <img src="{!!url('public/assets/img/profiles/d.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/d.jpg')!!}" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="bubble">	
                        How was the meeting?
                   </div>
                </div>					
                <div class="clearfix"></div>
                <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="user-details-wrapper ">
                <div class="user-profile">
                    <img src="{!!url('public/assets/img/profiles/d.jpg')!!}"  alt="" data-src="{!!url('public/assets/img/profiles/d.jpg')!!}" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="bubble">	
                        Let me know when you free
                   </div>
                </div>					
                <div class="clearfix"></div>
                <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="sent_time ">Today 11:25pm</div>
            <div class="user-details-wrapper pull-right">
                <div class="user-details">
                  <div class="bubble sender">	
                        Let me know when you free
                   </div>
                </div>					
                <div class="clearfix"></div>
                <div class="sent_time off">Sent On Tue, 2:45pm</div>
            </div>		
        </div>
        </div>
        <div class="chat-input-wrapper" style="display:none">
            <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- END CHAT --> 
 </div>
<!-- END CONTAINER --> 

<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="{!!url('public/assets/plugins/jquery-1.8.3.min.js')!!}" type="text/javascript"></script> 
<script src="{!!url('public/assets/plugins/boostrapv3/js/bootstrap.min.js')!!}" type="text/javascript"></script> 
<script src="{!!url('public/assets/plugins/breakpoints.js')!!}" type="text/javascript"></script> 
<script src="{!!url('public/assets/plugins/jquery-unveil/jquery.unveil.min.js')!!}" type="text/javascript"></script> 
<script src="{!!url('public/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')!!}" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS --> 
<script src="{!!url('public/assets/plugins/pace/pace.min.js')!!}" type="text/javascript"></script>  
<script src="{!!url('public/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')!!}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS --> 	

<!-- BEGIN CORE TEMPLATE JS --> 
<script src="{!!url('public/assets/js/core.js')!!}" type="text/javascript"></script> 
<script src="{!!url('public/assets/js/chat.js')!!}" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS --> 
@yield('script')
</body>
</html>
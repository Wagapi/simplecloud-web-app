<!DOCTYPE html> 
<html> 
	<head> 
	<title>Wagapi</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"> 
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

	
	<link rel="stylesheet" href="lib/jquery-ui/1.8.16/custom/ui-lightness/jquery-ui-1.8.16.custom.css" />
	<link rel="stylesheet" href="lib/jquery.mobile/1.0/jquery.mobile-1.0.min.css" />
	<link rel="stylesheet" href="lib/simpledialog/jquery.mobile.simpledialog.min.css" />
	
	<link rel="stylesheet" href="css/enhanced.css" />
	<link rel="stylesheet" href="lib/blueimp/jquery.fileupload-ui.css">
	<link href="lib/code.photoswipe-3.0.4/3.0.4/photoswipe.css" type="text/css" rel="stylesheet" />
	<style>
	.ui-autocomplete-loading { background: white url('/wgp/css/ui-anim_basic_16x16.gif') right center no-repeat; }
	.ui-bar, .ui-body {padding-right: 0px; padding-left: 0px;}
	.miniatures {
		float:left;
		border:none;
		max-width:150px;
		display: block;
		margin: 15px;
	}
	.image-title{
		white-space: nowrap;
		width: 100%;
		overflow: hidden;
		text-overflow: ellipsis;	
	}
	.img-detail{
		max-width : 300px;
		max-height : 300px;
	}
	</style>	



	<script type="text/javascript" src="lib/jquery/1.7.1/jquery-1.7.1.min.js"></script>
	
	
	<!--[if lt IE 9]>
	
	<script type="text/javascript" src="js/ie.fix.js" ></script>	
	<![endif]-->
	
	<script type="text/javascript" src="lib/jQuery-tmpl/jquery.tmpl.min.js" ></script>	
	<script type="text/javascript" src="lib/jquery-ui/1.8.16/custom/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="lib/jquery.mobile/1.0/jquery.mobile-1.0.min.js"></script>
	<script src="js/json2.js" type="text/javascript"></script>
	<script src="js/w_scr.js" type="text/javascript"></script>	
	<script src="js/mobile.wgp.js" type="text/javascript"></script>
	
	<!--[if IE]>
	<link rel="stylesheet" href="/wgp/modules/uploadify-v3.1/uploadify.css" />
	<script type="text/javascript" src="/wgp/modules/uploadify-v3.1/jquery.uploadify-3.1.min.js"></script>
	<![endif]-->

	<!--[if !IE]> -->
	<script src="lib/jQuery-fileinput/jQuery.fileinput.js"></script>
	<script src="lib/blueimp/jquery.iframe-transport.js"></script>
	<script src="lib/blueimp/jquery.xdr-transport.js"></script>
	<script src="lib/blueimp/jquery.fileupload.js"></script>
	<script src="lib/blueimp/jquery.fileupload-ui.js"></script>
	<script src="lib/blueimp/application.js"></script>
	<!-- <![endif]-->
	<script type="text/javascript" src="lib/simpledialog/jquery.mobile.simpledialog.min.js"></script>
	<script type="text/javascript" src="lib/code.photoswipe-3.0.4/3.0.4/lib/klass.min.js"></script>
	<script type="text/javascript" src="lib/code.photoswipe-3.0.4/3.0.4/code.photoswipe.jquery-3.0.4.min.js"></script>	

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/fancybox/2.0.6/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="lib/fancybox/2.0.6/source/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="lib/fancybox/2.0.6/source/jquery.fancybox.pack.js?v=2.0.6"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="lib/fancybox/2.0.6/source/helpers/jquery.fancybox-buttons.css?v=1.0.2" type="text/css" media="screen" />
<script type="text/javascript" src="lib/fancybox/2.0.6/source/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>
<script type="text/javascript" src="lib/fancybox/2.0.6/source/helpers/jquery.fancybox-media.js?v=1.0.0"></script>

<link rel="stylesheet" href="lib/fancybox/2.0.6/source/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="lib/fancybox/2.0.6/source/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>	
	<!-- Script Google Analytics
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-28847893-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	-->		
	
</head> 
<body> 

<!-- Start of first page: #one -->
<div data-role="page" id="loading-box">

	<div data-role="header">
		<h1>Welcome on Wagapi !</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<h3></h3>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed">
		<h4>Copyright (c) 2010-2012 Wagapi</h4>
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- Start of first page: #one -->
<div data-role="page" id="login-box">

	<div data-role="header">
		<h1>Welcome on Wagapi !</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<div style="max-width:500px;margin:auto;">
			<p style="text-align:center;">
				<img src="/wgp/rsc/dgn/mobile.wgp.logo.png" style="max-width:100%">
			</p>
			<div class="message-auth" style="text-align:center; color:red">
			</div>
			<form action="javascript:auth();" method="POST" >
				<fieldset>
						<div data-role="fieldcontain">
							 <label for="user">User</label>
							 <input type="text" name="user" id="user" value="" maxlength="20" autocapitalize="off" autocorrect="off"/>
						</div>
						<div data-role="fieldcontain">
							 <label for="password">Password:</label>
							 <input type="password" name="password" id="password" value="" maxlength="20"/>
						</div>
						<input type="submit" data-theme="a" id="login" value = "Log in">	
		
				</fieldset>
			</form>
			<div style="text-align:center;">
				<a href="/com/c/fr/lost_password.php" data-ajax="false">Password lost ?</a>									
			</div>				
		</div>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed">
		<h4>Copyright (c) 2010-2012 Wagapi - Version 0.55</h4>
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- Start of home-box page: #home-box -->
<div data-role="page" id="home-box">
	
	<div data-role="header" data-position="fixed" data-id="headbar">
		<a href="#bug-box" data-role="button" data-icon="alert" >Report bug</a>	
		<h1><span class="login-val"></span>@wagapi</h1>
		<div data-role="controlgroup" data-type="horizontal" class="ui-btn-right" style="margin:none; top:-2px;">
		<a href="#settings-box" data-role="button" data-icon="gear" >Options</a>
		<a href="javascript:unauth();" data-role="button" data-icon="delete" >Disconnect</a>
		</div>
		<div data-role="navbar">
			<ul>
				<li><a href="#home-box" class="wgp-mail-box ui-btn-active ui-state-persist" data-icon="home">Home</a></li>
				<li><a href="#mail-box" class="wgp-mail-box " data-icon="star">Inbox</a></li>
				<li><a href="#doc-box" class="wgp-doc-box " data-icon="search">Search</a></li>
				<li><a href="#file-box" class="wgp-file-box" data-icon="grid">My Files</a></li>					
			</ul>
		</div><!-- /navbar -->
		
	</div><!-- /header -->

	<div data-role="content" >	

			<h3>Space left</h3>
			<div id="left-space-bar" style="width:50%"></div>
			<div>Your are using <span id="space-used-val"> </span> of your <span id="space-total-val"> </span>. You have <span id="space-left-val"> </span> % of space left.</div>
			<h3>Upload new documents</h3>
			<p>You don't need to check for duplicates. The system will automatically prevent the creation of duplicates in your collection.</p>
		<!--[if !IE]> -->
			<div id="fileupload" class="content-primary" style="overflow:hidden;">
				<form action="/wgp/upload2.php" method="POST" enctype="multipart/form-data">			
					<div class="fileupload-buttonbar" id="fileupload-buttonbar">
						<label class="fileinput-button " data-role="none" >
							<span style="z-index:-1; opacity:0.1" >Select files</span>
							<input type="file" name="files[]" multiple data-inline="true" style="height:100%; z-index:100; opacity:0.1; clip:none; text-align:right; font-size:500px; cursor:pointer; position:absolute; left:-1500px " size="1">
						</label>
					
						<button type="reset" class="cancel" >Cancel upload</button>
					</div>				
				</form>
				<div class="fileupload-content" >
					<table class="files"></table>
					<div class="fileupload-progressbar"></div>
					<div style="text-align:center">Drop your files here - No more than 50 Mb for a single file.</div>
				</div>			
			</div>
		<!-- <![endif]-->
		<!--[if IE]>
				<h3>Adding new files to your collection</h3>
				<p>To upload files, double click on the Select Files button below, select as many as hundreds of documents less than 50MB each. They will be automatically uploaded.</p>
				<form action="upload2.php" method="POST"  id="upload-form">			
					<input type="file" name="files[]" id="plup" >
				</form>	
		<![endif]-->	

	</div><!-- /content -->
	

</div><!-- /page one -->


<!-- ######################################################################################### -->
<!-- Start of mail-box page: #mail-box -->
<div data-role="page" id="mail-box">
	
	<div data-role="header" data-position="fixed" data-id="headbar">
		<a href="#bug-box" data-role="button" data-icon="alert" >Report bug</a>	
		<h1><span class="login-val"></span>@wagapi</h1>
		<div data-role="controlgroup" data-type="horizontal" class="ui-btn-right" style="margin:none; top:-2px;">
		<a href="#settings-box" data-role="button" data-icon="gear" >Options</a>
		<a href="javascript:unauth();" data-role="button" data-icon="delete" >Disconnect</a>
		</div>
		<div data-role="navbar">
			<ul>
				<li><a href="#home-box" class="wgp-mail-box" data-icon="home">Home</a></li>
				<li><a href="#mail-box" class="wgp-mail-box ui-btn-active ui-state-persist" data-icon="star">Inbox</a></li>
				<li><a href="#doc-box" class="wgp-doc-box " data-icon="search">Search</a></li>
				<li><a href="#file-box" class="wgp-file-box" data-icon="grid">My Files</a></li>					
			</ul>
		</div><!-- /navbar -->
		
	</div><!-- /header -->

	<div data-role="content" >	
		<div class="content-primary">
			<ul id ="in-box" data-role="listview" data-theme="c" data-insert="true">	
			</ul>
		</div><!--/content-primary -->	
	</div><!-- /content -->
	

</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- Start of doc-box page: #doc-box -->

<div data-role="page" id="doc-box">

	<div data-role="header" data-position="fixed" data-id="headbar">
	<a href="#bug-box" data-role="button" data-icon="alert" >Report bug</a>	
		<h1><span class="login-val"></span>@wagapi</h1>
		<div data-role="controlgroup" data-type="horizontal" class="ui-btn-right" style="margin:none; top:-2px;">
		<a href="#settings-box" data-role="button" data-icon="gear" >Options</a>
		<a href="javascript:unauth();" data-role="button" data-icon="delete" >Disconnect</a>
		</div>
		<div data-role="navbar">
			<ul>
				<li><a href="#home-box" class="wgp-mail-box" data-icon="home">Home</a></li>
				<li><a href="#mail-box" class="wgp-mail-box" data-icon="star">Inbox</a></li>
				<li><a href="#doc-box" class="wgp-doc-box  ui-btn-active ui-state-persist" data-icon="search">Search</a></li>
				<li><a href="#file-box" class="wgp-file-box" data-icon="grid">My Files</a></li>					
			</ul>
		</div><!-- /navbar -->
	</div><!-- /header -->

	<div data-role="content" >	
		<form id="tag-search" action="void(0);" method="POST">
			<div data-role="fieldcontain">
				<label for="q_tag"></label>
				<input type="text" name="tags" id="q_tag" value="" autocomplete=off />
			</div>
		</form>
		<div>
			<h4>
			<a href="#" data-role="button" data-icon="arrow-r" data-iconpos="right"  id="doc-access-results" data-theme="e">
				<span id="doc-box-results-count"></span> files match your request - Access files
			</a>
			</h4>
			</br>
		</div>
		<div class="content-primary">
			<ul id ="doc-list" data-role="listview" data-theme="c" data-inset="true">	
			</ul>
		</div><!--/content-primary -->	
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed" class="ui-bar">
		<a href="#" data-role="button" data-icon="arrow-r" data-type="horizontal" id="doc-btn-next" >Next</a>
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- Start of doc-box page: #file-box -->

<div data-role="page" id="file-box">

	<div data-role="header" data-position="fixed" data-id="headbar">
		<a href="#bug-box" data-role="button" data-icon="alert" >Report bug</a>	
		<h1><span class="login-val"></span>@wagapi</h1>
		<div data-role="controlgroup" data-type="horizontal" class="ui-btn-right" style="margin:none; top:-2px;">
		<a href="#settings-box" data-role="button" data-icon="gear" >Options</a>
		<a href="javascript:unauth();" data-role="button" data-icon="delete" >Disconnect</a>
		</div>
		<div data-role="navbar">
			<ul>
				<li><a href="#home-box" class="wgp-mail-box" data-icon="home">Home</a></li>
				<li><a href="#mail-box" class="wgp-mail-box" data-icon="star">Inbox</a></li>
				<li><a href="#doc-box" class="wgp-doc-box" data-icon="search">Search</a></li>
				<li><a href="#file-box" class="wgp-file-box ui-btn-active ui-state-persist" data-icon="grid">My Files</a></li>				
			</ul>
		</div><!-- /navbar -->
	</div><!-- /header -->

	<div data-role="content" >	
		<div class="content-primary">
			<ul id ="file-list" class ="display-detail gallery" data-role="listview" data-theme="c" data-insert="true">	
			</ul>
		</div><!--/content-primary -->	
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed" class="ui-bar" >
	<div data-role="controlgroup" data-type="horizontal">
		<a href="#" data-role="button" data-icon="arrow-l" data-type="horizontal" id="file-btn-back" >Prev</a>
		<a href="#" data-role="button" data-icon="arrow-r" data-type="horizontal" id="file-btn-next" >Next</a>
		<a href="#" data-role="button" data-icon="plus" data-type="horizontal" id="file-btn-all" class="doc-select">Select all</a>
		<a href="#" data-role="button" data-icon="minus" data-type="horizontal" id="file-btn-unall" class="doc-select">Deselect all</a>
		<a href="#" data-role="button" data-icon="refresh" data-type="horizontal" id="file-btn-reset">Reset selection</a>
		<a href="#action-box" data-rel="dialog" data-role="button" data-icon="gear" data-type="horizontal" id="file-btn-menu">Actions</a>
		<a href="#" data-role="button" data-icon="home" data-type="horizontal" id="file-btn-home">View all documents</a>
		<a href="#" data-role="button" data-icon="grid" data-type="horizontal" id="file-btn-display">Toggle display</a>
	</div>	
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- Start of doc-box page: #settings-box -->

<div data-role="page" id="settings-box">

	<div data-role="header" data-position="fixed" data-id="headbar">
		<a href="#" data-role="button" data-icon="delete" data-rel="back" data-iconpos="notext" ></a>	
		<h1><span class="login-val"></span>@wagapi</h1>

	</div><!-- /header -->

	<div data-role="content" >	
		<div class="content-primary">
			<div style="max-width:700px;margin:auto;">
				<div data-role="collapsible">
					<h3>Change the language</h3>
					<form action="" method="POST" >


								<label for="select-language-1" class="select">Select language</label>
								<select name="select-language-1" id="select-language-1" class="ui-disabled">
									<option value="en-us">English</option>
									<option value="fr-fr">Français</option>
								</select>

					</form>
				</div>
				<div data-role="collapsible">
					<h3>Change your password
					</h3>
					<form action="javascript:reset_pwd();" method="POST" id="pwd-submit">	
						<div data-role="fieldcontain">
							<label for="formerpassword">Current password (max 20 characters)</label>
							<input type="password" name="formerpassword" id="formerpassword" value="" maxlength="20"/>
							<h4 id="formerpassword_comment"></h4>						 
						</div>				
						<div data-role="fieldcontain">
							<label for="newpassword">New password (max 20 characters)</label>
							<input type="password" name="newpassword" id="newpassword" value="" maxlength="20"/>
							<h4 id="newpassword_comment"></h4>						 
						</div>
						<div data-role="fieldcontain">
							<label for="renewpassword">Retype new password</label>
							<input type="password" name="renewpassword" id="renewpassword" value="" maxlength="20"/>
							<h4 id="renewpassword_comment"></h4>				
						</div>
						<h3 id="mg_box" style="text-align:center;color:red;"></h3>					
						<input type="submit" data-theme="a" id="submit" value = "Submit" />	
					</form>		
				</div>
			</div>
		</div><!--/content-primary -->	
	</div><!-- /content -->
	

</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- Action-box section -->

<div data-role="page" id="action-box">

	<div data-role="header" data-position="fixed">
		<h1>Actions</h1>
	</div><!-- /header -->

	<div data-role="content" >	
			<a href="#message-box" data-rel="dialog" data-role="button" data-theme="c">Send selection</a>
			<a href="#move-box" data-rel="dialog" data-role="button" data-theme="c">Add/Remove tags</a>
			<a href="#" data-role="button" data-theme="c" id="action-btn-file-delete">Delete selection</a>
			<a href="#file-box" data-role="button" data-rel="back" data-theme="c" id="action-btn-download">Download selection</a>		
			<a href="#file-box" data-role="button" data-rel="back" data-theme="c" id="action-btn-select" class="ui-disabled">Select all</a>				
			<a href="#file-box" data-role="button" data-rel="back" data-theme="c" id="action-btn-reset">Clear selection</a>			
			<a href="#file-box" data-role="button" data-rel="back" data-theme="c">Cancel</a> 
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed">
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- Message-box section -->

<div data-role="page" id="message-box">

	<div data-role="header" data-position="fixed">
		<h1>New message</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<div class="content-primary" data-theme="c">
			<div data-role="fieldcontain">
			 <label for="message-to">To </label>
			 <textarea name="message-content" id="message-to"></textarea>
			</div>
			<div data-role="fieldcontain">
			 <label for="message-about">About</label>
			 <input type="text" name="message-about" id="message-about" value=""  />
			</div>
			<div data-role="fieldcontain">
			<label for="message-content">Message</label>
				<textarea name="message-content" id="message-content"></textarea>
			</div>
			<p style="text-align:center;"><h3 style='text-align:center;'>Documents sent : <span id="message-doc-count"></span></h3></p>
			<p style="text-align:center;">
			<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="b" id="message-btn-send">Send</a>			
			<a href="#" data-role="button" data-rel="back" data-inline="true" id="message-btn-cancel">Cancel</a>
			</p>
			<h3 style='text-align:center;'>Tags to be sent with :</h3>			
			<ul id ="message-tags-list" data-role="listview" data-theme="c" data-insert="true">	
			</ul>

		</div><!--/content-primary -->		
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed">
	
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- move-box section -->

<div data-role="page" id="move-box">

	<div data-role="header" data-position="fixed">
		<h1>Sort documents</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<form id="tag-add" action="void(0);" method="POST">
			<p align="center">
			<div data-role="fieldcontain">
				<label for="tag-to-add"></label>
				<input type="text" name="tags" id="tag-to-add" value="" autocomplete=off />
			</div>
			</p>
		</form>
		<div class="content-primary" data-theme="c">
			<ul id ="tag-list" data-role="listview" data-theme="c" data-insert="true">	
			</ul>
		</div><!--/content-primary -->		
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed">
	
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- Detail-box section -->

<div data-role="page" id="detail-box">

	<div data-role="header" data-position="fixed">
		<a data-iconpos="notext" data-icon="delete" href="#" title="Close" data-theme="a" data-transition="pop" data-direction="reverse" data-rel="back">Close
		</a>	
		<h1 id="detail-name">File detail</h1>
	</div><!-- /header -->

	<div data-role="content" style="overflow:hidden">	
		<div class="content-primary" data-theme="c">
				<p style="text-align:center;"><img src="" class="img-detail" style="max-width:95%" id="detail-img">
				</p>
				<p style="text-align:center;">Type : <span id="detail-type"></span> - Extension : <span id="detail-extension"></span></p>
				<p style="text-align:center;">Added : <span id="detail-date-in"></span></p>
				<p style="text-align:center;">Size : <span id="detail-size"></span></p>
				<div style="width : 300px; margin:auto" data-role="controlgroup">
					<a href="#" id ="detail-download-link" class="detail-download-link" data-rel="external" data-role="button" data-icon="arrow-d" data-ajax="false" target="_blank">
						Download
					</a>
					<a href="#" id ="detail-delete-link" class="detail-delete-link" data-rel="external" data-role="button"  data-ajax="false" >
						Delete
					</a>					
					<div id = "viewers">
	<!--				<a href="#" id ="detail-zoho-link" class="detail-zoho-link" data-rel="external" data-role="button" data-icon="arrow-d" data-ajax="false">
							View in Zoho
						</a>
						<a href="#" id ="detail-google-link" class="detail-google-link" data-rel="external" data-role="button" data-icon="arrow-d" data-ajax="false">
							View with Google
						</a>-->
					</div>
				</div>
				<a href="#" id ="detail-fancybox-link" class="detail-fancybox-link" data-fancybox-type="iframe" data-rel="external" data-role="none" data-icon="arrow-d" data-ajax="false" style="display:none;">
				</a>				
		</div><!--/content-primary -->		
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed">
	
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- Viewer-box section 

<div data-role="page" id="viewer-box">

	<div data-role="header" data-position="fixed">
	<a data-iconpos="notext" data-icon="delete" href="#" title="Close" data-theme="a" data-transition="pop" data-direction="reverse" data-rel="back">Close
	</a>		
		<h1 id="viewer-name">viewer</h1>
	</div>

	<div data-role="content" >	
		<div class="content-primary" data-theme="c">

				<iframe src="#" id ="viewer-iframe" class="fancybox-iframe" scrolling="auto" frameborder="0" hspace="0">
				</iframe>				
		</div>	
	</div>
	
	<div data-role="footer" data-theme="d" data-position="fixed">
	
	</div>
</div>
-->

<!-- ######################################################################################### -->
<!-- Detail-box section -->

<div data-role="page" id="bug-box">

	<div data-role="header" data-position="fixed">
		<h1>Bug report</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<div class="content-primary" data-theme="c">
				<div data-role="fieldcontain">
					<p style="text-align:center;">
					<label for="message-content">Please report your bug or make your comment and press "Send"</label>
					<textarea name="message-content" id="report-content"></textarea>
					</p>
				</div>
			<p style="text-align:center;">
				<a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="b" id="report-btn-send">Send</a>			
				<a href="#" data-role="button" data-rel="back" data-inline="true" id="report-btn-cancel">Cancel</a>
			</p>
		</div><!--/content-primary -->		
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed">
	
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- ######################################################################################### -->
<!-- Wail delete window -->

<div data-role="page" id="wail-delete-box" data-title="Deletion request">

	<div data-role="header" data-position="fixed">
		<h1>Deletion request</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<div class="content-primary" data-theme="c">
			<p style="text-align:center;">
			Are you sure you want to delete this message ?
			</p>
			<a href="#" data-role="button" data-rel="back" data-inline="true" data-theme="b" id="btn-wail-accept-delete">Delete</a>			
			<a href="#" data-role="button" data-rel="back" data-inline="true" id="btn-wail-cancel-delete">Cancel</a>			
		</div><!--/content-primary -->		
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d" data-position="fixed">
	
	</div><!-- /footer -->
</div><!-- /page one -->

</body>
<!-- ######################################################################################### -->
<!-- Script section -->

<script id="template-inbox" type="text/x-jquery-tmpl">
		<li id=inbox-wail-${wail_id} class="inbox" {{if state==0}} data-theme="e" {{/if}} {{if state==1}} data-theme="c" {{/if}} ><a href="#">
			<h3>Received from ${sender} on ${date} : ${num_docs} documents - Shared with ${recipients}</h3>
				<p>${message}</p>
		</a>
		<a href="#" data-icon="delete" class="btn-wail-delete">
		Delete
		</a>
		</li>
</script>
<script id="template-lookup" type="text/x-jquery-tmpl">
	<li id="list-${id}" class="template-lookup"><a href="#"  class="detail-request" >
		{{if type=='picture'}}<img src="/wgp/get.php?action=preview&id=${id}" alt="picture" title="" />{{/if}}
		{{if type=='audio'}}<img src="img/audio.png"  alt="audio" title="" />{{/if}}
		{{if type=='video'}}<img src="img/video.png"  alt="movie" title="" />{{/if}}
		{{if type=='mixed'}}<img src="img/mixed.png"  alt="document" title="" />{{/if}}
		{{if type=='undefined'}}<img src="/wgp/rsc/dgn/undefined.png" alt="undefined" title="" />{{/if}}
		<h3>
		<div style="max-width:400px;overflow:hidden;text-overflow: ellipsis;-o-text-overflow: ellipsis;"><span class="detail-extension">${extension}</span> - <span class="detail-name" >${name} </span></div>			
		</h3>
		<p>
		Added : <span class="detail-date-in">${date_in}</span>
		Size : <span class="detail-size">${formatFileSize(size)}</span>
		Type : <span class="detail-type">${type}</span>
		<span style="margin-left:150px;border:none;">{{each tags}}<span class="ui-li-count" style="padding-left: 5px;position:relative; top:0px"><span class="">${$value}</span></span>{{/each}}</span>
		</p>	
		
	</a>	
	<a href="#" class="doc-selection doc-unselected" data-icon="plus">
	Select
	</a>
	</li>
</script>
<script id="template-rep" type="text/x-jquery-tmpl">
	<li class="template-rep"><a href="#" >
		<img src="img/directory.png"  alt="undefined" title="" class="ui-li-icon" />
		<h4 style="text-align:center" >${tag}</h4>
		<p></p>
	</a></li>
</script>
<script id="template-parents" type="text/x-jquery-tmpl">
	<li class="template-parents" data-icon="delete"><a href="#" >
		<img src="img/directory_parent.png"  alt="undefined" title=""  class="ui-li-icon"  />
		<h4 style="text-align:center" class="search-tag">${tag}</h4>
		<p></p>
	</a></li>
</script>
<script id="template-set-tags" type="text/x-jquery-tmpl">
	{{if status=='on'}}
	<li class="is-tag-on" data-icon= "minus"><a href="#" >
		<img src="img/directory_parent.png"  alt="undefined" title="" class="ui-li-icon"  />
	{{/if}}
	{{if status=='off'}}
	<li class="is-tag-off" data-icon= "plus"><a href="#" >
		<img src="img/directory.png"  alt="undefined" title="" class="ui-li-icon"  />
	{{/if}}	
		<h4 style="text-align:center">${tag}</h4>
		<p>
		</p>
	</a></li>
</script>
<script id="template-list-tags" type="text/x-jquery-tmpl">
	<li class="is-tag-sent-on" data-icon= "minus"><a href="#" >
		<img src="img/directory_parent.png"  alt="undefined" title="" class="ui-li-icon"  />
		<h4 style="text-align:center">${tag}</h4>
		<p>
		</p>
	</a></li>
</script>
<script id="template-lookup-thumbs" type="text/x-jquery-tmpl">
			<li id="list-${id}">
				<div class="miniatures">
					<a name=${name} {{if type=='picture'}} href="/wgp/get.php?action=display&id=${id}" {{else}} href="/wgp/get.php?action=download&type=file&doc_id=${id}" {{/if}} title=${name} data-ajax="false" rel="external" {{if type=='picture'}} class="photoswipe-link" {{/if}} >
					{{if type=='picture'}}<img src="/wgp/get.php?action=preview&id=${id}"  alt="picture" title="" width=150 height=150 />{{/if}}
					{{if type=='audio'}}<img src="img/audio.png"  alt="${name}" title="audio" width=150 height=150 />{{/if}}
					{{if type=='video'}}<img src="img/video.png"  alt="${name}" title="video" width=150 height=150 />{{/if}}
					{{if type=='mixed'}}<img src="img/mixed.png"  alt="${name}" title="document" width=150 height=150 />{{/if}}
					{{if type=='undefined'}}<img src="img/undefined.png"  alt="undefined" title="" width=150 height=150 />{{/if}}					
					</a>
					<div class="image-title" style="font-size:0.75em;text-align:center;">
						<div class="doc-selection doc-unselected">
							<a href="#" class="doc-selection-btn doc-unselected" data-icon="plus" data-role="button">
							Select
							</a>			
						</div>	
					${name}
					</div>	
					<div class="download">
						<a href="/wgp/get.php?action=download&type=file&doc_id=${id}" data-ajax="false" data-role="button" data-icon="arrow-d" data-inline="true" data-iconpos="notext"></a>
					</div>				
				</div>
			</li>	
</script>


<!--[if IE]>
<script>
$(function() {
    $('#plup').uploadify({
        'swf'      : 'lib/uploadify-v3.1/uploadify.swf',
        'uploader' : '/wgp/upload2.php',
		'fileObjName' : 'files[]',
		'fileSizeLimit' : '50MB',
		'onUploadSuccess' : function(file, data, response) {
            //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
			files_flag_on();
			var o = $.parseJSON(data);
			if(o[0].error){
				notify.add(o[0].error);
			}else{
				quota_display_init();
			}			
        }		
        // Put your options here
    });
});	
</script>
<![endif]-->

<script>

/*$( '#login-box' ).live( 'pageinit',function(event){
	$('#user').focus();
});*/

$(document).ready(function() {
  $.ajaxSetup({ cache: false });  
  	/*channel_request('init', '', '',function(data){
		init = data['init'];
		login = init['login'];
		$('.login-val').html(login);
		//$.mobile.changePage( $('#home-box'));
	});*/
		init();
		$('#detail-fancybox-link').fancybox({
		maxWidth	: 1280,
		maxHeight	: 2000,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

$(function () {
  $(window).load(function () {
    $(':input:visible:enabled:first').focus();
  });
})
/*
$( '#loading-box' ).live( 'pagebeforeshow',function(event){
	init();
});*/


//Initializer selection stored data
var selection = new Array();
//var div = $("div#store-selection").first();
//$.data(div, "store-selection", selection);
$('body').data("store-selection", selection);
files_flag_on();
//$('body').data("Pswipe-instance", 0);

//$( '#mail-box' ).live( 'pagebeforecreate',function(event){
$( '#mail-box' ).live( 'pagebeforeshow',function(event){
				//$('#in-box').empty();
 				channel_request('inbox', '', 'In',function(data){
					render_inbox(data['inbox']);
					//$('#mail-box').page();
					//$('#in-box').trigger('create');
					$('#in-box').listview('refresh');
				});


});

$( '#doc-box' ).live( 'pageinit',function(event){
$('#q_tag').textinput();
 
 $(function(){
 		function split( val ) {
			return val.split( /\s+/ );
		}
		function extractLast( term ) {
			return split( term ).pop();
		}
 
 		$( "#q_tag" )
			// don't navigate away from the field on tab when selecting an item
			.bind( "keydown", function( event ) {
				if ( event.keyCode === $.ui.keyCode.TAB &&
						$( this ).data( "autocomplete" ).menu.active ) {
					event.preventDefault();
				}
			})
			.autocomplete({
				source: function( request, response ) {
					var term = extractLast( request.term );
					channel_request('autocomplete', term, '',function(data){
						response(data['autocomplete']);
						//$('#q_tag').textinput('refresh');
						//console.log(response);
					});
				},
				search: function() {
					// custom minLength
					var term = extractLast( this.value );
					if ( term.length < 2 ) {
						return false;
					}
				},
				focus: function() {
					// prevent value inserted on focus
					return false;
				},
				select: function( event, ui ) {
					var terms = split( this.value );
					// remove the current input
					terms.pop();
					// add the selected item
					terms.push( ui.item.value );
					// add placeholder to get the comma-and-space at the end
					terms.push( "" );
					this.value = terms.join( " " );
					return false;
				}
			});
		});
$('#doc-box').page();
});


$( '#home-box' ).live( 'pageinit',function(event){
	/*
	$(function(){
			$('#file-select').customFileInput();	
	});
	$('#file-select').trigger('enable');*/
	
	files_flag_on(); //to force page refresh of the files section in case of upload
});

$("#tag-search").submit(function(event){
	event.preventDefault();
		var tags = $("#q_tag").attr('value');
		if(tags){
		channel_request('lookup', tags, '',function(data){
			$("#doc-list").empty();
			render_parents(data['tv_parents']);
			render_rep(data['treeview']);
			$("#doc-box-results-count").text(data['browse_results']['count']);
			//render_lookup(data['lookup']);
			var tags = $("#q_tag").attr('value',''); //clears the text field
			$('#doc-list').listview('refresh');
		});	
		}
//	lookup();
	//$('#doc-box').page();
	//$('#doc-list').trigger('create');
	//$('#doc-list').listview('refresh');
	event.stopPropagation();
});

$( '.template-rep' ).live( 'click',function(event){
	event.preventDefault();
		var tags_undecoded = $(this).find("h4").first().text();
		var tags = tags_undecoded;
		//console.log(tags_undecoded);
		//var tags = decode_utf8(tags_undecoded);
		channel_request('lookup', tags, 'add_tag',function(data){
			$("#doc-list").empty();
			render_parents(data['tv_parents']);
			render_rep(data['treeview']);
			$("#doc-box-results-count").text(data['browse_results']['count']);
			//render_lookup(data['lookup']);
			$('#doc-list').listview('refresh');
		});	
});

$( '.template-parents' ).live( 'click',function(event){
	event.preventDefault();
		var tags_undecoded = $(this).find("h4").first().text();
		var tags = tags_undecoded;
		//console.log(tags_undecoded);
		//var tags = decode_utf8(tags_undecoded);
		channel_request('lookup', tags, 'rem_tag',function(data){
			$("#doc-list").empty();
			render_parents(data['tv_parents']);
			render_rep(data['treeview']);
			$("#doc-box-results-count").text(data['browse_results']['count']);
			//render_lookup(data['lookup']);
			$('#doc-list').listview('refresh');
		});	
});
/*
$( '#file-box' ).live( 'pagebeforeshow',function(event){
 				channel_request('browse_results', 'start', '',function(data){
					render_browse_results(data['browse_results']);
					//$('#mail-box').page();
					//$('#file-list').listview();
					$('#file-list').listview('refresh');
				});
});
*/
$( '#file-box' ).live( 'pagebeforeshow',function(event){
	if(is_file_flag_on()){
		channel_request('browse_results', 'start', 'reset',function(data){
			render_browse_results(data['browse_results']);
			if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
			if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}	
			display_style = get_display_style();
			if(display_style==1){
				$('#file-list').listview('refresh');
			}else{
				$('a.doc-selection-btn').button();
			}
			files_flag_off();
		});	
	}else if(is_files_flag_refresh_on()){
		channel_request('browse_results', 'refresh', '',function(data){
			render_browse_results(data['browse_results']);
			if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
			if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}	
			display_style = get_display_style();
			if(display_style==1){
				$('#file-list').listview('refresh');
			}else{
				$('a.doc-selection-btn').button();
			}
			files_flag_refresh_off();
			refresh_lv_elements();
		});	
	}else {
		display_style = get_display_style();
		if(display_style==1){
			$('#file-list').listview('refresh');
		}else{
			$('a.doc-selection-btn').button();
		}	
		refresh_lv_elements();
	}
	
});
/*
$( '#file-box' ).live( 'pagecreate',function(event){
	channel_request('browse_results', 'start', '',function(data){
		render_browse_results(data['browse_results']);
		if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
		if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}	
		$('#file-list').listview('refresh');
	});
	//$('#file-list').trigger('create');
});*/
/*
$( '#file-box' ).live( 'pageinit',function(event){
	$('#file-list').listview('refresh');
	refresh_lv_elements();
});
	*/

$( '#doc-btn-next' ).live( 'click',function(event){
	event.preventDefault();
	/* channel_request('browse_results', 'start', '',function(data){
		render_browse_results(data['browse_results']);
		//$('#mail-box').page();
		//$('#file-list').listview();
		//$('#file-list').listview('refresh');
	$.mobile.changePage( $('#file-box'));	
	if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
	if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}	
	});*/
	$.mobile.changePage( $('#file-box'));	
	//page_switch('file-box');
});
$( '#file-btn-back' ).live( 'click',function(event){
	event.preventDefault();
	if($('#file-btn-back').hasClass('back-is-over')){
		$.mobile.changePage( $('#doc-box'));
	}else{
		channel_request('browse_results', 'back', '',function(data){
			render_browse_results(data['browse_results']);
			//$('#mail-box').page();
			//$('#file-list').listview();
			display_style = get_display_style();
			if(display_style==1){
				$('#file-list').listview('refresh');
			}
		//$.mobile.changePage( $('#file-box'));		
		if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
		if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}
		refresh_lv_elements();
		});
	}
});
$( '#file-btn-next' ).live( 'click',function(event){
	event.preventDefault();
	channel_request('browse_results', 'next', '',function(data){
		render_browse_results(data['browse_results']);
		//$('#mail-box').page();
		//$('#file-list').listview();
		display_style = get_display_style();
		if(display_style==1){
			$('#file-list').listview('refresh');
		}
		if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
		if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}
	//$.mobile.changePage( $('#file-box'));		
		refresh_lv_elements();
	});
});

$( '#doc-box' ).live( 'pagebeforecreate',function(event){
		channel_request('lookup', '', '',function(data){
			//$("#doc-list").empty();
			render_parents(data['tv_parents']);
			render_rep(data['treeview']);
			$("#doc-box-results-count").text(data['browse_results']['count']);
			//render_lookup(data['lookup']);
			$('#doc-list').listview('refresh');
		});	  
});

$('.inbox').live('click',function(event){
	event.preventDefault();
	var e = $(this).attr('id');
	//console.log(e);
	var wail_id = e.substring(11);
	//console.log(wail_id);
	channel_request('lookup', wail_id, 'wail_docs',function(data){
		//render_lookup(data['lookup']);
		//render_tagbox(data['tagbox']);
		//render_alltagbox(data['alltagbox']);
		files_flag_off();	
		files_flag_refresh_on();
		//$( '#doc-btn-next' ).click();
		$.mobile.changePage( $('#file-box'));
	});
});

//Manage click events to add or remove document to the current selection
$('.doc-selection').live('click',function(event){
	//event.preventDefault();
	var e = $(this).parents("li").first().attr('id');
	var doc_id = e.substring(5);
	//console.log(doc_id);
//	var div = $("div#store-selection").first();
//	var stored_selection = $.data(div, "store-selection");
	var stored_selection = $('body').data("store-selection");
//	console.log(stored_selection);
	if(stored_selection){selection = stored_selection}else{selection = new Array();}
	if($(this).hasClass("doc-unselected")){
		selection.push(doc_id);
		toggle_lv_style($(this).parents('li').first(),'unselected');
	}else{
		for(var i=0; i<selection.length;i++ ){ 
			if(selection[i]==doc_id){selection.splice(i,1);}
		} 
		toggle_lv_style($(this).parents('li').first(),'selected');
	}
	//console.log(selection);
$('body').data("store-selection", selection);

});


$( '#file-btn-all-old' ).live( 'click',function(event){
	event.preventDefault();
	var selection = new Array();
	if($(this).hasClass('doc-unselect')){
		$('#file-list').children('li').each(function(){
		toggle_lv_style($(this),'selected');
		});		
		$(this).addClass("doc-select");
		$(this).removeClass("doc-unselect");
	}else{
		$('#file-list').children('li').each(function(){
			e = $(this).attr('id');
			doc_id = e.substring(5);
			selection.push(doc_id);
			toggle_lv_style($(this),'unselected');
		});
		$(this).addClass("doc-unselect");
		$(this).removeClass("doc-select");
		
	}
	$('body').data("store-selection", selection);
	
});

$( '#file-btn-all' ).live( 'click',function(event){
	event.preventDefault();
	//var selection = new Array();
	var stored_selection = $('body').data("store-selection");
	if(stored_selection){selection = stored_selection}else{selection = new Array();}
		$('#file-list').children('li').each(function(){
			e = $(this).attr('id');
			doc_id = e.substring(5);
			for(var i=0; i<selection.length;i++ ){ 
				if(selection[i]==doc_id){selection.splice(i,1);}
			} 
			selection.push(doc_id);
			toggle_lv_style($(this),'unselected');
		});
	$('body').data("store-selection", selection);
	//console.log(selection);
});

$( '#file-btn-unall' ).live( 'click',function(event){
	event.preventDefault();
	//var selection = new Array();
	var stored_selection = $('body').data("store-selection");
	if(stored_selection){selection = stored_selection}else{selection = new Array();}
		$('#file-list').children('li').each(function(){
			e = $(this).attr('id');
			doc_id = e.substring(5);
			for(var i=0; i<selection.length;i++ ){ 
				if(selection[i]==doc_id){selection.splice(i,1);}
			} 
		toggle_lv_style($(this),'selected');
		});		
	$('body').data("store-selection", selection);
	//console.log(selection);
});

//toggles doc listview elements according to their selection status
function toggle_lv_style(element,prev){
//console.log('toggle');
	style_selected = 'b';
	style_unselected = 'c';
	icon_selected = 'minus';
	icon_unselected = 'plus';
	display_style = get_display_style();
	//In case the element was not styled yet (when a refresh_lv_elements is called after direct DOM insert)
	element.find('a.doc-selection-btn').button();
	//Case where we display miniatures - doesn't work yet
	if(display_style!=1){
		var k = element.find('a.doc-selection-btn');
			//element.remove();
			//k.parents('div').eq(1).remove();
			//element.find('a').parent('div').remove();
		if(prev=='unselected'){
			k.attr('data-icon',icon_selected);
			k.addClass("doc-selected").removeClass("doc-unselected");
			k.attr('data-theme',style_selected);
			//k.addClass('ui-btn-hover-'+style_selected).removeClass('ui-btn-hover-'+style_unselected); //not relevant for tablets
			k.html('Unselect');
			k.parents('div').eq(1).addClass("doc-selected").removeClass("doc-unselected");
			//k.parents('div.doc-selection').eq(0).addClass("doc-selected").removeClass("doc-unselected");
			var r = k.parents('div').eq(0);
			//var p = k.detach();
			//p.insertBefore(r);
			k.clone().insertBefore(r);
			r.remove();
			element.find('a.doc-selection-btn').button();
			//$('.doc-selection').button();
		}else{
			k.attr('data-icon',icon_unselected);
			k.addClass("doc-unselected").removeClass("doc-selected");
			k.attr('data-theme',style_unselected);
			//k.addClass('ui-btn-hover-'+style_unselected).removeClass('ui-btn-hover-'+style_selected);		
			k.html('Select');
			k.parents('div').eq(1).addClass("doc-unselected").removeClass("doc-selected");
			var r = k.parents('div').eq(0);
			k.clone().insertBefore(r);
			r.remove();
			element.find('a.doc-selection-btn').button();
		}
	}else{
		//List case
		if(prev=='unselected'){
			element.attr('data-theme',style_selected).addClass('ui-btn-up-'+style_selected).removeClass('ui-btn-up-'+style_unselected);
			var k = element.children('a');
			k.attr('data-icon',icon_selected).addClass('ui-btn-up-'+style_selected).removeClass('ui-btn-up-'+style_unselected);
			k.children().children().next().children().children().next().removeClass('ui-icon-'+icon_unselected).addClass('ui-icon-'+icon_selected);	
			k.addClass("doc-selected").removeClass("doc-unselected");
			k.children().children().next().attr('data-theme',style_selected);
			k.attr('data-theme',style_selected);
			k.addClass('ui-btn-hover-'+style_selected).removeClass('ui-btn-hover-'+style_unselected); //not relevant for tablets
		}else{
			element.attr('data-theme',style_unselected).addClass('ui-btn-up-'+style_unselected).removeClass('ui-btn-up-'+style_selected);
			var k = element.children('a');
			k.attr('data-icon',icon_unselected).addClass('ui-btn-up-'+style_unselected).removeClass('ui-btn-up-'+style_selected);
			k.children().children().next().children().children().next().removeClass('ui-icon-'+icon_selected).addClass('ui-icon-'+icon_unselected);	
			k.addClass("doc-unselected").removeClass("doc-selected");
			k.children().children().next().attr('data-theme',style_unselected);
			k.attr('data-theme',style_unselected);
			k.addClass('ui-btn-hover-'+style_unselected).removeClass('ui-btn-hover-'+style_selected);
		}
	}
}

$('#file-btn-reset').live('click',function(event){
	event.preventDefault();
	selection = new Array();
	$('body').data("store-selection", selection);
	refresh_lv_elements();
});

$('#action-btn-reset').live('click',function(event){
	//event.preventDefault();
	selection = new Array();
	$('body').data("store-selection", selection);
	refresh_lv_elements();
});

/*
To be implemented - requires a keyword to be sent to the server matching the overall query result and a way to tell the system that all documents, beside those stored, are selected
$('#action-btn-select').live('click',function(event){
	//event.preventDefault();

});
*/
//Refresh display of selected and unselected elements
function refresh_lv_elements(){
	display_style = get_display_style();
/*	if(display_style!=1){
		return 0;
	}*/
	var stored_selection = $('body').data("store-selection");
	if(stored_selection){selection = stored_selection}else{selection = new Array();}
		$('#file-list').children('li').each(function(){
			e = $(this).attr('id');
			doc_id = e.substring(5);
			toggle_lv_style($(this),'selected');
			for(var i=0; i<selection.length;i++ ){ 
				if(selection[i]==doc_id){toggle_lv_style($(this),'unselected');}
			} 
		});	
}

$("#action-btn-file-delete").live('click',function(event){
	event.preventDefault();
	selection = new Array();
	selection = $('body').data("store-selection");
	if(selection){
		channel_request('del_doc', selection, '',function(data){
			clear_selection();
			files_flag_on();
			$.mobile.changePage( $('#file-box'));	
		});
	}
	
});

function clear_selection(){
	selection = new Array();
	$('body').data("store-selection", selection);
}

function count_selection_elements(){
	var stored_selection = $('body').data("store-selection");
	var size = 0;
	if(stored_selection){size = stored_selection.length;}
	return size;
}

function get_selection(){
	var stored_selection = $('body').data("store-selection");
	if(stored_selection){selection = stored_selection}else{selection = new Array();}
	return selection;
}

function files_flag_on(){
	$('body').data("files-flag", 1);
}
function files_flag_off(){
	$('body').data("files-flag", 0);
}
function is_file_flag_on(){
	var flag = $('body').data("files-flag");
	if(flag){if(flag==1){return true;}else{return false;}}
}

$( '#message-box' ).live( 'pagebeforeshow',function(event){
	$("#message-doc-count").empty();
	var count = count_selection_elements();
	$("#message-doc-count").append(count);
	channel_request('list_selection_tags', '', '',function(data){
		render_list_tags(data['list-selection-tags']);
		$('#message-tags-list').listview('refresh');
	});
});

$("#message-btn-send").live('click',function(event){
	event.preventDefault();
	var message = $('#message-content').val();
	//var recipients = $('#message-to').attr('value');
	var recipients = $('#message-to').val();
	var about = $('#message-about').val();
	var args = {};
	//var args = new Array();
	args["message"] = message;
	args["recipients"] = recipients.toLowerCase();
	args["banned_tags"] = get_msg_tag_buffer();
	args["about"] = about;	
	//args = {'message':message,'recipients':recipients};
	//console.log(args);
	channel_request('share', args, '',function(data){});
	//console.log(args);
	//Clear fields values
	$('#message-to').val("");
	$('#message-content').val("");
	$('#message-about').attr('value','');
	$('#message-tags-list').empty();
});

$("#message-btn-cancel").live('click',function(event){
	event.preventDefault();
	$('#message-to').val("");
	$('#message-content').val("");
	$('#message-about').attr('value','');
});

$( '#move-box' ).live( 'pagebeforeshow',function(event){
	channel_request('set_tags', '', '',function(data){
		render_set_tags(data['set_tags']);
		$('#tag-list').listview('refresh');
	});
});

$(".is-tag-on").live('click',function(event){
	tags = $(this).find("h4").first().text();
	channel_request('set_tags', tags, 'del_tag',function(data){
		render_set_tags(data['set_tags']);
		$('#tag-list').listview('refresh');
	});
	files_flag_refresh_on();
});
$(".is-tag-off").live('click',function(event){
	tags = '"'+$(this).find("h4").first().text() +'"';
	channel_request('set_tags', tags, 'add_tag',function(data){
		render_set_tags(data['set_tags']);
		$('#tag-list').listview('refresh');
	});
	files_flag_refresh_on();
});

$("#tag-add").submit(function(event){
	event.preventDefault();
		var tags = $("#tag-to-add").attr('value');
		if(tags){
			channel_request('set_tags', tags, 'add_tag',function(data){
				render_set_tags(data['set_tags']);
				$('#tag-list').listview('refresh');
			});	
		}
		files_flag_refresh_on();
	event.stopPropagation();
});

$( '#move-box' ).live( 'pageinit',function(event){
	$('#tag-to-add').textinput();
	$(function(){
			function split( val ) {
				return val.split( /\s+/ );
			}
			function extractLast( term ) {
				return split( term ).pop();
			}
	 
			$( "#tag-to-add" )
				// don't navigate away from the field on tab when selecting an item
				.bind( "keydown", function( event ) {
					if ( event.keyCode === $.ui.keyCode.TAB &&
							$( this ).data( "autocomplete" ).menu.active ) {
						event.preventDefault();
					}
				})
				.autocomplete({
					source: function( request, response ) {
						var term = extractLast( request.term );
						channel_request('autocomplete', term, '',function(data){
							response(data['autocomplete']);
							//$('#q_tag').textinput('refresh');
							//console.log(response);
						});
					},
					search: function() {
						// custom minLength
						var term = extractLast( this.value );
						if ( term.length < 2 ) {
							return false;
						}
					},
					focus: function() {
						// prevent value inserted on focus
						return false;
					},
					select: function( event, ui ) {
						var terms = split( this.value );
						// remove the current input
						terms.pop();
						// add the selected item
						terms.push( ui.item.value );
						// add placeholder to get the comma-and-space at the end
						terms.push( "" );
						this.value = terms.join( " " );
						return false;
					}
				});
			});
	$('#move-box').page();
});

$(".is-tag-sent-on").live('click',function(event){
	$(this).addClass("is-tag-sent-off").removeClass("is-tag-sent-on").attr("data-icon", 'plus');
	$(this).find('img').first().attr('src',"img/directory.png");
	var tag = $(this).find("h4").first().text();
	add_to_msg_tag_buffer(tag);	
	$('#message-tags-list').listview('refresh');
});

$(".is-tag-sent-off").live('click',function(event){
	$(this).removeClass("is-tag-sent-off").addClass("is-tag-sent-on").attr("data-icon", 'minus');
	$(this).find('img').first().attr('src',"img/directory_parent.png");
	var tag = $(this).find("h4").first().text();
	rem_from_msg_tag_buffer(tag);	
	$('#message-tags-list').listview('refresh');
});

function add_to_msg_tag_buffer(tag){
	var stored_selection = $('body').data("msg_tag_buffer");
	if(stored_selection){selection = stored_selection}else{selection = new Array();}
	selection.pop(tag);
	$('body').data("msg_tag_buffer",selection);
}

function rem_from_msg_tag_buffer(tag){
	var stored_selection = $('body').data("msg_tag_buffer");
	if(stored_selection){selection = stored_selection}else{selection = new Array();}
	for(var i=0; i<selection.length;i++ ){ 
		if(selection[i]==tag){selection.splice(i,1);}
	} 
	$('body').data("msg_tag_buffer",selection);
}


function clear_msg_tag_buffer(){
	selection = new Array();
	$('body').data("msg_tag_buffer",selection);
}

function count_msg_tag_buffer(){
	var stored_selection = $('body').data("msg_tag_buffer");
	var size = 0;
	if(stored_selection){size = stored_selection.length;}
	return size;
}

function get_msg_tag_buffer(){
	var stored_selection = $('body').data("msg_tag_buffer");
	if(stored_selection){selection = stored_selection}else{selection = new Array();}
	return selection;
}


$("#file-btn-home").live('click',function(event){

	channel_request('browse_results', 'start', 'home',function(data){
		render_browse_results(data['browse_results']);
		if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
		if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}	
		display_style = get_display_style();
		if(display_style==1){
			$('#file-list').listview('refresh');
		}
		refresh_lv_elements();
		files_flag_off();
	});	
});

$(".detail-request").live('click',function(event){
	//event.preventDefault();
	var e = $(this).parents("li").first().attr('id');
	var doc_id = e.substring(5);
	var type = $(this).find("span.detail-type").first().text();
	var date_in = $(this).find("span.detail-date-in").first().text();
	var size = $(this).find("span.detail-size").first().text();
	var extension = $(this).find("span.detail-extension").first().text();
	var name = $(this).find("span.detail-name").first().text();
	wagapi.current_doc.id = doc_id;
	wagapi.current_doc.type = type;
	wagapi.current_doc.date_in = date_in;
	wagapi.current_doc.size = size;
	wagapi.current_doc.extension = extension;
	wagapi.current_doc.name = name;
	/*if(extension=='mp4' || extension=='m4v' || extension=='mov' || extension=='f4v' || extension =='mp3'){
		//$("#detail-img").attr('display','none');
		//$("#detail-video-src").attr('src',"/wgp/get.php?action=download&type=media&doc_id=" + doc_id + "&ext=."+extension);
		//$("#detail-video-src").attr('type',"video/"+extension);
		//<video id="detail-video" ><source src="/wgp/get.php?action=download&type=media&doc_id=185&ext=.mp4" type="video/mp4" id="detail-video-src" /></video>
		jwplayer("detail-video").setup({
			file: "/wgp/get.php?action=download&type=media&doc_id=" + doc_id + "&ext=coucou."+extension,
			//file: "/wgp/get.php?action=download&type=media&doc_id=185&ext=.mp4",
			//flashplayer: "/api/jwplayer/player.swf",
			height: 270,
			width: 480,
			provider: "video",
			modes: [
				{ type: "html5" },			
				{ type: "flash", src: "/api/jwplayer/player.swf" },
				{ type: "download" }
			]
		});
	}else{*/
		//$("div#detail-video").empty();
		//jwplayer("detail-video").remove();
		$("#detail-img").attr('display','inline');
		$("#detail-img").attr('src',"/wgp/get.php?action=display&id="+ doc_id +"&extension=.jpg");
	//}
	$("#detail-download-link").attr("href","/wgp/get.php?action=download&type=file&doc_id=" + doc_id);	
	$("#detail-type").text(type);
	$("#detail-date-in").text(date_in);
	$("#detail-size").text(size);
	$("#detail-extension").text(extension);
	$("#detail-name").text(name);

	set_current_file(doc_id);

	//manage viewers
		$('#viewers').empty();
		//console.log(get_readable_ext(extension,'zoho'));
		//console.log(get_readable_ext(extension,'google'));	
		//$("#detail-zoho-link").remove();	
		//$("#detail-google-link").remove();	
	if(get_readable_ext(extension,'zoho')){
		//$("#detail-zoho-link").attr("data-role","button");
		//$("#detail-zoho-link").css("display","inline");	
		//$('#viewers').append('<a href="#" id ="detail-zoho-link" class="detail-zoho-link" data-rel="external" data-role=button data-icon="arrow-d" data-ajax="false">View with Zoho</a>');
		$('#viewers').append('<input type="submit" id ="detail-zoho-link" class="detail-zoho-link"  data-icon="arrow-d" value="View with Zoho">');		
		$(".detail-zoho-link").button();
	//}else{
		//$("#detail-zoho-link").remove();
	}
	if(get_readable_ext(extension,'google')){
		//$("#detail-google-link").attr("data-role","button");
		//$("#detail-google-link").css("display","inline");	
		//$('#viewers').append('<a href="#" id ="detail-google-link" class="detail-google-link" data-rel="external" data-role=button data-icon="arrow-d" data-ajax="false">View with Google</a>');		
		$('#viewers').append('<input type="submit" id ="detail-google-link" class="detail-google-link"  data-icon="arrow-d" value="View with Google" >');		
		$(".detail-google-link").button();
	//}else{
		//$("a.detail-google-link").remove();
	}	
	$.mobile.changePage( $('#detail-box'),{ transition: "slide"});

});

$("#action-btn-download").live('click',function(event){
	channel_request('zip', '', '',function(data){
		// Create an IFRAME.
		var iframe = document.createElement("iframe");
		// This makes the IFRAME invisible to the user.
		iframe.style.display = "none";
		iframe.src = "/wgp/get.php?action=download&type=archive&id=" + data['zip'];
		// Add the IFRAME to the page. This will trigger a request to GenerateFile now.
		document.body.appendChild(iframe); 
	});		
});
/*
$("#doc-box").live('swiperight',function(event){
	event.preventDefault();
	$( '#doc-btn-next' ).click();
	event.stopPropagation();	
});
$("#file-box").live('swiperight',function(event){
	event.preventDefault();
	if(!($('#file-btn-next').hasClass('ui-disabled'))){$( '#file-btn-next' ).click();}
	event.stopPropagation();	
});
$("#file-box").live('swipeleft',function(event){
	event.preventDefault();
	$( '#file-btn-back' ).click();
	event.stopPropagation();		
});
*/
function set_current_file(doc_id){
	$('body').data("current-file", doc_id);
}
function get_current_file(){
	doc_id = $('body').data("current-file");
	return doc_id;
}
/*
$(".detail-download-link").live('click',function(event){
	event.preventDefault();
	var doc_id = get_current_file();
	var iframe = document.createElement("iframe");
	// This makes the IFRAME invisible to the user.
	iframe.style.display = "none";
	iframe.src = "/wgp/get.php?action=download&type=file&doc_id=" + doc_id;
	// Add the IFRAME to the page. This will trigger a request to GenerateFile now.
	document.body.appendChild(iframe); 			
	event.stopPropagation();		
});		
*/

$(".tagbox-del-tag").live('click',function(event){
	event.preventDefault();
	var e = $(this).parents("li").first().attr('id');
	var doc_id = e.substring(5);
	var tag = $(this).find("span.tag-to-delete").first().text();
	$(this).remove();
	channel_request('del_tag', tag, doc_id,function(data){});
	event.stopPropagation();
});

function files_flag_refresh_on(){
	$('body').data("files-refresh-flag", 1);
}
function files_flag_refresh_off(){
	$('body').data("files-refresh-flag", 0);
}
function is_files_flag_refresh_on(){
	var flag = $('body').data("files-refresh-flag");
	if(flag){if(flag==1){return true;}else{return false;}}
}

$( '#doc-access-results' ).live( 'click',function(event){
	event.preventDefault();
	/*channel_request('browse_results', 'start', '',function(data){
		render_browse_results(data['browse_results']);
		//$('#mail-box').page();
		//$('#file-list').listview();
		//$('#file-list').listview('refresh');
	$.mobile.changePage( $('#file-box'));	
	if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
	if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}	
	});*/
	$.mobile.changePage( $('#file-box'));	
});



$( '#report-btn-send' ).live( 'click',function(event){
	event.preventDefault();
	var report = {};
	report['message'] = $('#report-content').val();
	channel_request('bug_report', report, '',function(data){
		$('#report-content').val('');
	});
});

$(document).bind("mobileinit", function(){
  $.extend(  $.mobile , {
    pushStateEnabled: false,
	defaultPageTransition: 'none'
  });
});

$("#file-btn-display").live( 'click',function(event){
	event.preventDefault();
	if($('#file-list').hasClass('display-detail')){
		$('#file-list').addClass('display-mosaic').removeClass('display-detail');	
	}else{
		$('#file-list').removeClass('display-mosaic').addClass('display-detail');
	/*	try{
						var 
							currentPage = $.mobile.activePage,
							photoSwipeInstance = PhotoSwipe.getInstance(currentPage.attr('id'));

						if (typeof photoSwipeInstance != "undefined" && photoSwipeInstance != null) {
							PhotoSwipe.detatch(photoSwipeInstance);
						}	
		}catch(e){}*/
	}
	channel_request('browse_results', 'refresh', '',function(data){
		render_browse_results(data['browse_results']);
		display_style = get_display_style();
		if(display_style==1){
			$('#file-list').listview('refresh');
		}else{
			$('a.doc-selection-btn').button();
			
		/*	var 
				currentPage = $.mobile.activePage,
				options = {},
				photoSwipeInstance = $("ul.gallery a.photoswipe-link", currentPage).photoSwipe(options,  currentPage.attr('id'));			*/
		}
		refresh_lv_elements();
		$.mobile.silentScroll(0); //Go back to the beginning of the page
	});
});

function get_display_style(){
	//1 = detail, 2=mosaic
	if($('#file-list').hasClass('display-detail')){return 1;}else{return 2;}
}

/*$('#file-box').live('pageshow', function(e){
		display_style = get_display_style();
		if(display_style==2){
			p = $.mobile.activePage;
			console.log(p);*/
		/*	try{
							var 
								currentPage = $.mobile.activePage,
								photoSwipeInstance = PhotoSwipe.getInstance(currentPage.attr('id'));

							if (typeof photoSwipeInstance != "undefined" && photoSwipeInstance != null) {
								PhotoSwipe.detatch(photoSwipeInstance);
							}	
			}catch(e){}		
			
				var 
					//currentPage = $(e.target),
					currentPage = $.mobile.activePage,
					options = {},
					//photoSwipeInstance = $("ul.gallery a", e.target).photoSwipe(options,  currentPage.attr('id'));
					photoSwipeInstance = $("ul.gallery a.photoswipe-link", currentPage).photoSwipe(options,  currentPage.attr('id'));*/
/*			}
	});*/

function is_photoswipe_on(){
	if ($(".ps-uilayer").length > 0){return true;}else{return false;}
}	



</script>

<script>
//specific to desktop version

$("#file-box").bind('keydown', function(event){
	if(!is_photoswipe_on()){
		event.preventDefault();
		if(event.keyCode == 39){
			if(!($('#file-btn-next').hasClass('ui-disabled'))){$( '#file-btn-next' ).click();}
		}
		if(event.keyCode == 37){
			$( '#file-btn-back' ).click();
		}
		event.stopPropagation();	
	}
});

$("#doc-box").bind('keydown', function(event){
	//event.preventDefault();
	if(event.keyCode == 39){
		$( '#doc-btn-next' ).click();
	}
	//event.stopPropagation();	
});

$(document).delegate('a.btn-wail-delete', 'click', function(event) {
	event.preventDefault();
	var p = $(this).parents('li').eq(0);
	var e = p.attr('id');
	//console.log(e);
	var wail_id = e.substring(11);
 
  $(this).simpledialog({
    'mode' : 'bool',
    'prompt' : 'Delete message ?',
    'useModal': true,
    'buttons' : {
      'OK': {
        click: function () {
			//console.log(e);
			channel_request('wail', wail_id, 'delete',function(data){
				//render_lookup(data['lookup']);
				//render_tagbox(data['tagbox']);
				//render_alltagbox(data['alltagbox']);
				//files_flag_off();	
				//files_flag_refresh_on();
				//$( '#doc-btn-next' ).click();
				//$.mobile.changePage( $('#mail-box'));
				p.remove();
			});		  
		  
        }
      },
      'Cancel': {
        click: function () {
        },
        icon: "delete",
        theme: "c"
      }
    }
  })
event.stopPropagation();  
});

$(document).delegate('a.detail-delete-link', 'click', function(event) {
	event.preventDefault();
	var selection = new Array(wagapi.current_doc.id);
	//console.log(e);
 
  $(this).simpledialog({
    'mode' : 'bool',
    'prompt' : 'Delete '+wagapi.current_doc.name+'.'+wagapi.current_doc.extension+' ?',
    'useModal': true,
    'buttons' : {
      'OK': {
        click: function () {
			channel_request('del_doc', selection, '',function(data){
				clear_selection();
				files_flag_on();
				$.mobile.changePage( $('#file-box'));	
			});	  
        }
      },
      'Cancel': {
        click: function () {
        },
        icon: "delete",
        theme: "c"
      }
    }
  })
event.stopPropagation();  
});

/*		
function unauth(){
	var data = '';	
	$.ajax({
		type: "POST",
		url: "unlog.php",
		data: data,
		success: function(){
			window.location.reload(true);
			window.location ="index.php";
	   }
	});			
}*/
$('#fileupload').bind('fileuploaddone', function (e,data) {
	files_flag_on();
	//console.log(data);
	//console.log(e);
	if(data['result'][0]['error']){
		notify.add(data['result'][0]['error']);
	}else{
		quota_display_init();
	}
});


$('#detail-zoho-link').live('click',function(event){
	event.preventDefault();
	event.stopPropagation();
	doc_id = get_current_file();
	doc_ids = new Array();
	doc_ids.push(doc_id);
	//channel_request('zoho', doc_ids, '',function(data){
	channel_request('tokenizer', doc_ids, '',function(data){
		token = data['tokenizer']['token'];
		var ext = $("#detail-extension").text();
		//Case : Zoho
		//var href = "https://viewer.zoho.com/api/urlview.do?url="+encodeURIComponent('http://www.wagapi.com/wgp/get.php?action=download&type=file&doc_id='+doc_id+'&token='+token);
		var host = "http://"+window.location.hostname;
		var href = "https://viewer.zoho.com/api/urlview.do?url="+encodeURIComponent(host+'/wgp/get.php?action=download&type=file&doc_id='+doc_id+'&token='+token+'&ext=.'+ext)+'&embed=true';
		$('#detail-fancybox-link').attr('href',href);
		$('#detail-fancybox-link').click();
		//window.open("https://viewer.zoho.com/api/urlview.do?url="+encodeURIComponent('http://www.wagapi.com/wgp/get.php?action=download&type=file&doc_id='+doc_id+'&token='+token));	
		//console.log(data);
	});		  	
});

$('#detail-google-link').live('click',function(event){
	event.preventDefault();
	event.stopPropagation();
	doc_id = get_current_file();
	doc_ids = new Array();
	doc_ids.push(doc_id);
	//channel_request('zoho', doc_ids, '',function(data){
	channel_request('tokenizer', doc_ids, '',function(data){
		token = data['tokenizer']['token'];
		var ext = $("#detail-extension").text();
		//Case : Google viewer
		//window.open("http://docs.google.com/viewer?url="+encodeURIComponent('http://www.wagapi.com/wgp/get.php?action=download&type=file&doc_id='+doc_id+'&token='+token));	
		var host = "http://"+window.location.hostname;
		var href = "https://docs.google.com/viewer?url="+encodeURIComponent(host+'/wgp/get.php?action=download&type=file&doc_id='+doc_id+'&token='+token+'&ext=.'+ext)+'&embedded=true';
		$('#detail-fancybox-link').attr('href',href);
		$('#detail-fancybox-link').click();		
		//$('#viewer-iframe').attr('src',href);
		//var h = $(document).height();
		//$('#viewer-iframe').css('min-height',h+"px");
		//$.mobile.changePage('#viewer-box', {transition: 'pop', role: 'dialog'});   
				
	});		  	
});

function get_readable_ext(ext,viewer){
	var readable = {
					'doc':{'google':true,'zoho':true},
					'docx':{'google':true,'zoho':true},
					'xls':{'google':true,'zoho':true},
					'xlsx':{'google':true,'zoho':true},
					'ppt':{'google':true,'zoho':true},
					'pptx':{'google':true,'zoho':true},
					'pdf':{'google':true,'zoho':true},
					'odt':{'google':false,'zoho':true},
					'ods':{'google':false,'zoho':true},
					'odp':{'google':false,'zoho':true},
					'pages':{'google':true,'zoho':false},
					'pages':{'google':true,'zoho':false},
					'ai':{'google':true,'zoho':false},
					'psd':{'google':true,'zoho':false},
					'tiff':{'google':true,'zoho':false},
					'dxf':{'google':true,'zoho':false},
					'svg':{'google':true,'zoho':false},
					'eps':{'google':true,'zoho':false},
					'ps':{'google':true,'zoho':false},
					'ttf':{'google':true,'zoho':false},
					'zip':{'google':true,'zoho':false},
					'rar':{'google':true,'zoho':false},
					'sxw':{'google':false,'zoho':true},
					'sxc':{'google':false,'zoho':true},
					'sxi':{'google':false,'zoho':true},
					'wpd':{'google':false,'zoho':true},
					'rtf':{'google':true,'zoho':true},
					'txt':{'google':true,'zoho':true},
					'html':{'google':false,'zoho':true},
					'csv':{'google':false,'zoho':true},
					'tsv':{'google':false,'zoho':true}		
	};
	if(viewer && readable[ext] && readable[ext][viewer]){return readable[ext][viewer];}
	return false;
}
/*
function page_switch(page){
	var change = {
				'file-box': function(){
								if(is_file_flag_on()){
									channel_request('browse_results', 'start', 'reset',function(data){
										render_browse_results(data['browse_results']);
										if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
										if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}	
										display_style = get_display_style();
										if(display_style==1){
											$('#file-list').listview('refresh');
										}else{
											$('a.doc-selection-btn').button();
										}
										files_flag_off();
									});	
								}else if(is_files_flag_refresh_on()){
									channel_request('browse_results', 'refresh', '',function(data){
										render_browse_results(data['browse_results']);
										if(data['browse_results']['back_is_over']==1){$('#file-btn-back').addClass('back-is-over');}else{$('#file-btn-back').removeClass('back-is-over');}
										if(data['browse_results']['next_is_over']==1){$('#file-btn-next').addClass('ui-disabled');}else{$('#file-btn-next').removeClass('ui-disabled');}	
										display_style = get_display_style();
										if(display_style==1){
											$('#file-list').listview('refresh');
										}else{
											$('a.doc-selection-btn').button();
										}
										files_flag_refresh_off();
										refresh_lv_elements();
									});	
								}else {
									display_style = get_display_style();
									if(display_style==1){
										$('#file-list').listview('refresh');
									}else{
										$('a.doc-selection-btn').button();
									}	
									refresh_lv_elements();
								}
								$.mobile.changePage( $('#'+page),{ transition: "slide"});
				}
	};
	change[page]();
}*/



</script>
<script id="template-upload" type="text/x-jquery-tmpl">
	<tr class="template-upload{{if error}} ui-state-error{{/if}}">
		<td class="preview"></td>
		<td class="name">${name}</td>
		<td class="size">${sizef}</td>
		{{if error}}
			<td class="error" colspan="2">Error:
				{{if error === 'maxFileSize'}}File is too big
				{{else error === 'minFileSize'}}File is too small
				{{else error === 'acceptFileTypes'}}Filetype not allowed
				{{else error === 'maxNumberOfFiles'}}Max number of files exceeded
				{{else}}${error}
				{{/if}}
			</td>
		{{else}}
			<td class="progress"><div></div></td>
			<td class="start"><button>Start</button></td>
		{{/if}}
		<td class="cancel"><button>Cancel</button></td>
	</tr>
</script>



</html>

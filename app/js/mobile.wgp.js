		function auth(){
			var data = 'user=' + document.getElementById('user').value +  '&password=' + document.getElementById('password').value;	
			$.ajax({
				type: "POST",
				url: "/wgp/login.php",
				data: data,
				dataType: "JSON",
				success: function(data){
					if(data['auth']['code']==0){
						//Let's initialize the interface
						$('.message-auth').html('');
						//$.mobile.changePage( $('/wgp/index.php#loading-box'));
						window.location ="./";
					}else{
						$('.message-auth').html(data['auth']['message']);
					}
					$('#user').attr('value','');
					$('#password').attr('value','');
			   }
			});	
		}
		
		function unauth(){
			var data = '';	
			$.ajax({
				type: "POST",
				url: "/wgp/unlog.php",
				data: data,
				success: function(){
					//window.location.reload(true);
					//window.location ="/wgp/#login-box";
					//window.location = "www.wagapi.com"
					$.mobile.changePage( $('#login-box'));
			   }
			});			
		}

		function lookup() {
		var tags = $("#q_tag").attr('value');
				channel_request('lookup', tags, '',function(data){
				render_lookup(data['lookup']);
				//render_tagbox(data['tagbox']);
				//render_alltagbox(data['alltagbox']);	
				//console.log(data);
				});
		}
		
		function get_selection_from_listed_docs(){
			var checkbox_ids = new Array();
			$('input:checked.list-checkbox').each(function(){
				var e = $(this).parents("tr[id|='list']").first().attr('id');
				e = e.substring(5);
				checkbox_ids.push(e);
			});
			// prepares and returns string with doc ids
			if (!(checkbox_ids.length <1)){
				checkbox_ids_string = checkbox_ids.join(";");
				return checkbox_ids_string;
			} else {return "";}
		}
		
		function get_selection(){
			var checkbox_ids = new Array();
			$('input:checked.list-checkbox').each(function(){
				var e = $(this).parents("tr[id|='list']").first().attr('id');
				e = e.substring(5);
				checkbox_ids.push(e);
			});
				return checkbox_ids;
		}
	
		function channel_request(request, input, options,callback,loading_flag){
			var channel = {}; //on va stocker dans le tableau les différentes données d'entrée à transmettre au serveur
			channel['request'] = request;
			if(input){channel['input'] = input;}	//request input data
			if(options){channel['options'] = options;}	//request input data
			channel['selected_docs'] = get_selection();
			//channel['selected_docs'] = get_selection_from_listed_docs();
			var channel_string = JSON.stringify(channel);
			//console.log(channel_string);
			//We channel the request with all input data to the server and use the callback function to deal with the answer
			if(loading_flag!=null && loading_flag==true){$.mobile.showPageLoadingMsg();}
			$.ajax({
					type: "POST",
					url: "/wgp/w_axm.php",
					data: "channel=" + channel_string,
					dataType: "JSON",
					success: function(data){
						if(data!=null && data['redirect']=='auth'){
							$.mobile.changePage( $('#login-box'));
							//window.location ="/wgp/#login-box";
							//window.location = "www.wagapi.com"
						}else{
							callback(data);
						}
						$.mobile.hidePageLoadingMsg();
						//$.mobile.fixedToolbars.show(true);
						//wgp.set_buffer(data);
						//console.log(data['console']);
				   }
				 });					
		}

		function render_lookup(data) {
			//var type = get_type_to_display();
			//console.log(type);
			//$( "#doc-list" ).empty();
			//$('<tr><th style="display:none">Id</th><th>Type</th><th>Name</th><th>Extension</th><th>Created</th><th>Size</th><th style="width:15;"></th><th style="width:15;"></th><th style="width:15;"></th><th><input type="checkbox" id="list-check-all"></th></tr>').appendTo( "#lookup_tbl" );
			$( "#template-lookup" ).tmpl( data ).appendTo( "#doc-list" );
			//console.log(wgp.get_buffer());
			//$("#video-box").empty();
			//$( "#template-lookup-video" ).tmpl( data ).appendTo( "#video-box" );
			//$("#audio-box").empty();
			//$( "#template-lookup-audio" ).tmpl( data ).appendTo( "#audio-box" );
			//render_picturebox(data);
			//set_type_to_display(type);
			$('#q_tag').val('');
		}
		
		function render_tagbox(data){
			$("#tag-list").empty();
			$( "#template-tagbox" ).tmpl( data ).appendTo( "#tag-list" );   
		}
		
		function render_alltagbox(data){
			$("#all-tag-list").empty();
			$( "#template-alltagbox" ).tmpl( data ).appendTo( "#all-tag-list" );
		}
		
		function render_inbox(data){
			//$("#inbox-box").accordion('destroy');
			$("#in-box").empty();
			$( "#template-inbox" ).tmpl( data ).appendTo( "#in-box" );
			/*
			$(function(){
				$("#inbox-box").accordion({ header: "h3" });
			});*/
		}
		
		function render_mosaic(data){
			$("#mosaic").empty();
			$( "#template-mosaic" ).tmpl( data ).appendTo( "#mosaic" );
		}
		
		function render_picturebox(data){
			$("#picture-box").empty();
			$( "#template-mosaic" ).tmpl( data ).appendTo( "#picture-box" );
			//$.yoxview.update();
		}	

		
		function get_type_to_display(){
			return $('#doc-type-form').find('input:checked').first().attr('id');
		}
		function set_type_to_display(type){
			$('#'+ type).trigger('click');
		}
		
		function render_rep(data){
			files_flag_on();
			//$("#doc-list").empty();
			$( "#template-rep" ).tmpl( data ).appendTo( "#doc-list" );
		}	
		
		function render_parents(data){
			//$("#doc-list").empty();
			$( "#template-parents" ).tmpl( data ).appendTo( "#doc-list" );
		}	
		
		function render_browse_results(data){
			$("#file-list").empty();
			style = get_display_style();
			//console.log(style);
			if(style==1){
				$( "#template-lookup" ).tmpl( data['results'] ).appendTo( "#file-list" );
				//$('#file-list').listview('refresh');
			}else{
				$( "#template-lookup-thumbs" ).tmpl( data['results'] ).appendTo( "#file-list" );
				//Test to check if there is a picture, else PhotoSwipe bugs
				if($('a.photoswipe-link').exists()){
					//if($('body').data("Pswipe-instance")==1){
						var 
							//currentPage = $.mobile.activePage,
							currentPage = $('#file-box'),
							photoSwipeInstance = Code.PhotoSwipe.getInstance(currentPage.attr('id'));
							if (typeof photoSwipeInstance != "undefined" && photoSwipeInstance != null) {
								Code.PhotoSwipe.detatch(photoSwipeInstance);
							}	
					//}
						var 
							//currentPage = $.mobile.activePage,
							currentPage = $('#file-box'),
							options = {},
							photoSwipeInstance = $("ul.gallery a.photoswipe-link", currentPage).photoSwipe(options,  currentPage.attr('id'));	
							//$('body').data("Pswipe-instance", 1);
				}
				$.mobile.fixedToolbars.show(true); //must be disabled with jqm 1.1.0
				//$("[data-position='fixed']").fixedtoolbar('show');
			}
		}	
		
		function encode_utf8( s )
		{
		  return unescape( encodeURIComponent( s ) );
		}

		function decode_utf8( s )
		{
		  return decodeURIComponent( escape( s ) );
		}
		
		function render_set_tags(data){
			$("#tag-list").empty();
			$( "#template-set-tags" ).tmpl( data ).appendTo( "#tag-list" );
		}

		function render_list_tags(data){
			$("#message-tags-list").empty();
			$( "#template-list-tags" ).tmpl( data ).appendTo( "#message-tags-list" );
		}	
		
		//Extends Jquery to test if selectors are empty - http://stackoverflow.com/questions/920236/jquery-detect-if-selector-returns-null
		$.fn.exists = function () {
			return this.length !== 0;
		}
		
		function quota_display_init(callback){
			channel_request('vault-infos', '', '',function(data){
				infos = data['infos']['vault'];
				//m = Math.max(infos['quota'],infos['lib_size']);
				//console.log(infos);
				val = infos['lib_size']/infos['quota']*100;
				val = Math.round(val);
				val = Math.min(100,val);
				//console.log(val);
				$('#left-space-bar').progressbar({
					value: val
				});
				total = formatFileSize (infos['quota']);
				used = formatFileSize (infos['lib_size']);
				left = 100-val;
				$('#space-total-val').html(total);
				$('#space-used-val').html(used);
				$('#space-left-val').html(left);
					if(callback!=null){
						callback();
					}
			});
		}
		
		function init(){
			channel_request('init', '', '',function(data){
				//$('#select-language-1').selectmenu('disable');
				init = data['init'];
				login = init['login'];
				$('.login-val').html(login);
				quota_display_init(function(){
					//loop_check();
					//loop_check.start();
					notif_channel.start();
					$('#fileupload-buttonbar').find('span.ui-btn-text').removeClass('ui-btn-text'); //to correct the css problem with clicking on the select files button
					$.mobile.changePage( $('#home-box'));
				});
				//$.mobile.changePage( $('#home-box'));
			});		
		}

//*********************************************************		
		
//Notification module
function notification(name){
	var w_name = name;
	//var bar_selector = $('<div class="ui-bar ui-bar-e" id="' + w_name + '"><h3 style="float:left; margin-top:8px;">Notification</h3><div style="float:right; margin-top:4px;"><a href="#" data-role="button" data-icon="delete" data-iconpos="notext" title="Button" data-theme="e"></a></div></div>');
	var bar_selector = $('<div class="ui-bar ui-bar-e" id="' + w_name + '"></div>').append('<h3 style="float:left; margin-top:8px;">Notification</h3>');
	var div = $('<div style="float:right; margin-top:4px;"></div>').append('<a href="#" data-role="button" data-icon="delete" data-iconpos="notext" title="Button" data-theme="e" class="ui-btn ui-btn-up-e ui-btn-icon-notext ui-btn-corner-all ui-shadow"><span class="ui-btn-inner ui-btn-corner-all" aria-hidden="true"><span class="ui-btn-text">Button</span><span class="ui-icon ui-icon-delete ui-icon-shadow"></span></span></a>');
	var bar_selector = bar_selector.append(div);
	//var bar_selector = $('<a href="#" data-role="button" data-icon="delete" data-iconpos="notext" title="Button" data-theme="e"></a>').appendTo($('<div style="float:right; margin-top:4px;"></div>')).appendTo($('<h3 style="float:left; margin-top:8px;">Notification</h3>')).appendTo($('<div class="ui-bar ui-bar-e" id="' + w_name + '"></div>'));
	//console.log(bar_selector);
	var that = this;
	var msg_class = w_name + '-msg';
	this.is_hidden = true;
	//var is_hidden = true;
	//Register events
	//On pagebeforechange event, we want to clean the notification bar and hide it 
	//$(document).on('pagebeforechange',function(){$('.'+msg_class).remove();that.hide();});	
	bar_selector.find('a').on('click', function(){$('.'+msg_class).remove();that.hide();});
	
	this.add = function(msg){
		if(that.is_hidden){that.show();}
		var timestamp = new Date().getTime();
		var id = w_name+'-'+timestamp;
		var hcode = '<p style="clear:both; font-size:85%; margin-bottom:8px; font-weight:normal;" id="'+ id +'" class="'+ msg_class +'" >' + msg + '</p>';
		$(hcode).appendTo(that.w_selector());
		var options = {};
		setTimeout(function() {
				$( '#'+id ).effect( 'fade', options, 500, function(){$('#'+id).remove();that.check();} );
			}, 3000 );
	};
	this.check = function(){
		var content = $('.'+msg_class);
		//console.log(content);
		if(content.length==0){
			that.hide();
		}
	};
	this.show = function(){
		//var hcode = '<div class="ui-bar ui-bar-e" id="' + w_name + '"><h3 style="float:left; margin-top:8px;">Notification</h3><div style="float:right; margin-top:4px;"><a href="#" data-role="button" data-icon="delete" data-iconpos="notext" title="Button" data-theme="e"></a></div></div>';
		var page = $.mobile.activePage;
		//var target_selector = $.mobile.activePage.find('div.ui-navbar').after($(hcode));
		//var target_selector = $.mobile.activePage.find('div.ui-navbar').after(bar_selector);
		var target_selector = $.mobile.activePage.prepend(bar_selector);
		bar_selector = null;
		//console.log(target_selector);
		//console.log($.mobile.activePage);
		//console.log($.mobile.activePage.find('div.ui-navbar'));
		that.is_hidden = false;
		//On pagebeforechange event, we want to clean the notification bar and hide it 
		$(document).on('pagebeforechange',function(){$('.'+msg_class).remove();that.hide();});
		
	};
	this.hide = function(){
		//console.log($(that.w_selector()));
		
		if(bar_selector==null){
			
			bar_selector = $(that.w_selector()).detach();
		}
		that.is_hidden = true;
		//On pagebeforechange event, we want to clean the notification bar and hide it 
		//$(document).off('pagebeforechange',that.clean());
	};
	this.w_selector= function(){
		return $('#'+w_name);
	}
	/*
	this.clean = function(){
		$('.'+msg_class).remove();that.hide();	
	}*/
}
//initiate notification instance
notify = new notification('notify');	

//endless loop to ensure page refresh
/*function loop_check(){
	var interval = 10000; //This is the ignition interval before the loop starts again;
	channel_request('loop_check','','',function(data){
		//excute code
		//then trigger loop again
		t = setTimeout('loop_check()',interval);
	});
}*/

var loop = function(time_interval){
	var interval;
	var that = this;
	var on = true; //true when the loop is supposed to be on and false for off
	if(time_interval){
			interval = time_interval;
	}
	this.start = function(){
		if(on){
			channel_request('loop_check','','',function(data){
				//execute code
				//then trigger loop again
				console.log('coucou');
				t = setTimeout(function(){that.start();},interval);
			});			
		}
	}
	this.stop = function(){
		on = false;
	}
};
loop_check = new loop(10000);


//*********************************************************
//Provides a channel for server notifications
//*********************************************************

var channel_back = function(){
	var time_last_msg;
	var that = this;
	var on = true; //true when the loop is supposed to be on and false for off

	this.start = function(){
		if(on){
			channel_request('loop_check','','',function(data){
				//execute code
				//console.log('Update flags, trigger notifications');				
				//then trigger loop again
				if(data['notify']['wail']==1){
					var msg = 'You have '+data['notify']['wail']+' new message.';
					notify.add(msg);
				}
				if(data['notify']['wail']>1){
					var msg = 'You have '+data['notify']['wail']+' new messages.';
					notify.add(msg);				
				}
				t = setTimeout(function(){that.start();},2000);
			});			
		}
	}
	/*
	this.msg = function(data,callback){
		var input;
		if(data!=null){
			input = data;
		}
		channel_request('loop_check',input,'',callback(data){
			//execute code
			//then trigger loop again
			console.log('coucou');
			t = setTimeout(function(){that.start();},interval);
		});			
				

	}*/
	this.stop = function(){
		on = false;
	}
};
notif_channel = new channel_back();


//*********************************************************	
//Space module
/*
function space(name_space){
	var last_update = 0;
	var total_quota = 0;
	var used_quota = 0;
	var name = name_space;
	var that = this;
	
	this.get_used_quota = function(){
		return used_quota;
	}
	
	this.get_total_quota = function(){
		return total_quota;
	}
	
	this.get_left_quota = function(){
		return total_quota-used_quota;
	}	
	
	
	function constructor(){
		
	}	
	
	function update(){
		
	}

	function render_template(){
	var tmpl-array = new Array(	'<h3>Space left</h3>',
								'<div id="left-space-bar" style="width:50%"></div>',
								'<div>Your are using <span id="space-used-val"> </span> of your <span id="space-total-val"> </span>. You have <span id="space-left-val"> </span> % of space left.</div>'
								);
	
	}
	
}
*/

	function reset_pwd(){
			var fpwd = $('input#formerpassword').attr('value');
			var pwd = $('input#newpassword').attr('value');
			if($('input#newpassword').attr('value')!=$('input#renewpassword').attr('value')){
				$('#renewpassword_comment').text('Passwords do not match !');	
				$('#mg_box').text('Passwords do not match !');
				//return false;
			}
			var input = new Array(fpwd,pwd);
			channel_request('reset_pwd', input, '',function(data){
				var msg;
				if(data['reset_pwd']['error']==0){
					msg = "Password was reset successfully";
				}else if (data['reset_pwd']['error']==1){
					msg = "Error : the password provided is empty";
				}else if (data['reset_pwd']['error']==2){
					msg = "Error : the password provided is too long (max 20 characters)";
				}else if (data['reset_pwd']['error']==3){
					msg = "Error : the current password provided is wrong.";
				}
				notify.add(msg);				
			});
			$('input#newpassword').attr('value','');
			$('input#formerpassword').attr('value','');
			$('input#renewpassword').attr('value','');				
					
	}
	
	wagapi = {
		current_doc: {
			id: null,
			name:null,
			extension:null,
			size:null,
			date_in:null,
			type:null
		},
		current_language:null,
		lang:{
			current:null,
			str:[]
		}
	};

	
	
		
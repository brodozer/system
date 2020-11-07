'use strict';
var new_form ={
	opt:{

	},
	def:{
		phone_mask:'+7(999)999-99-99',
		def_val:'+7',
		thanks_timeout:50,
		bizon:false,
		bitrix:true,
		own:false,
		oki_toki:false,
		get_course:false,
		thanks_selector:false,
		thanks_function:function(){

			new_form.default_popup_show();
		}
	},
	defined:function(data){
		var undef,undef_vars = [undef,null,false];
		for (var i = 0; i < undef_vars.length; i++) {
			if(data == undef_vars[i]){
				return false;
			}
		}
		return true;
		
	},
	default_popup_show:function(){

		var _t = this;

		var $pop = $('.njs-pop');
		var $b = $('body')
		
		try{
			yt.pause_all();
		}catch(e){

		}



		if(!_t.defined($pop)){
			return;
		}
		$pop.fadeIn(250);


		$b.css('overflow','hidden');
		$pop.find('.thanks__close').unbind('click').click(function(){
			$pop.fadeOut(250);

			//$('.njs-pop').removeClass('opened');
			//
			//
			try{
				yt.pause_all();
			}catch(e){

			}
			
			// var path = document.location.pathname
			// var def_thanks = '/thanks';
			// 	if(path.indexOf(def_thanks)>-1){
			// 		path = path.replace(def_thanks,'');

			// 		try{
			// 			url('/path');
			// 		}
			// 	}

			$b.removeAttr('style');
		});
	},
	success_send:function(form_obj){
		var _t = this;

		var main_target_event = function(){
			var l_try = function(funct){

				try{
					funct();
				}catch(e){

				}
			}


			console.log('main_target_event form_obj = ',form_obj)

			var global_ym_id = undefined;
			!function() {
			var myRegexp = /ym\((.+?), \"init\"/;
			for (var i = 0; i < document.scripts.length; i++) {
			  var match = myRegexp.exec(document.scripts[i].text);
			  if (match) {
			    global_ym_id = match[1];
			    break;
			  }
			}
			}();

			var event = 'lead';

			l_try(function(){
				dataLayer.push({ 
					'event':'autoEvent',
		            'eventCategory':'Lead', 
		            'email': form_obj.email,
		            'phone': form_obj.phone                    
		        }); 

			}); 



		}
				
		main_target_event();



		setTimeout(function(){

			_t.opt.thanks_function();

		},_t.opt.thanks_timeout)
	},

	inject:function(){
		var _t = this;
		var style = '<style>';
		var src = 'img/right.png';

		if(typeof source_url != 'undefined'){

			src = source_url+src;
		}

		style += '.njs-pop{';
		style +=  'background-color: white;';		
		style +=  'display: none;';
		style +=  'position: fixed;';
		style +=  'z-index: 2000;';
		style +=  'left: 0;';
		style +=  'top:0;';
		style +=  'width: 100%;';
		style +=  'height:100%;';
		style +=  'overflow: auto;';
		style +=  '}';
		style +=  '.njs-pop .njs-pop-wrap{';
		style +=  'background-color: white;';
		style +=  '}';
		style +=  '.njs-pop .njs-pop-wrap .njs-pop-close{';
		style +=  'position: absolute;';
		style +=  'right:20px;';
		style +=  'top:20px;';
		style +=  'font-size:24px;';
		style +=  'cursor:pointer;';
		style +=  'text-decoration: underline;';
		style +=  'z-index: 20;';
		style +=  '}';
		style +=  '.njs-pop .njs-pop-wrap .njs-pop-close:hover{';
		style +=  'text-decoration: none;';
		style +=  '}';
		style +=  '.njs-pop .njs-pop-body>div{';
		style +=  'min-height:100vh;';
		style +=  '}';

		style +=  'input.error{';
		style +=  'border-color:#ff7e7e;';
		style +=  '}';

		style +=  '.s-mask{';
		style +=  'position:relative;';
		style +=  'box-sizing: border-box;';
		style +=  'width: 100%';
		style +=  '}';
		style +=  '.s-mask .s-mask-flag{';
		style +=  'position:absolute;';
		style +=  'left:0;';
		style +=  'top:0;';
		style +=  'height:100%;';
		style +=  'width:78px;';
		style +=  'cursor:pointer;';	

		style +=  'background-repeat: no-repeat;';
		style +=  'background-size: 48px;';
		style +=  'background-position: center;';
		style +=  'border-color: transparent!important;';


		style +=  '}';
		style +=  '.s-mask input{';
		style +=  'padding-left: 84px!important;';
		style +=  '}';
		style +=  '.s-mask .s-mask-flag .s-mask-flag-iw{';
		style +=  'position:absolute;';
		style +=  'left:0;';
		style +=  'top:0;';
		style +=  'height:100%;';
		style +=  'width:100%;';
		style +=  'background-color: #e8e8e8;';

		style +=  '}';
		style +=  '.s-mask .s-mask-flag .s-mask-flag-iw:after{';

		style +=  'content:"";';
		style +=  'position:absolute;';

		style +=  'right:4px;';
		style +=  'top:50%;';

		style +=  'margin-top:-5px;';
		style +=  'transform:rotate(90deg);';
		style +=  'filter:invert(1);';

		style +=  'height:10px;';
		style +=  'width:10px;';
		style +=  'background-image: url('+src+');';;
		style +=  'background-position: center;';
		style +=  'background-repeat: no-repeat;';
		style +=  'background-size: contain;';
		style +=  '}';
		style +=  '.s-mask .s-mask-flag img{';

		style +=  'position:absolute;';
		style +=  'left:4px;';
		style +=  'top:50%;';
		style +=  'margin-top:-24px;';


		style +=  '}';




		style +=  '.s-mask .s-mask-list{';
		style +=  'display: none;';
		style +=  'position: fixed;';
		style +=  'top: 0;';
		style +=  'bottom: 0;';
		//style +=  'width: 280px;';
		style +=  'background: white;';
		style +=  'box-sizing: border-box;';
		style +=  'box-shadow: 0 0 20px 20px rgb(0 0 0 / 29%);';
		style +=  'overflow: auto;';
		style +=  'z-index: 100;';
		style +=  '}';

		style +=  '.s-mask .s-mask-list .s-mask-list-cw{';
		style +=  'padding: 0px 0px;';

		style +=  'line-height: 36px;';
		style +=  'height: 36px;';
		style +=  'overflow: hidden;';

		style +=  'border-bottom: 1px solid #ccc;';
		style +=  'cursor:pointer;';

		style +=  '}';

		style +=  '.s-mask .s-mask-list .s-mask-list-cw div{';

		style +=  'padding:0 5px;';

		style +=  'float:left;';
		style +=  'color:#ccc';
		style +=  '}';



		style +=  '.s-mask .s-mask-list .s-mask-list-cw div.s-mask-list-flag{';


		style +=  'height: 36px;';
		style +=  'width: 46px;';

		style +=  'background-repeat: no-repeat;';
		style +=  'background-size: contain;';
		style +=  'background-position: center;';
		style +=  '}';

		style +=  '.s-mask .s-mask-list .s-mask-list-cw div.s-mask-list-code{';


		style +=  'width: 70px;';
		style +=  '}';

		style +=  '.s-mask .s-mask-list .s-mask-list-cw div.s-mask-list-name{';


		style +=  'width: calc(100% - 120px);';

		style +=  'color: black;';

		style +=  'line-height: 32px;';
		style +=  '}';

		style +=  '.s-mask .s-mask-list .s-mask-list-cw div.s-mask-list-name span{';

		style +=  'line-height: 16px;';
		style +=  'vertical-align: middle;';
		style +=  'display: inline-block;';
		style +=  'font-size: 12px;';

		style +=  '}';
		style += '</style>';

		var html = '<div class="njs-pop">';
		html += '<div class="njs-pop-wrap">';
		html += '<div class="njs-pop-close">Закрыть</div>';
		html += '<div class="njs-pop-body">';
		html += '</div>';
		html += '</div>';
		html += '</div>';

		html = style+html;

		var $b = $('body');
		if($b.find('.njs-pop').length===0){

			$b.append(html);
		}


		if (_t.opt.get_course) {
			var gc_form_html = '<iframe src="" id="gc_iframe" name="gc_iframe" frameborder="0" style="display:none;"></iframe> <form id="ltForm9216354" action="https://dnkbusiness.getcourse.ru/pl/lite/block-public/process-html?id=791398734" method="post" data-open-new-window="0" target="gc_iframe"><input type="hidden" name="formParams[setted_offer_id]" ><br><input class="input" type="text" maxlength="60" placeholder="E-mail" name="formParams[email]" value="" ><br><input class="input" type="text" maxlength="60" placeholder="Телефон" name="formParams[phone]" value=""><br><button type="submit" data-dialers_id="80" id="button4044787" class="btn shine btn-m" onclick="if(window[\'btnprs5f180c63dab31\']){return false;}window[\'btnprs5f180c63dab31\']=true;setTimeout(function(){window[\'btnprs5f180c63dab31\']=false},6000);return true;"> ЗАПИСАТЬСЯ НА МАСТЕР-КЛАСС</button><br><input type="hidden" id="2327105f180c63cfd1e" name="__gc__internal__form__helper" class="__gc__internal__form__helper" value=""> <input type="hidden" id="2327105f180c63cfd1eref" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref" value=""> <input type="hidden" name="requestTime" value="1595411555"> <input type="hidden" name="requestSimpleSign" value="4b5d618b85f98fa60d2ad25bf97c8e1a"> <input type="hidden" name="isHtmlWidget" value="1"/> </form> <span id="gccounterImgContainer"></span> <script>window.onload=function(){let loc=document.getElementById("2327105f180c63cfd1e"); loc.value=window.location.href; let ref=document.getElementById("2327105f180c63cfd1eref"); ref.value=document.referrer;}\<\/script\> \<script async defer\> window.onload=function(){let statUrl="https://dnkbusiness.getcourse.ru/stat/counter?ref=" + encodeURIComponent(document.referrer) + "&loc=" + encodeURIComponent(document.location.href); document.getElementById(\'gccounterImgContainer\').innerHTML="\<img width=1 height=1 style=\'display:none\' id=\'gccounterImg\' src=\'" + statUrl + "\'/>";}\</script\>';
			$b.find('.form-wrap').html(gc_form_html);
		}

		console.log('_t.opt.thanks_selector = ',_t.opt.thanks_selector)
		if(_t.opt.thanks_selector){

			$b.find(_t.opt.thanks_selector).clone().appendTo('.njs-pop-body');

			if(typeof yt !='undefined'){

				yt.init();
			}
			
		}

	},
	submit:{
		bitrix:function($t,callback){

			console.log('form submit');
			var _t = this;

			var msg = $t.serialize();

			console.log('msg = ',);
			var form_obj = JSON.parse('{"' + decodeURIComponent(msg.replace(/&/g, "\",\"").replace(/=/g,"\":\"")) + '"}');
			//form_obj.bizon_id = _t.th.opt.bizon;
			form_obj.ref = document.location.href;
			//return;
			$.ajax({
				type: "POST",
				//url: "index.php",
				url: '/api/Bitrix/send.php',
				data: form_obj,
				success: function(data){
					if(data !== 'OK'){
						alert("Возникла ошибка!");
					}
					if(callback){
						callback(form_obj);
					}
				},
				error:  function(xhr, str){
					alert("Возникла ошибка!");
					if(callback){
						callback(form_obj);
					}
				}
			});

		},
		bizon:function($t,callback){

			console.log('form submit');
			var _t = this;

			var msg = $t.serialize();

			console.log('msg = ',);
			var form_obj = JSON.parse('{"' + decodeURIComponent(msg.replace(/&/g, "\",\"").replace(/=/g,"\":\"")) + '"}');
			form_obj.bizon_id = _t.th.opt.bizon;
			form_obj.ref = document.location.href;
			//return;
			$.ajax({
				type: "POST",
				//url: "index.php",
				url: '/api/SendBizon/',
				data: form_obj,
				success: function(data){
					if(data !== 'OK'){
						alert("Возникла ошибка!");
					}
					if(callback){
						callback(form_obj);
					}
				},
				error:  function(xhr, str){
					alert("Возникла ошибка!");
					if(callback){
						callback(form_obj);
					}
				}
			});

		},
		own:function($t,callback){

			console.log('form submit');
			var _t = this;

			var msg = $t.serialize();

			console.log('msg = ',);
			var form_obj = JSON.parse('{"' + decodeURIComponent(msg.replace(/&/g, "\",\"").replace(/=/g,"\":\"")) + '"}');
			//return;
			$.ajax({
				type: "POST",
				//url: "index.php",
				url: _t.th.opt.own,
				data: msg,
				success: function(data){
					if(callback){
						callback(form_obj);
					}
				},
				error:  function(xhr, str){
					alert("Возникла ошибка!");
					if(callback){
						callback(form_obj);
					}
				}
			});

		},
		oki_toki:function($t,callback){

			console.log('form submit');


			var _t = this;

			var msg = $t.serialize();

			console.log('msg = ',);
			var form_obj = JSON.parse('{"' + decodeURIComponent(msg.replace(/&/g, "\",\"").replace(/=/g,"\":\"")) + '"}');
			//return;
			form_obj.url =  location.href;

			form_obj.dialer_id =  _t.th.opt.oki_toki;
			
			if(form_obj['formParams[email]']){
				form_obj.email = form_obj['formParams[email]'];
			}
			if(form_obj['formParams[name]']){
				form_obj.name = form_obj['formParams[name]'];

			}
			if(form_obj['formParams[phone]']){
				form_obj.phone = form_obj['formParams[phone]'];

			}
			
			$.ajax({
				type: "POST",
				//url: "index.php",
				url: "/okiToki/okiToki.php",
				data: form_obj,
				success: function(data){

					if(callback){
						callback(form_obj);
					}
					//},50.0)
				},
				error:  function(xhr, str){
					alert("Возникла ошибка!");
					if(callback){
						callback(form_obj);
					}
				}
			});

		},
	},
	phone_codes:false,
	rebind:function(){
		var _t = this;

		var $forms = $("form");
		
		var $p_inp = $forms.find('input[name="phone"],input[name="formParams[phone]"]');
		var $n_inp = $forms.find('input[name="name"],input[name="formParams[name]"]');
		var $e_inp = $forms.find('input[name="email"],input[name="formParams[email]"]');

		// function phone_mask($phone){

		// 	var src = 'libs/itl/js/utils.js';

		// 	if(typeof source_url != 'undefined'){

		// 		src = source_url+src;
		// 	}

		// 	$.mask.definitions['9']='';
		// 	$.mask.definitions['d']='[0-9]';
		// 	$phone.mask("+7 ddd ddd-dd-dd");
		// 	$phone.intlTelInput({
		// 		autoHideDialCode:false,
		// 		autoPlaceholder:"aggressive",
		// 		placeholderNumberType:"MOBILE",
		// 		preferredCountries:['ru','th'],
		// 		separateDialCode:true,
		// 		utilsScript:src,
		// 		customPlaceholder:function(selectedCountryPlaceholder,selectedCountryData){
		// 			return '+'+selectedCountryData.dialCode+' '+selectedCountryPlaceholder.replace(/[0-9]/g,'_');
		// 		},
		// 		//allowDropdown:false,
		// 		//dropdownContainer:document.body,
		// 		//excludeCountries:["us"],
		// 		//formatOnDisplay:false,
		// 		//geoIpLookup:function(callback){
		// 		//	$.get("http://ipinfo.io",function(){},"jsonp").always(function(resp){
		// 		//		var countryCode =(resp&&resp.country)?resp.country:"";
		// 		//		callback(countryCode);
		// 		//	});
		// 		//},
		// 		//hiddenInput:"full_number",
		// 		initialCountry:"ru",
		// 		//localizedCountries:{'de':'Deutschland'},
		// 		//nationalMode:true,
		// 		//onlyCountries:['us','gb','ch','ca','do'],
		// 	});
		// 	$phone.on("close:countrydropdown",function(e,countryData){
		// 		$(this).val('');
		// 		console.log('change country');
		// 		//var mask=$(this).closest('.intl-tel-input').find('.selected-dial-code').html()+' '+$(this).attr('placeholder').replace(/[0-9]/g,'d');
		// 		$(this).mask($(this).attr('placeholder').replace(/[_]/g,'d'));
		// 	});
		// }

		// $(document).ready(function(){
		// 	phone_mask($p_inp);
	
		// });
		

		var supermask = function($phone_inp){

			var src = 'js/phone-codes.json';

			if(typeof source_url != 'undefined'){

				src = source_url+src;
			}

			

			
			



		    ///////check wrap -> reload wrap content
		    var jq_inps = [];

		    $phone_inp.each(function(index, el) {
		    	var $t = $(this);
		    	if(!$t.parent().hasClass('s-mask')){
	    			var $new_inp = $t.clone();
	    			var html = '<div class="s-mask"><div class="s-mask-flag"></div><div class="s-mask-list"></div></div>';
	    			var $inp_wrap = $t.parent();
	    			$(html).insertBefore($t);
	    			$t.remove();
	    			var $s_mask = $inp_wrap.find('.s-mask')
	    			
	    			$s_mask.append($new_inp);
	    			$s_mask.css('margin',$new_inp.css('margin'));
	    			$new_inp.css('margin',0);

	    			var $s_flag = $s_mask.find('.s-mask-flag');

	    			$s_flag.css('border',$new_inp.css('border'));
	    			$s_flag.css('border-radius',$new_inp.css('border-radius'));

	    			jq_inps[jq_inps.length] = $new_inp;
		    		//$phone_inp = $s_wrap.find('input');
  			
		    	}else{

	    			jq_inps[jq_inps.length] = $t;
		    	}
		    });
		    
		    ///////check mask-data->get mask date
		    if(!_t.phone_codes){
		    	$.ajax({
		    		url: src,
		    		type: 'GET',
		    		dataType: 'json',
		    		success:function(response){
		    			_t.phone_codes = response;
		    			codes_ready();
		    		}
		    	});
		    	

		    }else{
		    	codes_ready();
		    }
		    

		    var codes_ready = function(){

		    	try{

			        $.ajax({
			        	type: 'GET',
			        	url: '//ipinfo.io',
			        	dataType: 'json',
			            success: function(resp) {

			            	for (var i = 0; i < _t.phone_codes.length; i++) {
			            		if(_t.phone_codes[i].cc == resp.country){
			            			_t.opt.def_val = '+'+_t.phone_codes[i].mask.replace(/\D/g, "");
			            		}
			            	}
			            	//response -> _t.opt.def_val
			            	def_ready();
			            },
			            error:function(argument) {
			            	def_ready();
			            }
			        });    

		    	}catch(e){
		    		def_ready();
		    	}

		    }


		    var def_ready = function(){

				var maskList = $.masksSort(_t.phone_codes, ['#'], /[0-9]|#/, "mask");
			    var maskOpts = {
			        inputmask: {
			            definitions: {
			                '#': {
			                    validator: "[0-9]",
			                    cardinality: 1
			                }
			            },
			            showMaskOnHover: false,
			            autoUnmask: false,
			            clearMaskOnLostFocus: false,
			            //clearMaskOnLostFocus: true,
			            

			        },
		            onMaskChange: function(maskObj, determined) {
		            	///////rebind event: change mask -> change flag
		                if (determined) {
		                    $(this).parent().find('.s-mask-flag').html('<div class="s-mask-flag-iw"><img src="https://www.countryflags.io/'+maskObj.cc+'/flat/48.png"></div>');
		                    //$(this).parent().find('.s-mask-flag').css('background-image','url(https://www.countryflags.io/'+maskObj.cc+'/flat/48.png)');
		                	$(this).attr('placeholder',maskObj.mask.replace(/#/gi,'9'));
		                }
		            },
			        match: /[0-9]/,
			        replace: '#',
			        list: maskList,
			        listKey: "mask"
			    };
			    //$phone_inp.removeAttr('placeholder');
			    
			    for (var i = 0; i < jq_inps.length; i++) {
			    	jq_inps[i].inputmasks(maskOpts);
			    	jq_inps[i].val(_t.opt.def_val).change();



					jq_inps[i].unbind('focus').focus(function(){
						$(this).removeClass('error');
					});

			        jq_inps[i].unbind('blur').blur(function() {
						var $t = $(this);

						// if(!$p_inp.intlTelInput("isValidNumber")){ 
						// 	console.log($p_inp.intlTelInput("isValidNumber"));
					 	// 	$t.addClass('error')
						// } else{
						//    $t.removeClass('error');		    
					 	// }
						

			            if(!$t.inputmask('isComplete')){
			                $t.addClass('error')
			               
			            }else{
			                $t.removeClass('error');

			            }
			        });    
					

				    ///////reload flag btn
				    
	            	for (var j = 0; j < _t.phone_codes.length; j++) {
            			var test_val = '+'+_t.phone_codes[j].mask.split('#')[0].replace(/\D/g, "");
            			if(_t.opt.def_val == test_val){



		                    jq_inps[i].parent().find('.s-mask-flag').html('<div class="s-mask-flag-iw"><img src="https://www.countryflags.io/'+_t.phone_codes[j].cc+'/flat/48.png"></div>');            				
		                    jq_inps[i].attr('placeholder',_t.phone_codes[j].mask.replace(/#/gi,'9'));
		                    //jq_inps[i].parent().find('.s-mask-flag').css('background-image','url(https://www.countryflags.io/'+_t.phone_codes[j].cc+'/flat/48.png)');
            			}
	            	}

				    

				    
				    
	            	var reload_country_list = function($w) {
	            		if(!$w){
	            			$w = $('.s-mask').find('.s-mask-list');
	            		}
	            		
	            		var favorites = ['RU','UA','KZ','BY'];
	            		_t.phone_codes.sort(function (a, b) {
            				var a_favorit_index = 'none';
            				var b_favorit_index = 'none';
	            			var a_is_favorite = false;

	            			for (var i = 0; i < favorites.length; i++) {
	            				if(a.cc == favorites[i]){
	            					a_is_favorite = true;
	            					a_favorit_index = i;
	            				}
	            				if(b.cc == favorites[i]){
	            					b_favorit_index = i;
	            					a_is_favorite = true;
	            				}
	            			}
	            			if(a_is_favorite){

	            				if(a_favorit_index == 'none'){

						    		return 1;

	            				}else if(b_favorit_index == 'none'){

						    		return -1;

	            				}else if(a_favorit_index<b_favorit_index){

						    		return -1;
	            				}else{

						    		return 1;
	            				}

	            			}else{

	            				if(a.cc<b.cc){

						    		return -1;
	            				}else if(a.cc>b.cc){
						    		return 1;

	            				}
	            			}
	            			return 0;
						});

	            		var get_mask = function(str) {
	            			return '+'+str.split('#')[0].replace(/\D/g, "");
	            		}
	            		var added = [];
						for (var i = 0; i < _t.phone_codes.length; i++) {
							var has = false;
							for (var j = 0; j < added.length; j++) {
								if(added[j].name_ru == _t.phone_codes[i].name_ru){
									has = true;
									if(get_mask(added[j].mask).length > get_mask(_t.phone_codes[i].mask).length){
										added[j] = _t.phone_codes[i];
									}
								}
							}
							if(!has){
								added[added.length] = _t.phone_codes[i];
							}
							
						}


	            		var html = '';
	            		for (var i = 0; i < added.length; i++) {
	            			added[i].tel_code = get_mask(added[i].mask);
	            			html+='<div class="s-mask-list-cw">';
	            			html+='<div class="s-mask-list-flag" style="background-image:url(https://www.countryflags.io/'+added[i].cc+'/flat/48.png)"></div>';
	            			html+='<div class="s-mask-list-code">'+added[i].tel_code+'</div>';
	            			html+='<div class="s-mask-list-name"><span>'+added[i].name_ru+'</span></div>';
	            			html+='</div>';


	            		}
	            		$w.html(html);

	            		$('body').unbind('click').click(function() {
	            			$('.s-mask-list').hide();
	            		});

	            		$('.s-mask-list-cw').unbind('click').click(function() {
	            			var $t = $(this);
	            			$t.closest('.s-mask').find('input').val($t.find('.s-mask-list-code').text()).change();
	            		});

	            	}

				    ///////reload select country
				    ///////event: select coutry -> change mask (+ change flag)
				    
				    ///////event: open/close select-list
				    
				    $('.s-mask-flag').unbind('click').click(function(e){
				    	e.stopPropagation();
				    	var $w = $(this).closest('.s-mask');
				    	var $list = $w.find('.s-mask-list');
				    	if($list.children().length == 0){

	            			reload_country_list($list);
				    	}
	            		$list.width($w.find('input').outerWidth());
	            		$list.show();
				    });

			    }



		    }
		    
		    
        
		}


		var load_multi = function(callback){

			var script = document.createElement('script');
			script.onload = function() {
				var recurs = function(){

					if(typeof $().inputmask('isComplete') == 'undefined'){
						setTimeout(recurs,100);
					}else{

						callback();
					}
				}
				recurs();

			};
			script.src = "//cdnjs.cloudflare.com/ajax/libs/inputmask-multi/1.2.0/js/jquery.inputmask-multi.min.js";
			document.getElementsByTagName('head')[0].appendChild(script);	

		}

		if(typeof $().inputmask == 'undefined'){

			var script = document.createElement('script');
			script.onload = function() {
				var recurs = function(){

					if(typeof $().inputmask == 'undefined'){
						setTimeout(recurs,100);
					}else{

						load_multi(function(){

							supermask($p_inp);

						});

					}
				}
				recurs();
			};
			script.src = "//cdn.rawgit.com/RobinHerbots/Inputmask/3.2.7/dist/min/jquery.inputmask.bundle.min.js";
			document.getElementsByTagName('head')[0].appendChild(script);	
		}
		var foc = function(){
			$(this).removeClass('error');
		};
		$n_inp.unbind('focus').focus(foc);
		$e_inp.unbind('focus').focus(foc);
		

		$n_inp.unbind('blur').blur(function(){
			var $t = $(this);
			if($t.val().length < 2 ){
				$t.addClass('error');
			}
		});

		$e_inp.unbind('blur').blur(function(){
			
			var validateEmail = function(email) {
				var regexp = /^(?!\.)((?!.*\.{2})[a-zA-Z0-9\u0080-\u00FF\u0100-\u017F\u0180-\u024F\u0250-\u02AF\u0300-\u036F\u0370-\u03FF\u0400-\u04FF\u0500-\u052F\u0530-\u058F\u0590-\u05FF\u0600-\u06FF\u0700-\u074F\u0750-\u077F\u0780-\u07BF\u07C0-\u07FF\u0900-\u097F\u0980-\u09FF\u0A00-\u0A7F\u0A80-\u0AFF\u0B00-\u0B7F\u0B80-\u0BFF\u0C00-\u0C7F\u0C80-\u0CFF\u0D00-\u0D7F\u0D80-\u0DFF\u0E00-\u0E7F\u0E80-\u0EFF\u0F00-\u0FFF\u1000-\u109F\u10A0-\u10FF\u1100-\u11FF\u1200-\u137F\u1380-\u139F\u13A0-\u13FF\u1400-\u167F\u1680-\u169F\u16A0-\u16FF\u1700-\u171F\u1720-\u173F\u1740-\u175F\u1760-\u177F\u1780-\u17FF\u1800-\u18AF\u1900-\u194F\u1950-\u197F\u1980-\u19DF\u19E0-\u19FF\u1A00-\u1A1F\u1B00-\u1B7F\u1D00-\u1D7F\u1D80-\u1DBF\u1DC0-\u1DFF\u1E00-\u1EFF\u1F00-\u1FFFu20D0-\u20FF\u2100-\u214F\u2C00-\u2C5F\u2C60-\u2C7F\u2C80-\u2CFF\u2D00-\u2D2F\u2D30-\u2D7F\u2D80-\u2DDF\u2F00-\u2FDF\u2FF0-\u2FFF\u3040-\u309F\u30A0-\u30FF\u3100-\u312F\u3130-\u318F\u3190-\u319F\u31C0-\u31EF\u31F0-\u31FF\u3200-\u32FF\u3300-\u33FF\u3400-\u4DBF\u4DC0-\u4DFF\u4E00-\u9FFF\uA000-\uA48F\uA490-\uA4CF\uA700-\uA71F\uA800-\uA82F\uA840-\uA87F\uAC00-\uD7AF\uF900-\uFAFF\.!#$%&'*+-/=?^_`{|}~\-\d]+)@(?!\.)([a-zA-Z0-9\u0080-\u00FF\u0100-\u017F\u0180-\u024F\u0250-\u02AF\u0300-\u036F\u0370-\u03FF\u0400-\u04FF\u0500-\u052F\u0530-\u058F\u0590-\u05FF\u0600-\u06FF\u0700-\u074F\u0750-\u077F\u0780-\u07BF\u07C0-\u07FF\u0900-\u097F\u0980-\u09FF\u0A00-\u0A7F\u0A80-\u0AFF\u0B00-\u0B7F\u0B80-\u0BFF\u0C00-\u0C7F\u0C80-\u0CFF\u0D00-\u0D7F\u0D80-\u0DFF\u0E00-\u0E7F\u0E80-\u0EFF\u0F00-\u0FFF\u1000-\u109F\u10A0-\u10FF\u1100-\u11FF\u1200-\u137F\u1380-\u139F\u13A0-\u13FF\u1400-\u167F\u1680-\u169F\u16A0-\u16FF\u1700-\u171F\u1720-\u173F\u1740-\u175F\u1760-\u177F\u1780-\u17FF\u1800-\u18AF\u1900-\u194F\u1950-\u197F\u1980-\u19DF\u19E0-\u19FF\u1A00-\u1A1F\u1B00-\u1B7F\u1D00-\u1D7F\u1D80-\u1DBF\u1DC0-\u1DFF\u1E00-\u1EFF\u1F00-\u1FFF\u20D0-\u20FF\u2100-\u214F\u2C00-\u2C5F\u2C60-\u2C7F\u2C80-\u2CFF\u2D00-\u2D2F\u2D30-\u2D7F\u2D80-\u2DDF\u2F00-\u2FDF\u2FF0-\u2FFF\u3040-\u309F\u30A0-\u30FF\u3100-\u312F\u3130-\u318F\u3190-\u319F\u31C0-\u31EF\u31F0-\u31FF\u3200-\u32FF\u3300-\u33FF\u3400-\u4DBF\u4DC0-\u4DFF\u4E00-\u9FFF\uA000-\uA48F\uA490-\uA4CF\uA700-\uA71F\uA800-\uA82F\uA840-\uA87F\uAC00-\uD7AF\uF900-\uFAFF\-\.\d]+)((\.([a-zA-Z\u0080-\u00FF\u0100-\u017F\u0180-\u024F\u0250-\u02AF\u0300-\u036F\u0370-\u03FF\u0400-\u04FF\u0500-\u052F\u0530-\u058F\u0590-\u05FF\u0600-\u06FF\u0700-\u074F\u0750-\u077F\u0780-\u07BF\u07C0-\u07FF\u0900-\u097F\u0980-\u09FF\u0A00-\u0A7F\u0A80-\u0AFF\u0B00-\u0B7F\u0B80-\u0BFF\u0C00-\u0C7F\u0C80-\u0CFF\u0D00-\u0D7F\u0D80-\u0DFF\u0E00-\u0E7F\u0E80-\u0EFF\u0F00-\u0FFF\u1000-\u109F\u10A0-\u10FF\u1100-\u11FF\u1200-\u137F\u1380-\u139F\u13A0-\u13FF\u1400-\u167F\u1680-\u169F\u16A0-\u16FF\u1700-\u171F\u1720-\u173F\u1740-\u175F\u1760-\u177F\u1780-\u17FF\u1800-\u18AF\u1900-\u194F\u1950-\u197F\u1980-\u19DF\u19E0-\u19FF\u1A00-\u1A1F\u1B00-\u1B7F\u1D00-\u1D7F\u1D80-\u1DBF\u1DC0-\u1DFF\u1E00-\u1EFF\u1F00-\u1FFF\u20D0-\u20FF\u2100-\u214F\u2C00-\u2C5F\u2C60-\u2C7F\u2C80-\u2CFF\u2D00-\u2D2F\u2D30-\u2D7F\u2D80-\u2DDF\u2F00-\u2FDF\u2FF0-\u2FFF\u3040-\u309F\u30A0-\u30FF\u3100-\u312F\u3130-\u318F\u3190-\u319F\u31C0-\u31EF\u31F0-\u31FF\u3200-\u32FF\u3300-\u33FF\u3400-\u4DBF\u4DC0-\u4DFF\u4E00-\u9FFF\uA000-\uA48F\uA490-\uA4CF\uA700-\uA71F\uA800-\uA82F\uA840-\uA87F\uAC00-\uD7AF\uF900-\uFAFF]){2,63})+)$/i;
				return regexp.test(email);
			}
			var $t = $(this);
			if(!validateEmail($t.val())){
				$t.addClass('error');
			}

		});

		var need_stuff = true;

		$forms.unbind('submit').submit(function(e){
			if(need_stuff){

				e.preventDefault();
			

				var $t = $(this);

				$t.find('input').trigger('focus').trigger('blur');

				if ($t.find('input.error').length>0) {
					console.log('form not_valid');
					return;
				}


				var recurs_submitter = function(sub_send,callback){

					var sub = function(type,callback_in){
						var back = function(data){
							if(callback_in){
								callback_in(data);
							}
						}
						if(type == 'bizon'){
							_t.submit.bizon($t,back);
						}else if(type == 'oki_toki'){
							_t.submit.oki_toki($t,back);
						}else if(type == 'own'){
							_t.submit.own($t,back);
						}else if(type == 'bitrix'){
							_t.submit.bitrix($t,back);
						}

					}
					var i = 0;
					var check = function(f_data){

						if(i<sub_send.length){
							sub(sub_send[i],function(r_data){
								i++;
								check(r_data);
							})
						}else{
							if(callback){
								callback(f_data);
							}
						}
					}
					check();

				}

				var s_types = ['bizon','oki_toki','own','bitrix'];
				var send_arr = [];
				for (var i = 0; i < s_types.length; i++) {
					if(_t.opt.hasOwnProperty(s_types[i])){
						if(_t.defined(_t.opt[s_types[i]])){
							send_arr[send_arr.length] = s_types[i];
						}
					}
					
				}
				var good = function(form_obj){
					$t.find('input[type="text"],input[type="email"],input[type="tel"]').val('');
					_t.success_send(form_obj);	

				}
				if(send_arr.length>0){

					recurs_submitter(send_arr,good);
				}else{
					good();
				}
	

				if (_t.opt.get_course) {
					need_stuff = false;
					$t.submit();
					need_stuff = true;
				}	
			}
		});



	},
	start:function(){
		var _t = this;


		_t.inject();	
		_t.rebind();	
	},

	init:function(opt){
		var _t = this;

		_t.submit.th = _t;

		

		console.log('opt = ',opt);
		var c_opt = {

		}
		for(var k in _t.def){
			if(_t.def.hasOwnProperty(k)){
				if(typeof opt[k]=='undefined'){
					c_opt[k] = _t.def[k];
				}else{
					c_opt[k] = opt[k];

				}
				if(k == 'thanks_function'){
					console.log('opt[k] = ',opt[k],'_t.def[k] = ',_t.def[k],'c_opt[k] = ',c_opt[k]);
				}
			}
		} 
		_t.opt = c_opt;
	
		_t.start();
	},
}
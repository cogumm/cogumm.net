/* Author: Joan Fernandez <joan(at)joanfernandez(dot)es>

*/

// Global variables
var nav = $('#top-navigation');
var topl = $('#top-link');
var work = $('#work');
var sk = $('#skill-list');

/**
 * Moves the navigation bar with page scroll.
 * Inspired in kccreepfest.com
 *
 */
function navPosition(){
	var _wt = work.offset.top;
	
	var win = $(window);

	var _navTop = nav.offset().top;

	win.bind('load scroll', function(){
		
		var scroll = win.scrollTop();
		nav[scroll > _navTop ? 'addClass' : 'removeClass']('fixed');
		topl[scroll < _navTop ? 'addClass' : 'removeClass']('hidden');

	
	});
}

/**
 * Cool scrolling
 * 
 */
function initLocalScroll(){
	nav.localScroll();
}

/**
 * Dirty jobs with DOM
 *
 */
function initMarkupMods(){
	var _ileft = sk.find('li:nth-child(-n+5)');
	var _iright = sk.find('li:nth-child(n+6)');
	_ileft.wrapAll('<div class="ileft"/>');
	_iright.wrapAll('<div class="iright"/>');

	var _tl = $('#timeline');
	_tl.append('<span class="tl-blur">')
}


/**
 * Make the pie charts of skills using canvas
 *
 */
function initSkills(){

	var _ss = $('#skill-selected'); 
	_ss.find('div:not(.selected)').hide();

	$('#skill-list').find('a').click(function(e){
		
		e.preventDefault();

		var self = $(this);
		var _id = self.attr('href');
		_ss.find('.selected').hide();
		$(_id).removeClass('visuallyhidden').addClass('selected').fadeIn('slow');
		$('#skill-list').find('li').removeClass('selected');
		self.parent('li').addClass('selected');
	});

	$('#skill-list').find('b').each(function(){
		var self = $(this);
		var _s = parseInt(self.attr('data-radius'));

		if( Modernizr.canvas ) { // #0000010
			// Chart data
			var v1 = (_s==100) ? 99.999 : _s; // If the value is 100, Chrome in Linux dont show de canvas
	    	var v2 = (_s==100) ? 0.001 : parseInt(100-_s);
			var browserUsageData = [
	    		// Object: label, value, color
	    		{ 'label' : '', 'value' : v1, 'color' : '#cdf63c' },
		    	{ 'label' : '', 'value' : v2, 'color' : '#8da6ce' }
			];


			// Create a new instance of CanvasPieChart
			var canvasPieChart = new CanvasPieChart( 
				self.attr('id'), 
				browserUsageData,
				{
			    	'width' : 91,
			    	'height': 91,
			    	'strokeLineWidth':0,
			    	'strokeLineColor': '#10132c',
			    	'sectorTextRendrer': null,
			    	'imageMap': false
				}
			);
		} else {
			// canvas fallback
			var v1 = _s;
			var v2 = parseInt(100-_s);
			var _src = 'https://chart.googleapis.com/chart?cht=p&chd=t:'+v1+','+v2+'&chco=cdf63c|8da6ce&chs=111x111&chp=-1.6&chf=bg,s,FFFFFF00';
			self.append('<img src="'+_src+'" >');
		}

	});
}

/**
 * Actions form contact form
 *
 */
function initForms() {

	// Use a fallback method for old browsers without placeholder support
	if( Modernizr.input.placeholder ){
		$('#contact label').hide();
	} else {
		
	}

	// Auto-resizeables textareas
	$('textarea').elastic();

	$('#contact').submit(function(e){
		
		e.preventDefault();

		var _val = $('#contact input[type=submit]').attr('value'); 
		$('#contact input[type=submit]').attr('value','Enviando...');
		$('#contact input[type=submit]').attr('disabled','disabled');

		var data = {
			'name': 	$('#name').attr('value'),
			'email': 	$('#email').attr('value'),
			'comment': 	$('#comment').attr('value')
		};

		$.ajax({
			type: 'POST',
			url: 'contact.php',
			data: data,
			success: function(html) {
				html = ( html == '200' ) ? 'Mensaje enviado correctamente.' : html;
				var _class = ( html == '200' ) ? 'ok' : 'error';
				$('#contact').append('<div class="form-status" id="form-status" title="Clic para cerrar">'+html+'</div>');
				$('#form-status').addClass(_class);
			},
			complete: function() {
				$('#contact input[type=submit]').removeAttr('disabled');
				$('#contact input[type=submit]').attr('value',_val);
			},
			error: function() {
				$('#form-status').addClass('error');
			}
		});
	});

	$('#form-status').click(function() {
			$(this).fadeOut('slow');
	});
}


function initWorkStructure() {
	
	var count = 1;
	var html = '';
	
	/* Move the images out of the list */
	//$('#work .wrapper > h1').append('<div id="imgs-container" class="imgs-container"></div>');
	$('<div id="imgs-container" class="imgs-container"></div>').insertAfter('#work .wrapper > h1'); 
	$('#work article').each(function(){
		var self = $(this);
		var img = self.find('.work-image');
		img.attr('id', 'iwork-'+count);
		img.wrap('<a class="img-wrp" href="#twork-'+count+'"/>');
		$('#imgs-container').append(img.parent());
		self.parent('li').attr('id', 'twork-'+count);
		count++;
	});
	
	$('#work .works > li').hide();
	$('#work .works > li:first-child').addClass('active').show();
	$('#iwork-1').parent().addClass('active');

	/* Canvas charts */
	$('#work .project-tasks').find('b').each(function(){
		var self = $(this);
		var _s = parseInt(self.attr('data-radius'));

		if ( Modernizr.canvas ) {

			// Chart data
			var v1 = (_s==100) ? 99.999 : _s; // If the value is 100, Chrome in Linux dont show de canvas
	    	var v2 = (_s==100) ? 0.001 : parseInt(100-_s);
			var browserUsageData = [
	    		// Object: label, value, color
	    		{ 'label' : '', 'value' : v1, 'color' : '#98c141' },
		    	{ 'label' : '', 'value' : v2, 'color' : '#9e9e9e' }
			];


			// Create a new instance of CanvasPieChart
			var canvasPieChart = new CanvasPieChart( 
				self.attr('id'), 
				browserUsageData,
				{
			    	'width' : 118,
			    	'height': 118,
			    	'strokeLineWidth':0,
			    	'strokeLineColor': '#10132c',
			    	'sectorTextRendrer': null,
			    	'imageMap': false
				}
			);

		} else {
			// canvas fallback
			var v1 = _s;
			var v2 = parseInt(100-_s);
			var _src = 'https://chart.googleapis.com/chart?cht=p&chd=t:'+v1+','+v2+'&chco=98c141|9e9e9e&chs=128x128&chp=-1.6&chf=bg,s,FFFFFF00';
			self.append('<img src="'+_src+'" >');
		}
	});
	
	
	/* Onclick event */
	$('#work .img-wrp').click(function(e){
		var self = $(this);

		$('#work .img-wrp').removeClass('active')
		self.addClass('active');
		var id = self.find('img').attr('id').split('-')[1];
		$('#work li.active').removeClass('active').hide();
		$('#twork-'+id).addClass('active').fadeIn();
	});
	
}

/**
 * Load the twitter timeline
 *
 */
function initTwitterTimeline() {
	$.getJSON('https://api.twitter.com/1/statuses/user_timeline.json?include_rts=true&screen_name=joan_fern&count=5&callback=?', function(data) {
		var items = [];

		$.each(data, function(key, val) {
			items.push('<li>' + twttr.txt.autoLink(val.text) + '</li>');
		});

		$('<ul/>', {
			'class': 'my-new-list',
			html: items.join('')
		}).appendTo('#timeline');

		$('#timeline').removeClass('loading');
	});
}

/**
 * Set active the correct link of the navigation depending of the scroll
 *
 */
function initNavHighlight(){
	var $win = $(window);
	var $sections = $('.section');
	var _sections = new Array();

	$sections.each(function(i){
		_sections[i] = new Object();
		_sections[i].id = $(this).attr('id');
		_sections[i].top = Math.round($(this).offset().top);
	});
	
	$win.bind('load scroll', function(){ // resize
		var scroll = $win.scrollTop();
		// Set html class based on the window scroll position
		var id = null;
		for (var i = 0; i < _sections.length; i++) {
			if (scroll >= _sections[i].top) {
				id = _sections[i].id;
			}
		}

		$('body').attr('class', (id!=null)?'body-'+id:null);
	});
}

function easterEgg(){

	$('body').append('<pre id="codeNeo" class="prettyprint neo"/>');
	var _neo = $('#codeNeo');
	_neo.css('height',$('body').height()).hide();

	$.get('http://joanfernandez.dev/index.html', function(data){
		var _html;
		_html = data.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");

		_neo.show();
		$('html, body').animate({ scrollTop: 0 }, 0);
		_neo.html('<div class="text">Follow&nbsp;the&nbsp;White&nbsp;Rabbit.<span class="cursor">&nbsp;</span></div>');

		var fn = function() {
			$('body').append('<pre id="code" class="prettyprint"/>');
			var _code = $('#code');
			_code.hide();
			_code.html(_html);
			prettyPrint();
			_code.fadeIn('slow');			
		}

		window.setTimeout(fn,20000);

	});
}

function initKC(){
	var k = new Konami()
	k.code = function() { easterEgg(); };
	k.load()
}


/**
 * Document ready. Let's go!
 *
 */
$(document).ready(function(){
	navPosition();
	initLocalScroll();
	initTwitterTimeline();
	initMarkupMods();
	initWorkStructure()
	initSkills();
	initForms();
	initNavHighlight();
	initKC();
});

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="public/js/crossbrowser.js" type="text/javascript"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script type="text/javascript" src="public/js/jquery.anythingslider.fx.min.js"></script>
<script type="text/javascript" src="public/js/jquery.anythingslider.min.js"></script>

<script type="text/javascript" src="public/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="public/js/bootstrap-modal.js"></script>


<script type="text/javascript">
	$(function(){
		// Accordion
		$("#accordion").accordion({ header: "h3" });
		
		//hover states on the static widgets
		$('#dialog_link, ul#icons li').hover(
			function() { $(this).addClass('ui-state-hover'); },
			function() { $(this).removeClass('ui-state-hover'); }
		);

	});
</script>
<!-- 
<script language=JavaScript>
	<!--
	var mensagem="";
	function clickIE() {if (document.all) {(mensagem);return false;}}
		function clickNS(e) {if 
			(document.layers||(document.getElementById&&!document.all)) {
			if (e.which==2||e.which==3) {(mensagem);return false;}}
		}
			if (document.layers) {
				document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;
			}
	else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
	document.oncontextmenu=new Function("return false");
 
</script>
-->

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

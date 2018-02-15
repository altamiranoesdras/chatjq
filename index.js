jQuery(document).ready(function() {
    "use strict";
	
	$("#send").click(function(e) {
        e.preventDefault();
		var frm= $("#formChat").serialize();
		$.post("registro.php",frm,function(info){
			console.log(info);
			var altura=$("#conversation").prop("scrollHeight");
			$("#conversation").scrollTop(altura);
		});
    });
	
		
	function cargaMensajes(){
		$.post("conversacion.php",function(info){
			$("#conversation").html(info);
			$("#conversation p:last-child").css({
				"padding-bottom": 20,
				"background-color": "lightgreen"
			});
			var altura=$("#conversation").prop("scrollHeight");
			$("#conversation").scrollTop(altura);
		});
	}

	$.ajaxSetup({cache:false});	
	setInterval(cargaMensajes, 500);
});


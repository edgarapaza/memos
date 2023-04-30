$(document).ready(function (){

	$("#reporte").hide();

	$("#1").click(function (){
		//alert(1);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal1").value;
		let idfunc = document.getElementById("idfunciones1").value;
		let unimed1 = document.getElementById("unimed1").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);

	});
	$("#2").click(function (){
		//alert(2);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal2").value;
		let idfunc = document.getElementById("idfunciones2").value;
		let unimed1 = document.getElementById("unimed2").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);
	});
	$("#3").click(function (){
		//alert(3);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal3").value;
		let idfunc = document.getElementById("idfunciones3").value;
		let unimed1 = document.getElementById("unimed3").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);
	});
	$("#4").click(function (){
		//alert(4);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal4").value;
		let idfunc = document.getElementById("idfunciones4").value;
		let unimed1 = document.getElementById("unimed4").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);
	});
	$("#5").click(function (){
		//alert(5);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal5").value;
		let idfunc = document.getElementById("idfunciones5").value;
		let unimed1 = document.getElementById("unimed5").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);
	});
	$("#6").click(function (){
		//alert(6);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal6").value;
		let idfunc = document.getElementById("idfunciones6").value;
		let unimed1 = document.getElementById("unimed6").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);
	});
	$("#7").click(function (){
		//alert(7);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal7").value;
		let idfunc = document.getElementById("idfunciones7").value;
		let unimed1 = document.getElementById("unimed7").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);
	});
	$("#8").click(function (){
		//alert(8);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal8").value;
		let idfunc = document.getElementById("idfunciones8").value;
		let unimed1 = document.getElementById("unimed8").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);
	});
	$("#9").click(function (){
		//alert(9);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal9").value;
		let idfunc = document.getElementById("idfunciones9").value;
		let unimed1 = document.getElementById("unimed9").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);
	});
	$("#10").click(function (){
		//alert(10);
		$("#reporte").show();
		let idpers = document.getElementById("idpersonal10").value;
		let idfunc = document.getElementById("idfunciones10").value;
		let unimed1 = document.getElementById("unimed10").value;

		document.getElementById("miidpersonal").value = idpers;
		document.getElementById("miidfuncion").value = idfunc;
		$("#miunimed").html(unimed1);
	});


	$("#btnSaveReporte").click(function (event){
		event.preventDefault();
		let idpersonal1 = document.getElementById('miidpersonal').value;
		let idfunciones1 = document.getElementById('miidfuncion').value;
		let cantidad1 = document.getElementById('cantidad').value;
		
		var datos = {
			"idpersonal": idpersonal1,
			"idfunciones": idfunciones1,
			"cantidad" : cantidad1
		};

		$.ajax({
	        type: "POST",
	        url: "../controllers/reportes.controller.php",
	        data: datos,
	        beforeSend: function () {
                        $("#mesaje").html("Procesando, espere por favor...");
			},
	        error: function(e){
	        	alert("Error edgar: " + e);
	        },
	        success: function(res)
	        {
	        	$("#mensaje").html("Guardado");
	        	$("#reporte").hide();
	        	location.reload();
	        }

	    });

	    return false;
	});
});



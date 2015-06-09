$(function() {
	$('#frmcontacto').validate({
		errorClass:"has-error",
		validClass:"has-success",
		highlight: function(element, errorClass, validClass) {
			$('#msg_error').text('');
			$('#msg_error').removeClass();
			$(element).parents("p").addClass(errorClass).removeClass(validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			$('#msg_error').text('');
			$('#msg_error').removeClass();
			$(element).parents("p").removeClass(errorClass).addClass(validClass);
		},
		rules: {
			nombre      :{
				required:true,
				alpha   :true
			},
			email       :{
				required:true,
				email   :true
			},
			telefono :{
				required:true,
				digits  : true
			},
			mensaje:{required:true}
		},
		messages : {
			nombre      :{
				required:"Por favor, Ingrese su nombre.",
				alpha   :"Su nombre solo puede contener letras."
			},
			email       :{
				required:"Por favor, ingrese su email.",
				email   :"Email invalido. Ejm.: nombre@empresa.com"
			},
			telefono    :{
				required:"Ingrese el numero de su telefono.",
				digits  : "Su telefono solo puede contener numeros.",
			},
			mensaje:{required:"Por favor, ingrese el mensaje que nos desea enviar."}
		},
		submitHandler:function() {
			$('#frmcontacto').ajaxSubmit({ 
				success: function(response) {
					if(response=='ok'){
						$('#msg_error').html("Gracias por ponerse en contacto con nosotros.").removeClass().addClass('valid').show();
						
						$('#frmcontacto').clearForm().resetForm().find('.col-md-12').removeClass('has-success');
					}else{
						console.log(response);
						$('#msg_error').html('Por favor, Rellene el formulario otra vez.').removeClass().addClass('error').show();
					}
				},
				error: function(){
					$('#msg_error').html('Upps intentelo mas tarde.').removeClass().addClass('error').show();         
				}
			});
		}
    });
});

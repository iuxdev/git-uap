$(function() {
	$('#frmlogin').validate({
		errorClass:"has-error",
		validClass:"has-success",
		highlight: function(element, errorClass, validClass) {
			$('#msg_error').text('');
			$('#msg_error').removeClass();
			$(element).parents(".form-group").addClass(errorClass).removeClass(validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			$('#msg_error').text('');
			$('#msg_error').removeClass();
			$(element).parents(".form-group").removeClass(errorClass).addClass(validClass);
		},
		rules: {
			usuario     :{required:true},
			clave       :{required:true},
		},
		messages : {
			usuario     :{required:"Por favor ingrese su usuario."},
			clave       :{required:"Por favor ingrese su contraseña"},
		},
		submitHandler:function() {
			$('#msg_error').html("Espere mientras validamos sus datos...").removeClass().addClass('bg-info').show();
			$('#frmlogin').ajaxSubmit({
				success: function(response) {
					console.log(response);

					if(response=='-1'){
						$('#msg_error').html('Usuario no existe.').removeClass().addClass('bg-danger').show();
					}else if(response=='-2'){
						$('#msg_error').html('Verifique su contraseña.').removeClass().addClass('bg-danger').show();
					}else if(response=='0'){
						$('#msg_error').html('Por favor, Rellene el formulario.').removeClass().addClass('bg-warning').show();
					}else if(response=='1'){
						$('#msg_error').html("Iniciando Sesión....").removeClass().addClass('bg-success').show();
						$('#frmlogin').clearForm().resetForm().find('.form-group').removeClass('has-success');

						setTimeout(function () {
							window.location.reload();
						},2000);
					}else{
						$('#msg_error').html('Por favor, Rellene el formulario otra vez.').removeClass().addClass('bg-warning').show();
					}
				},
				error: function(){
					$('#msg_error').html('Upps intentelo mas tarde.').removeClass().addClass('bg-danger').show();
				}
			});
		}
    });
});
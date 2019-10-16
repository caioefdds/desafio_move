	$('#form-ajax').submit(function(e){


		e.preventDefault();

		if($('#enviar').val() == 'Enviando...'){
			return(false);
		}

		$('#enviar').val('Enviando...');

		$.ajax({
					url: 'meuscript.php',
					type: 'POST',
					dataType: 'html',
					data: {
						'nome': $('#form_nome').val(),
						'email': $('#form_email').val()
					},
				}).done(function(data){

					window.location.replace('email.php');
					$("#resultado").html($('#form_nome').val());
					$("#resultado2").html($('#form_email').val());

					$('#enviar').val('Enviar');
				});

	});

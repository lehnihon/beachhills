( function( $ ) {
	$(function() {
		$('#idDtEntrada').datepicker({ minDate: 0, dateFormat: 'dd/mm/yy' });
		$('#idDtEntrada').mask("99/99/9999");
		$('#idDtSaida').datepicker({ minDate: 0, dateFormat: 'dd/mm/yy' });
		$('#idDtSaida').mask("99/99/9999");
		$('#btnBuscar').on('click',function(){
			var dtEntrada = $('#idDtEntrada').val();
			var dtSaida = $('#idDtSaida').val();

			if(dtEntrada == '' || dtSaida == ''){
				alert('Favor selecionar a data');
			}else{
				window.location = 'http://hotelbeachhills.com.br/b2c/hotel?hotel=776&partida=' +dtEntrada.split('/').join('')+'&retorno='+dtSaida.split('/').join('');				
			}
		});
	})
} )( jQuery );
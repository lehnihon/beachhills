( function( $ ) {
	$(function() {
		var tomorrow = new Date();
		tomorrow.setDate(tomorrow.getDate() + 2);
		
		$('#idDtEntrada').datepicker({ minDate: tomorrow, dateFormat: 'dd/mm/yy',   dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		    nextText: 'Próximo',
		    prevText: 'Anterior' });
		$('#idDtEntrada').mask("99/99/9999");
		$('#idDtSaida').datepicker({ minDate: tomorrow, dateFormat: 'dd/mm/yy',   dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		    nextText: 'Próximo',
		    prevText: 'Anterior' });
		$('#idDtSaida').mask("99/99/9999");
		$('#btnBuscar').on('click',function(){
			var dtEntrada = $('#idDtEntrada').val();
			var dtSaida = $('#idDtSaida').val();

			var dtEntradaFormat = new Date(dtEntrada);
			var dtSaidaFormat = new Date(dtSaida);

			if(dtEntrada == '' || dtSaida == ''){
				alert('Favor selecionar a data');
			}else if(dtEntradaFormat > dtSaidaFormat){
				alert('A data de entrada deve ser menor que a data de saída');
			}else{
				window.location = 'http://hotelbeachhills.com.br/b2c/hotel?hotel=776&partida=' +dtEntrada.split('/').join('')+'&retorno='+dtSaida.split('/').join('');				
			}
		});
	})
} )( jQuery );
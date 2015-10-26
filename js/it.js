var it;
$(function() {
    $.datepicker.regional['pt-BR'] = {
        closeText: 'Fechar', prevText: '&#x3c;Anterior', nextText: 'Pr&oacute;ximo&#x3e;', currentText: 'Hoje',
        monthNames: ['Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        dayNames: ['Domingo', 'Segunda-feira', 'Ter&ccedil;a-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sabado'],
        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'], dayNamesMin: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        weekHeader: 'Sm', dateFormat: 'dd/mm/yy', showButtonPanel: false, showMonthAfterYear: false, hideIfNoPrevNext: true, yearSuffix: ''};
    it = {
        url_alias: true ? '' : '/',
        dateRange: function(obj) {
            var numberOfMonthsDefault = 2;
            var minDateDefault = null;
            function changed(selectedDate) {
                var dmy = selectedDate.split("/");
                var joindate = new Date(
                        parseInt(dmy[2], 10),
                        parseInt(dmy[1], 10) - 1,
                        parseInt(dmy[0], 10)
                        );
                joindate.setDate(joindate.getDate() + 1);
                selectedDate = ("0" + joindate.getDate()).slice(-2) + "/" + ("0" + (joindate.getMonth() + 1)).slice(-2) + "/" + joindate.getFullYear();

                $(obj.dtFim).datepicker("option", "minDate", selectedDate);
                $(obj.dtFim).val(selectedDate);
                setTimeout(function() {
                    $(obj.dtFim).focus();
                }, 0);
            }
            if (obj.numberOfMonths) {

                numberOfMonthsDefault = obj.numberOfMonths;
            }
            if (obj.minDate !== null) {
                minDateDefault = obj.minDate;
            }
            var dtIni = $(obj.dtIni);
            dtIni.datepicker($.datepicker.regional['pt-BR']);
            dtIni.datepicker("option", {
                minDate: minDateDefault,
                numberOfMonths: numberOfMonthsDefault,
                onSelect: function(selectedDate) {
                    changed(selectedDate);
                }
            });
            var ph = dtIni.attr('placeholder');
            if (ph == null || ph.length == 0) {
                dtIni.attr('placeholder', 'dd/mm/aaaa');
            }
            var dtFim = $(obj.dtFim);
            dtFim.datepicker($.datepicker.regional['pt-BR']);
            dtFim.datepicker("option", {
                minDate: minDateDefault,
                numberOfMonths: numberOfMonthsDefault
            });
            ph = dtFim.attr('placeholder');
            if (ph == null || ph.length == 0) {
                dtFim.attr('placeholder', 'dd/mm/aaaa');
            }
        }, page: {
            top: function() {
                var html = '<div id="topo1">'
                        + '<div id="logo">'
                        + '<a href="' + it.url_alias + '"><img src="' + it.url_alias + '/infotravel/images/bps/logo.png" /></a>'
                        + '</div>'
                        + '<div id="bannerTop">'
                        + '<img src="' + it.url_alias + '/img/bannerPc10x.png" />'
                        + '</div>';
                $('#topo').html(html);
            }, menu: function() {
                var html = '<div id="page-wrap">'
                        + '<ul class="dropdown"> '
                        + '<li><a href="' + it.url_alias + '/" title="Início">Home</a></li>'
                        //+ '<li><a href="'+it.url_alias+'/destino/" title="Destinos">Destinos</a></li>'
                        //+ '<li ><a href="' + it.url_alias + '/contato.html" title="Contato">Contato</a></li>'
                        + '</ul>'
                        + '</div>';
                $('#menu').html(html);
            }, rodape: function() {
                var html = '<hr />'
                        + '© Copyright 2015, BPS Participações e Empreendimentos Turisticos - Todos os direitos reservados'
                        + '<hr />'
                        + '<br class="quebra"/>'
                        + '<div class="developed">Desenvolvido por <a target="_blank" href="http://www.infotera.com.br">Infotera Tecnologia</a></div>';
                $('#rodape').html(html);
            }, _init: function() {
                it.page.top();
                it.page.menu();
                it.page.rodape();
            }
        }, home: function() {
            $('#featured').orbit({advanceSpeed: 4000, directionalNav: false, bullets: true});
            $('.painel').hide();
            setTimeout(function() {
                $('.painel').show();
                $('.painel').motorHospedagem({
                    idDestino: '#idDestino',
                    idDtEntrada: '#idDtEntrada',
                    idDtSaida: '#idDtSaida',
                    idBtnPesquisa: '#btnPesquisa',
					isBuscaPorId:true
					});
            }, 500);
        },
        hotel: {
            gerarImagens: function(id, url, dados) {
                var html = "";
                for (var i = 0; i < dados.length; i++) {
                    var name = dados[i];
                    html += '<a href="' + url + 'big/' + name + '" class="thumb">'
                            + '<img src="' + it.url_alias + 'img/minLoad.png" data-src="' + url + 'thumb/' + name + '" />'
                            + '</a>';
                }
                $(id + ' .thumbList').html(html);
                $(id + ' .thumb').lightBox({fixedNavigation: true,
                    txtImage: 'Imagem',
                    txtOf: 'de',
                    imageBlank: it.url_alias + '/img/trans.gif',
                    imageLoading: it.url_alias + '/img/loading.gif',
                    imageBtnClose: it.url_alias + '/img/fechar.png',
                    imageBtnPrev: it.url_alias + '/img/left-arrow.png',
                    imageBtnNext: it.url_alias + '/img/right-arrow.png'});
                $(id + " .thumb img").lazy(300);
            }, ohotel: function(obj) {
                var ohotel = obj.ohotel;
                it.hotel.gerarImagens('#ohotel', ohotel.url, ohotel.dados);

            }, acomodacao: function(obj) {
                var ohotel = obj.ohotel;
                var acomodacao = obj.acomodacao;
                it.hotel.gerarImagens('#acomodacao', ohotel.url, acomodacao.dados);

            }, busca: function(id, dados) {
                it.dateRange({
                        dtIni: dados.idDtEntrada,
                        dtFim: dados.idDtSaida,
                        minDate: 0,
                        numberOfMonths: 2});
                    $(dados.idBtnPesquisa).click(function(){
                        var dtEntrada = jQuery(dados.idDtEntrada).val();
                        var dtSaida = jQuery(dados.idDtSaida).val();
                        if(dtEntrada.length<10){
                            alert('Favor selecionar a data de entrada');
                            return false;
                        }
                        if(dtSaida.length<10){
                            alert('Favor selecionar a data de entrada');
                            return false;
                        }
                        dtEntrada = dtEntrada.replace('/','').replace('/','');
                        dtSaida = dtSaida.replace('/','').replace('/','');
						var splDestino = dados.destino.value.split(';');
						window.location = 'http://hotelbeachhills.com.br/b2c/hotel?hotel='+splDestino[1]+'&partida=' +dtEntrada+'&retorno='+dtSaida;
                    });
//                $(id).motorHospedagem({
//                    destino: {id: dados.id, value: dados.value, isFixo: dados.isFixo},
//                    idDtEntrada: dados.idDtEntrada,
//                    idDtSaida: dados.idDtSaida,
//                    idBtnPesquisa: dados.idBtnPesquisa});
            }, load: function(obj) {
                $(".vendaHome.hoteis .hoteis .tab").tabs({
                    beforeLoad: function(event, ui) {
                        ui.jqXHR.error(function() {
                            ui.panel.html(
                                    "Erro");
                        });
                    }
                });
                var first = true;
                $('#btnLocal').click(function() {
                    if (first) {
                        first = false;
                        var zoom = 16;
                        if (obj.local.zoom) {
                            zoom = obj.local.zoom;
                        }
                        $('#mapa').gmap3({
                            marker: {
                                latLng: obj.local.marker
                            },
                            map: {
                                options: {
                                    zoom: zoom,
                                    scrollwheel: false,
                                    streetViewControl: false
                                }
                            }
                        });
                    }
                });
                it.hotel.ohotel(obj);
                it.hotel.acomodacao(obj);
                it.hotel.busca(obj.busca.id, obj.busca.dados);
            }
        }
    };
    it.page._init();
});

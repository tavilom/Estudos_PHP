$(function () {
    $('nav.mobile').click(function () {
        var listaMenu = $('nav.mobile ul'); //fazendo a varíavel listaMenu receber o elemento ul dentro de nav.mobile
        //abre o menu com fadein
        // if(listaMenu.is(':hidden') == true){ //se a listaMenu estiver escondida
        //     listaMenu.fadeIn(); //mostra a listaMenu com um efeito de slide
        // } else {
        //     listaMenu.fadeOut(); //se não, esconde a listaMenu com um efeito de slide
        // }

        //listaMenu.slideToggle(); //mostra ou esconde a listaMenu com um efeito de slide

        //abre o menu sem efeito
        // if(listaMenu.is(':hidden') == true){ //se a listaMenu estiver escondida
        //     //listaMenu.show()
        //     listaMenu.css('display', 'block') //mostra a listaMenu sem efeito
        // } else {
        //     //listaMenu.hide()
        //     listaMenu.css('display', 'none') //esconde a listaMenu sem efeito
        // }

        if (listaMenu.is(':hidden') == true) {
            //fa fa-bars
            //fa fa-times
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa fa-bars');
            icone.addClass('fa fa-times');
            listaMenu.slideToggle();

        } else {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa fa-times');
            icone.addClass('fa fa-bars');
            listaMenu.slideToggle();
        }
    });


    if($('target').length > 0){
        //o elemento target existe, portando precisamos dar o scroll em algum elemento
        var elemento = '#' + $('target').attr('target');
        
        var divScroll = $(elemento).offset().top; //pega a posição do elemento em relação ao topo da página
        
        $('html,body').animate({'scrollTop':divScroll},2000); //faz o scroll da página para a posição do elemento
        
    }
})

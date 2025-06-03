$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul'); //fazendo a varíavel listaMenu receber o elemento ul dentro de nav.mobile
        //abre o menu com fadein
        // if(listaMenu.is(':hidden') == true){ //se a listaMenu estiver escondida
        //     listaMenu.fadeIn(); //mostra a listaMenu com um efeito de slide
        // } else {
        //     listaMenu.fadeOut(); //se não, esconde a listaMenu com um efeito de slide
        // }

        listaMenu.slideToggle(); //alternar entre mostrar e esconder a listaMenu com um efeito de slide

        //abre o menu sem efeito
        // if(listaMenu.is(':hidden') == true){ //se a listaMenu estiver escondida
        //     //listaMenu.show()
        //     listaMenu.css('display', 'block') //mostra a listaMenu sem efeito
        // } else {
        //     //listaMenu.hide()
        //     listaMenu.css('display', 'none') //esconde a listaMenu sem efeito
        // }
    })
})

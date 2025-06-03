<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu site"> <!-- Descrição do site -->
    <meta name="keywords" content="palavra-chave, do, meu, site"> <!-- Palavras-chave para o site -->
    <title>Projeto 01</title>
</head>

<body>

    <header>
        <div class="center">
            <div class="logo left">Logomacar</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div> <!--clear-->
        </div><!--center-->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div><!--overlay-->
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
        </div>center
    </section><!--banner-principal-->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Otávio Mastrantonio .</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eius autem vel delectus hic nam placeat nisi, quam odit unde perspiciatis? Repellat est a itaque maiores sed odit explicabo nobis!</p>
            </div>
            <div class="w50 left">
                <img class="" src="image/foto.jpg" alt="pika">
            </div> <!--w50-->
            <div class="clear"></div>
        </div> <!--center-->
    </section> <!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem temporibus voluptatibus alias dicta perspiciatis explicabo quaerat nemo nesciunt! Iste, voluptas harum vero perspiciatis consectetur voluptates ipsam beatae quis rerum laborum!</p>
            </div><!--box-especialidade-->
            <div class=" w33 left box-especialidade">
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem temporibus voluptatibus alias dicta perspiciatis explicabo quaerat nemo nesciunt! Iste, voluptas harum vero perspiciatis consectetur voluptates ipsam beatae quis rerum laborum!</p>
            </div><!--box-especialidade-->
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-code" aria-hidden="true"></i></h3>
                <h4>JavaScript</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem temporibus voluptatibus alias dicta perspiciatis explicabo quaerat nemo nesciunt! Iste, voluptas harum vero perspiciatis consectetur voluptates ipsam beatae quis rerum laborum!</p>
            </div><!--box-especialidade-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--especialidades-->

    <section class="extras">

        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">`Lorem ipsum dolor sit amet, consectetur adipisicing elit.`</p>
                    <p class="nome-autor">Lorem .</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">`Lorem ipsum dolor sit amet, consectetur adipisicing elit.`</p>
                    <p class="nome-autor">Lorem .</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">`Lorem ipsum dolor sit amet, consectetur adipisicing elit.`</p>
                    <p class="nome-autor">Lorem .</p>
                </div>
            </div>
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    </ul>
                </div><!--servicos-->
            </div><!--w50r-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--extars-->


    <footer>
        <div class="center">
            <p>Todos os direitos reservador</p>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script>$(function(){
        var mensagem = "ZaWarudo!";
        console.log(mensagem);
        alert(mensagem);
    })</script>
</body>

</html>
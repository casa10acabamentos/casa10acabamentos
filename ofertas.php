<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/81914592ba.js"></script>
    <title>CASA 10 ACABAMENTOS | Pisos e Revestimentos, Louças e Metais, Pias e Gabinetes</title>
</head>
<body>
     <header>
        <div class="container">
            <div class="col">
                <a href="./"><img src="assets/logo.png"></a>
            </div>

            <div class="col">
                <ul>
                    <a href="https://www.facebook.com/casa10acabamentos" target="_blank"><li><i class="fa fa-facebook" aria-hidden="true"></i></li></a>
                    <a href="https://www.instagram.com/casa10acabamentos/" target="_blank"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
                    <a href="ofertas.php"><li class="active">Ofertas</li></a>
                </ul>
            </div>
        </div>
    </header>

    <div class="menu">
        <div class="container">
            <ul>
                <a href="index.php"><li>Produtos</li></a>
                <a href="index.php"><li>Lojas</li></a>
                <a href="index.php"><li>Quem Somos</li></a>
                <a href="index.php"><li>Contato</li></a>
            </ul>
        </div>
    </div>

    <div class="ofertas">
        <div class="container">
            <img src="assets/folder.jpg" alt="">
        </div>
    </div>

    <div class="quem-somos" id="quemsomos">
        <div class="container">
            <h2>Quem somos</h2>
            <div class="col">
                <p>A <strong>Casa 10 Acabamentos</strong> é uma empresa do Grupo Forguaçu e está no mercado desde 2012, oferecendo materiais de 
                acabamento - pisos, revestimentos, porcelanatos, louças e metais, pias e gabinetes para banheiros e cozinhas - produtos 
                com qualidade e o melhor preço! 

                Nossa primeira unidade foi inaugurada em Mogi Guaçu, em janeiro de 2012. Em 2018 expandimos a rede com duas 
                unidades - uma em Mogi Mirim e outra em São João da Boa Vista. Em 2019, inauguramos mais uma loja <strong>Casa 10</strong>, desta 
                vez em Itapira. 

                Nas lojas <strong>Casa 10 Acabamentos</strong> você vai encontrar preço baixo, atendimento especializado, pagamento facilitado e 
                entrega programada e muito mais. 

                <strong>Aqui sua casa vai ficar nota 10!!!</strong>
            </div>

            <div class="col">
                <img src="assets/logo.png">
            </div>
        </div>
    </div>

    <div class="contato" id="contato">
        <div class="container">
            <h2>Contato</h2>
            <span>Sua mensagem é muito importante para nós!</span>
            <p>Preencha os campos abaixo e em breve retornaremos seu contato.</p>
            <div class="col">
                <form action="sucesso.php" method="POST">
                    <input type="text" placeholder="Nome" name="nome">
                    <input type="text" placeholder="E-mail" name="email">
                    <input type="text" placeholder="Telefone Fixo" name="telefonefixo">
                    <input type="text" placeholder="Whatsapp" name="whatsapp" class="bottom">
                    <select name="lojas">
                        <option value="">Selecione a loja..</option>
                        <option value="Mogi Guaçu" name="mogiguacu">Mogi Guaçu</option>
                        <option value="Mogi Mirim">Mogi Mirim</option>
                        <option value="Itapira">Itapira</option>
                        <option value="São João da Boa Vista">São João da Boa Vista</option>
                    </select>
                    <textarea placeholder="Digite sua mensagem" name="mensagem"></textarea>
                    <button>Enviar</button>
                </form>
            </div>

            <div class="col">
                <span class="title">Comunicação</span>
                <p>mkt@casa10acabamentos.com.br</p>

                <span class="title">Trabalhe Conosco</span>
                <p>rh@casa10acabamentos.com.br</p>
            </div>
        </div>
    </div>





    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

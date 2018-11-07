<!DOCTYPE html>
<html>
    <?php include ('inc/head.php'); ?>
    <body>
        <h1 class="hidden">Gilgal - MasterConsult </h1>
        <div class="container-fluid">
            <?php include ('./inc/borda.php'); ?>
            <?php include ('inc/header.php'); ?>
            <main>
                <div class="row cinzac contato ">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-6 col-md-6 col-sm-12 borderrigth">
                            <h1>CONTACT US</h1>
                            <h2>Send an email. All fields with an * are required.</h2>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-group">
                                <input type="text" class="form-control" aria-describedby="basic-addon1"placeholder="Nome:*" id="nome">
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-group">
                                <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="E-mail:*" id="email">
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-group">
                                <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Telefone:*" id="email">
                            </div>
                            <br>
                            <textarea class="form-control" rows="7" placeholder="Mensagem:*" id="texto"></textarea>
                            <br>
                            <a href="">Enviar</a>
                            <br>
                            <br>
                            <div id="resultado-email"></div>
                            <br>
                            <br>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="col-lg-6 col-md-6 col-sm-3">
                                <img title="" alt="" src="icons/localização.png">
                                <p>Rua Ciri-Apoá, 187</p>
                                <p>São Miguel Paulista - SP</p>
                                <p>08081-060</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-3">
                                <img title="" alt="" src="icons/telefone.png">
                                <p>(11)4883-1080</p>
                                <p>(11)96080-2777</p>
                                <p class="contatomarginbottom">(11)97628-9595</p>
                            </div>
                            <div class="clearfix visible-md"></div>
                            <div class="col-lg-6 col-md-6 col-sm-3">
                                <img title="" alt="" src="icons/email.png">
                                <p class="contatomarginbottom">marcos.aurélio@<br>gilgalmasterconsult.com.br</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-3">
                                <img title="" alt="" src="icons/skype.png">
                                <p class="contatomarginbottom">marcos.gilgalmasterconsult</p>

                            </div>
                            <div class="col-lg-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.385671018003!2d-46.42484818545356!3d-23.482614164573018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63c8f6fbde41%3A0x2563db375d3b87ea!2sR.+Ciri+Apoa%2C+187+-+Jardim+Helena%2C+S%C3%A3o+Paulo+-+SP%2C+08081-060!5e0!3m2!1spt-BR!2sbr!4v1461160841389" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>




                <?php include ('./inc/borda.php'); ?>
            </main>
            <?php include ('./inc/footer.php'); ?>
            <style>
                #menu-contato{
                    background-color: #1A1616 !important;
                    color: #fff;}
            </style>
            <script src="js/jquery-2.1.0.min.js" type="text/javascript"></script>   
            <script src="js/script.js" type="text/javascript"></script>
            <script src="js/script.js" type="text/javascript"></script>

        </div>
    </body>
</html>

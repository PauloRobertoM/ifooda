<?php include 'components/header.php'; ?>

    <main class="contato" >
        <div class="container">
            <section id="contato">
                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3 coluna-contato">
                        <h5> Contato</h5>

                        <form>
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" id="name" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="assunto">Assunto</label>
                                <input type="text" class="form-control" id="assunto">
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Mensagem</label>
                            <textarea class="form-control" rows="6" id="mensagem"></textarea>
                            </div>

                            <button  type="submit" class="btn btn-default pull-right btn-form">Enviar</button>
                        </form>

                        <div class="redes-sociais">
                            <a href="#" class="hvr-float-shadow"><img src="assets/images/cont-instagram.png"></a>
                            <a href="#" class="hvr-float-shadow"><img src="assets/images/cont-twitter.png"></a>
                            <a href="#" class="hvr-float-shadow"><img src="assets/images/cont-facebook.png"></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    
<?php include 'components/footer.php'; ?>
<?php include 'components/header.php'; ?>

    <main class="contato" >    
        <section class="login esqueci-senha">
            <div class="container">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <h2>Recupere sua senha!</h2>
                    <form>
                        <div class="conteudo-input">
                            <div class="form-group">
                                <label for="email">E-mail cadastrado</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="g-recaptcha" data-sitekey="6Ldzo0YUAAAAANk__hV1j-ZK2VRMSXiK5bTXPEof"></div>

                            <button type="submit" class="entrar">Cadastre-se</button>
                        </div><!-- conteudo-input -->
                    </form>
                </div>
            </div><!-- container -->
        </section>
    </main>
    
<?php include 'components/footer.php'; ?>
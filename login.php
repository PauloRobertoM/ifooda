<?php include 'components/header.php'; ?>

    <main class="contato" >    
        <section class="login">
            <div class="container">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <h2>Entrar no Aifooda!</h2>
                    <form>
                        <div class="conteudo-input">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha">
                            </div>
                        </div><!-- conteudo-input -->
                        <div class="conteudo-botoes">
                            <button  type="submit" class="entrar">Entrar</button>
                            <p class="cancelar"><a>Cancelar</a></p>
                            <p class="esqueceu-senha"><a>Esqueceu sua senha?</a><br />
                            É novo no Aifooda? <a href="">Cadastre-se.</a></p>
                        </div><!-- conteudo-botoes -->
                    </form>
                </div>
            </div><!-- container -->
        </section>
    </main>
    
<?php include 'components/footer.php'; ?>
<?php include 'components/header.php'; ?>

    <main class="contato" >    
        <section class="login cadastro">
            <div class="container">
                <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                    <h2>Faça parte do Aifooda!</h2>
                    <form>
                        <div class="conteudo-input">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome">
                            </div>
                            <div class="form-group">
                                <label for="apelido">Como quer ser chamado</label>
                                <input type="text" class="form-control" id="apelido">
                            </div>
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
                            <button  type="submit" class="entrar">Cadastre-se</button>
                            <p class="esqueceu-senha">Ao cadastrar-se, você concorda com os <a href="">Termos de Uso</a> e a <a href="">Política de Privacidade.</a><br />
                            Já possui uma conta? <a href="">Entre.</a></p>
                        </div><!-- conteudo-botoes -->
                    </form>
                </div>
            </div><!-- container -->
        </section>
    </main>
    
<?php include 'components/footer.php'; ?>
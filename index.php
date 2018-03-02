<?php include 'components/header.php'; ?>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="titulos">
                <div class="titulo-modal">
                    <h2>Localizar automático</h2>
                </div><!-- titulo-modal -->
                <div class="titulo-modal">
                    <h2>Localizar manualmente</h2>
                </div><!-- titulo-modal -->
            </div>
            <div class="conteudo-modal">
                <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> Me localize</a>
            </div>
            <div class="conteudo-modal">
                <form>
                    <label>Digite o CEP</label>
                    <input type="text" class="form-control" name="cep" />
                </form>
            </div>
        </div>
    </div>

    <main>
        <div class="fundo-azul">
            <div class="container">
                <section id="conteudo-principal">
                    <h3 class="titulo-acompanhantes">Acompanhantes em São Paulo / SP <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-map-marker icone-mapa"></i> <span>Alterar</span></a></h3>

                    <div class="col-md-12 col-sm-12 col-xs-12 fundo-tooltip">
                        <ul>
                            <li>
                                <button type="button" class="btn btn-default botao-tooltip " data-toggle="tooltip" data-placement="bottom"
                            title="São Paulo">São Paulo <span class="pull-right">X</span></button>
                            </li>

                            <li>
                                <button type="button" class="btn btn-default botao-tooltip" data-toggle="tooltip" data-placement="bottom"
                                title="Zona Sul">Zona Sul <span class="pull-right">X</span></button>
                            </li>

                            <li>
                                <button type="button" class="btn btn-default botao-tooltip" data-toggle="tooltip" data-placement="bottom"
                                title="Dupla">Duplas <span class="pull-right">X</span></button>
                            </li>
                            
                            <li>
                                <button type="button" class="btn btn-default botao-tooltip" data-toggle="tooltip" data-placement="bottom"
                                title=" Peludos"> Peludos <span class="pull-right">X</span> </button>
                        </li>  
                        </ul>
                    </div>
                    
                    <div class="col-md-4 col-md-offset-8 col-sm-12 col-xs-12 coluna-resultado">
                        <span class="pull-right resultado">0000&nbsp; Resultados</span>
                    </div>
                    
                    <div class="banner1">
                        <img src="assets/images/banner1.jpg" class="img-responsive" />
                    </div>
                
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="slide">  
                                <div class="owl-carousel owl-theme" id="owl-slide">
                                    <div class="item">
                                        <img src="assets/images/slide.jpg" alt="" />
                                        <div class="content">
                                            <h3>Nome da pessoa - veja nossos destaques!</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                                            <a href="#"> CLIQUE E CONFIRA!</a>
                                        </div><!-- content -->
                                    </div><!-- .item -->
                                    <div class="item">
                                        <img src="assets/images/slide.jpg" alt="" />
                                        <div class="content">
                                            <h3>Nome da pessoa - veja nossos destaques!</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                                            <a href="#"> CLIQUE E CONFIRA!</a>
                                        </div><!-- content -->
                                    </div><!-- .item -->
                                </div><!-- . owl-carousel -->
                            </div><!-- slide -->
                        </div><!-- md-9 -->                    
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item-lista">
                                <img src="assets/images/pessoa.jpg" />
                                <span class="nome"> NOME / </span>
                                <span class="idade"> 20 anos</span>
                            
                                <div class="coluna-tootip">
                                    <ul>
                                        <li>
                                            <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                            
                                            <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                            
                                            <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                            
                                            <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                    
                                            <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                        
                                            <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                        
                                            <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                        
                                            <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                        </li>
                                    </ul>
                                </div>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                            </div>

                            <div class="informacao">
                            
                                <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                    <label class="td">TD</label>
                                </div>
                            
                                <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                    <label>
                                        <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                        <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                    </label>
                                </div>
                            
                                <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                    <label>
                                        <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                    </label>
                                </div>
                            
                                <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                    <label>
                                        <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item-lista">
                                        <img src="assets/images/pessoa.jpg" />
                                        <span class="nome"> NOME / </span>
                                        <span class="idade"> 20 anos</span>
                                    
                                        <div class="coluna-tootip">
                                            <ul>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                                    
                                                    <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                            
                                                    <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                                    </div>

                                    <div class="informacao">
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                            <label class="td">TD</label>
                                        </div>
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                            <label>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                            <label>
                                                <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                            <label>
                                                <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item-lista">
                                        <img src="assets/images/pessoa.jpg" />
                                        <span class="nome"> NOME / </span>
                                        <span class="idade"> 20 anos</span>
                                    
                                        <div class="coluna-tootip">
                                            <ul>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                                    
                                                    <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                            
                                                    <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                                    </div>

                                    <div class="informacao">
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                            <label class="td">TD</label>
                                        </div>
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                            <label>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                            <label>
                                                <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                            <label>
                                                <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item-lista">
                                        <img src="assets/images/pessoa.jpg" />
                                        <span class="nome"> NOME / </span>
                                        <span class="idade"> 20 anos</span>
                                    
                                        <div class="coluna-tootip">
                                            <ul>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                                    
                                                    <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                            
                                                    <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                                    </div>

                                    <div class="informacao">
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                            <label class="td">TD</label>
                                        </div>
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                            <label>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                            <label>
                                                <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                            <label>
                                                <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- md-9 -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <img src="assets/images/banner2.jpg" class="img-responsive banner" />
                        </div>
                    </div><!-- row -->

                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <img src="assets/images/banner3.jpg" class="img-responsive banner" />
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item-lista">
                                        <img src="assets/images/pessoa.jpg" />
                                        <span class="nome"> NOME / </span>
                                        <span class="idade"> 20 anos</span>
                                    
                                        <div class="coluna-tootip">
                                            <ul>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                                    
                                                    <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                            
                                                    <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                                    </div>

                                    <div class="informacao">
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                            <label class="td">TD</label>
                                        </div>
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                            <label>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                            <label>
                                                <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                            <label>
                                                <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item-lista">
                                        <img src="assets/images/pessoa.jpg" />
                                        <span class="nome"> NOME / </span>
                                        <span class="idade"> 20 anos</span>
                                    
                                        <div class="coluna-tootip">
                                            <ul>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                                    
                                                    <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                            
                                                    <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                                    </div>

                                    <div class="informacao">
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                            <label class="td">TD</label>
                                        </div>
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                            <label>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                            <label>
                                                <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                            <label>
                                                <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item-lista">
                                        <img src="assets/images/pessoa.jpg" />
                                        <span class="nome"> NOME / </span>
                                        <span class="idade"> 20 anos</span>
                                    
                                        <div class="coluna-tootip">
                                            <ul>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                                    
                                                    <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                            
                                                    <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                                    </div>

                                    <div class="informacao">
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                            <label class="td">TD</label>
                                        </div>
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                            <label>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                            <label>
                                                <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                            <label>
                                                <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- md-9 -->

                        <div class="col-md-9 col-sm-9">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item-lista">
                                        <img src="assets/images/pessoa.jpg" />
                                        <span class="nome"> NOME / </span>
                                        <span class="idade"> 20 anos</span>
                                    
                                        <div class="coluna-tootip">
                                            <ul>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                                    
                                                    <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                            
                                                    <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                                    </div>

                                    <div class="informacao">
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                            <label class="td">TD</label>
                                        </div>
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                            <label>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                            <label>
                                                <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                            <label>
                                                <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item-lista">
                                        <img src="assets/images/pessoa.jpg" />
                                        <span class="nome"> NOME / </span>
                                        <span class="idade"> 20 anos</span>
                                    
                                        <div class="coluna-tootip">
                                            <ul>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                                    
                                                    <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                            
                                                    <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                                    </div>

                                    <div class="informacao">
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                            <label class="td">TD</label>
                                        </div>
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                            <label>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                            <label>
                                                <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                            <label>
                                                <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item-lista">
                                        <img src="assets/images/pessoa.jpg" />
                                        <span class="nome"> NOME / </span>
                                        <span class="idade"> 20 anos</span>
                                    
                                        <div class="coluna-tootip">
                                            <ul>
                                                <li>
                                                    <button type="button" class="btn btn-default btn-tooltip0" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">São Paulo</button>
                                                    
                                                    <button type="button" class="btn btn-default  btn-tooltip1" data-toggle="tooltip" data-placement="bottom"title="Tooltip on top">20 anos</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip2" data-toggle="tooltip" data-placement="bottom"title="Tooltip on bottom">Jardins</button>
                                                    
                                                    <button type="button" class="btn btn-default btn-tooltip3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right">São Paulo</button>
                                            
                                                    <button type="button" class="btn btn-default btn-tooltip4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on left"> </button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></button>
                                                
                                                    <button type="button" class="btn btn-default btn-tooltip7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on right"></button>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                                    </div>

                                    <div class="informacao">
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-1">
                                            <label class="td">TD</label>
                                        </div>
                                    
                                        <div class="col-md-4 col-sm-4 col-xs-12 label-2 ">
                                            <label>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star estrela-amarela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o meia-estrela" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-3">
                                            <label>
                                                <i class="fa fa-heart-o coracao" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    
                                        <div class="col-md-2 col-sm-2 col-xs-12 label-4">
                                            <label>
                                                <i class="fa fa-minus-circle circulo" aria-hidden="true"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- md-9 -->
                    </div><!-- row -->

                    <div class="col-md-12 col-sm-12 col-xs-12 link">
                        <a href="#"> CARREGAR MAIS</a>
                    </div>
                </section>
            </div>
        </div>
    </main>

<?php include 'components/footer.php'; ?>
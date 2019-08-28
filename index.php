<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            PROJETO
        </title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
			require_once('modulos/header.php');
		?>
        <section id="slider">
            <div class="conteudo center">
                <!--slider-->
                <section id="corpo_slider">
                    <div class="slideshow" id="slideshow">
                        <div class="slide_selection">
                            <div class="selector" onclick="MudarSlide(0)"></div>
                            <div class="selector" onclick="MudarSlide(1)"></div>
                            <div class="selector" onclick="MudarSlide(2)"></div>
                            <div class="selector" onclick="MudarSlide(3)"></div>
                        </div>
                        <div class="slideshowarea">
                            
                            <div class="slide" style="background-color: black">
                                <div class="slideinfo">
                                    <div class="slideinfo_titulo">Heidelberg</div>
                                </div>	
                            </div>


                            <div class="slide" style="background-color: #cccccc">
                                <div class="slideinfo">
                                    <div class="slideinfo_titulo">Muro de Berlim</div>
                                </div>	
                            </div>


                            <div class="slide" style="background-color: #333333;">
                                <div class="slideinfo">
                                    <div class="slideinfo_titulo">Annaberg-Buchholz</div>
                                </div>	
                            </div>


                            <div class="slide" style="background-color: #999999; ">
                                <div class="slideinfo">
                                    <div class="slideinfo_titulo">Brandenburg Gate</div>
                                </div>	
                            </div>
                            
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section id="corpo">
            <div class="conteudo center">
                <div class="menu_vertical">
                    <ul class="menu_vertical_caixa">
                        <li class="menu_vertical_itens" id="item1"> ITEM 1
                            <ul class="sub_menu" id="sub_menu">
                                <li class="sub_menu_itens">sub item</li>
                            </ul>
                        </li>
                        <li class="menu_vertical_itens" id="item2"> ITEM 2
                            <ul class="sub_menu" id="sub_menu2">
                                <li class="sub_menu_itens">sub item</li>
                                <li class="sub_menu_itens">sub item</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="produtos">
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="caixa_produto">
                        <div class="img_produto center">
                            <img src="img/Silver_Hand.png" alt="produto">
                        </div>
                        <div class="desc_produto">
                            <ul>
                                <li>Nome:</li>
                                <li>Descrição:</li>
                                <li>Preço:</li>
                                <li class="detalhes">Detalhes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
			require_once('modulos/footer.php');
		?>
        <script type="text/javascript" src="js/slider.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
    </body>
</html>











































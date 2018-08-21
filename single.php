<?php
    require 'header-about.php';
?>

<div class="header-category"></div>

<div class="container">
    <div class="row">
        <div class="pub-desktop hide-on-small-only">
            PUBLICIDADE
        </div>
        <div class="pub-mobile hide-on-med-and-up">
            PUBLICIDADE
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <div class="title-single">
                I am a very simple card. I am good at containing small bits of information
            </div>
            <div class="img-single">
                <img src="assets/img/drops1.png">
            </div>
            <div class="date-single">
                17/08/2018 13:45
            </div>
            <div class="content-single">
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
            </div>
            <br>
            <div class="social-single">
                <div class="share-social">Compartilhe</div>
                <img class="face-img" src="assets/img/social/facebook.png"/>
                <img src="assets/img/social/twitter.png"/>
                <img src="assets/img/social/whatsapp.png"/>
            </div>
            <div class="line"></div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="leia">Leia Também</div>
                </div>
                <div class="col s12 m12">
                    <div class="row">

                        <div class="col s12 m6">
                            <?php
                                for($i = 1; $i <= 3; $i++){
                            ;?>
                                <div class="card horizontal">
                                    <div class="card-image">
                                        <img src="assets/img/luan.png">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-title-horizontal">
                                            <a href="javascript:void(null)">
                                                I am a very simple card
                                            </a>
                                        </div>
                                        <div class="card-content-horizontal">
                                            <a href="javascript:void()">
                                                I am a very simple card. I am good at containing small bits of information
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                             ?>
                        </div>

                        <div class="col s12 m6">
                            <?php
                            for($i = 1; $i <= 3; $i++){
                                ;?>
                                <div class="card horizontal">
                                    <div class="card-image">
                                        <img src="assets/img/luan.png">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-title-horizontal">
                                            <a href="javascript:void(null)">
                                                I am a very simple card
                                            </a>
                                        </div>
                                        <div class="card-content-horizontal">
                                            <a href="javascript:void()">
                                                I am a very simple card. I am good at containing small bits of information
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>


        <div class="col s12 m4">
            <?php require 'sidebar.php'; ?>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m12">
            <div class="leia">Patrocinados</div>
        </div>
        <?php
            for($i = 1; $i <= 3; $i++){;?>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="assets/img/drops1.png">
                    </div>
                    <div class="card-date">
                        17/08/2018 13:45
                    </div>
                    <div class="card-title">
                        <a href="javascript:void(null)">
                            I am a very simple card
                        </a>
                    </div>
                    <div class="card-content">
                        <a href="javascript:void()">
                            I am a very simple card. I am good at containing small bits of information
                        </a>
                    </div>
                </div>
            </div>
        <?php
             }
        ?>
    </div>

</div>

<?php
     require 'footer.php';
?>

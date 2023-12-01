<?php


/** @var yii\web\View $this */

$this->title = 'My Yii Application';

use yii\bootstrap4\Html;


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Document</title>
</head>

<body>

    <header class="header">
        <h2 class="">Page Title</h2>
    </header>

    <?php


    /** @var yii\web\View $this */

    $this->title = 'My Yii Application';

    use luc\tourist\Tourist;
    use yii\bootstrap4\Html;
    use yii\data\ArrayDataProvider;
    use yii\grid\GridView;

    use yii\base\Model;
    use yii\data\ActiveDataProvider;


    ?>
    <?php //WORKING 
    ?>
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/css/bootstrap-tour.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script src="http://cdn.jsdelivr.net/bootstrap-tour/0.9.1/js/bootstrap-tour.min.js"></script> -->
    <style>
        .show {
            display: block;
            opacity: 1;
        }
    </style>

    <div class="site-index">


        <!-- Modal -->
        <div class="modal fade show" id="vipAccessModal" tabindex="-1" role="dialog" aria-labelledby="vipAccessModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="vipAccessModalLabel">Descrição</h5>
                    </div>
                    <div class="container">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <span class="card-title">Nome</span>
                                        <span class="card-subtitle mb-2 text-muted">CNPJ/CPF</span>
                                    </div>
                                    <div>
                                        <span class="card-text">Período</span>
                                        <span class="card-text">Vencimento/Valor</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="modal-body">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nome</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">CPF</h6>
                                    <p class="card-text">Data período</p>
                                    <p class="card-text">Data vencimento</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nome</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">CPF</h6>
                                    <p class="card-text">Data período</p>
                                    <p class="card-text">Data vencimento</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nome</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">CPF</h6>
                                    <p class="card-text">Data período</p>
                                    <p class="card-text">Data vencimento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-primary">Acesso VIP</a>
                        <button id="closeButtonId" type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <!-- Modal -->



        <button id="buttonId" type="button" class="btn btn-primary" data-toggle="modal" data-target="#vipAccessModal">Acesso VIP</button>

        <script>
            // Seleciona o botão que abre o modal
            var button = document.querySelector('#buttonId');

            // Seleciona o modal
            var modal = document.querySelector('#vipAccessModal');

            // Adiciona um evento de clique ao botão
            button.addEventListener('click', function() {
                // Adiciona a classe 'show' ao modal
                modal.classList.add('show');
            });

            // Seleciona o botão que fecha o modal
            var closeButton = document.querySelector('#closeButtonId');

            // Adiciona um evento de clique ao botão
            closeButton.addEventListener('click', function() {
                // Remove a classe 'show' do modal
                modal.classList.remove('show');
            });
        </script>
    </div>

</body>
</div>
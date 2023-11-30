<?php


/** @var yii\web\View $this */

$this->title = 'My Yii Application';

use yii\bootstrap4\Html;


?>
<?php //WORKING 
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
        <h2 class="">Title</h2>
    </header>
    <div class="container">

        <div class="site-index">
            <!-- Modal -->
            <div class="modal fade" id="vipAccessModal" tabindex="-1" role="dialog" aria-labelledby="vipAccessModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- Titulo do Modal -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="vipAccessModalLabel">Descrição</h5>
                            <!-- <?php echo Html::img('@web/images/img.jpeg', ['alt' => 'Descrição da Imagem', 'class' => '', 'style' => 'width: 150px; height: auto;']); ?> -->
                        </div>

                        <div class="modal-body">
                            <!-- Header do Modal-Body -->
                            <div class="card-deck">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <span class="card-title">Nome:</span>
                                            <span class="card-text" id="nome">Sérgio Augusto Dias Pile</span>
                                        </div>
                                        <div>
                                            <span class="card-subtitle mb-2 text-muted">CNPJ/CPF:</span>
                                            <span class="card-text" id="cnpj">07943771907</span>
                                        </div>
                                        <div>
                                            <span class="card-text">Período:</span>
                                            <span class="card-text" id="periodo">20-05-2023 a 20-05-2024</span>
                                        </div>
                                        <div>
                                            <span class="card-text">Valor:</span>
                                            <span class="card-text" id="valor">R$ 1584,00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Grid com cards -->
                            <div class="mt-4">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Comprovantes</h5>
                                            </div>
                                            <div class="card-body">
                                                <button class="btn btn-primary">Botão</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Romaneio</h5>
                                            </div>
                                            <div class="card-body">
                                                <button class="btn btn-primary">Botão</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Boleto</h5>
                                            </div>
                                            <div class="card-body">
                                                <button class="btn btn-primary">Botão</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Nota Fiscal</h5>
                                            </div>
                                            <div class="card-body">
                                                <button class="btn btn-primary">Botão</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Adicione mais cards conforme necessário -->
                            </div>



                            <!-- Área para copiar o link -->
                            <div class="mt-4 ">
                                <label for="linkInput">Link de Acesso:</label>
                                <div class="input-group d-flex flex-row-reverse">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" onclick="copyLink()">Copiar</button>
                                    </div>
                                    <input type="text" class="form-control w-auto" id="linkInput" value="https://seulinkuashduahsudhasudhuashduashduashduhasduhasduhasudhasudhuasdhuiasdhiasdiasjashduashduash.com" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- Botão para fechar o modal -->
                        <div class="modal-footer">
                            <button id="closeButtonId" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal -->


            <button id="buttonId" type="button" class="btn btn-primary" data-toggle="modal" data-target="#vipAccessModal">Acesso
                VIP
            </button>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
    </div>

</body>
</div>
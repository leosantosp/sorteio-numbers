<?php 
    require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Sorteio, Sorteio de Números">
    <meta name="robots" content="noindex, nofollow">
    <title>Sistema de Sorteio</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="informacoes">
        <h4>LEGENDA</h4>
        <div class="disponivel">Disponível</div>
        <div class="ocupado">Ocupado</div>
        <div class="selecionado">Selecionado</div>
    </div>

    <!-- THE MODAL --> 
    <div class="modal modalinfo show fade" id="modalInfo">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
        </div>
    </div>

    <div class="container-bus">
        <?php 
            // SELECIONA TODOS OS ASSENTOS DA TABELA ASSENTOS
            $selectAssentos = $pdo->query("SELECT * FROM assentos");
            $retornoAssentos = $selectAssentos->fetchAll();

            foreach($retornoAssentos as $retorno):

            echo "<div class='item-container disponivel' data-number={$retorno['numero']}'>{$retorno['numero']}</div>";

            endforeach;
        ?>
    </div>
    <button id="confirmar">Confirmar Número</button>
    <button id="limpar">Limpar Seleção</button>
</div>

<div class="modal fade" id="modalConfirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Confirmar Reserva</h4>
                <button type="button" class="close fechar" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" id="form_confirm">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Nome Cliente</label>
                                    <select name="cliente" id="cliente" class="form-control">
                                        <option selected="selected" data-id="" value="">Cliente Nome</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">ID Cliente</label>
                                <input type="text" class="cliente_id" name="cliente_id" value="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="ocupado">1 - Ocupado</option>
                                        <option value="disponivel">2 - Disponível</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-sm-6 numero-assento"></div>

                    </div>

                    <div class="row">
                        <div class="col-12 mensagem">

                        </div>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" id="confirm_reserva" class="btn btn-sucess" value="Confirmar Reserva">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
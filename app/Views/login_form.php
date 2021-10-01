<?php 
$this->extend('layout\main.php');

 $this->section('conteudo');?>
 <div class="container">
    <div class="row">
        
        <div class="col">
        <?php
            if (!empty($msg)) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php
            }
            ?>
            <div class="card text-center">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="/Login/logar" class="form-control" method="POST">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Usuario</label>
                                <input class="form-control" type="text" name="usuario" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">senha</label>
                                <input type="password" class="form-control" name="senha">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="mt-3 btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="card-footer text-muted">
                    Sistema Projeto CI
                </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>
</div>
<?php
$this->endSection();
?>
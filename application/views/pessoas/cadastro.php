<?php $this->load->view('templates/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item">
                <a href="#">Pessoa</a>
            </li>
            <li class="breadcrumb-item active">Nova Pessoa</li>

            <li>



        </ol>

        <?php echo validation_errors(); ?>

        <form  action="<?= base_url() ?>pessoas/nova" method="post" >

            <div class="row">
                <div class="col-md-12 col-md-offset-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome" placeholder="Nome">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Identidade</label>
                                <input type="text" class="form-control" name="identidade" placeholder="Identidade">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Data Nascimento</label>
                                <input type="date" class="form-control" name="data_nasc">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>

<?php $this->load->view('templates/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item">
                <a href="#">Endereço</a>
            </li>
            <li class="breadcrumb-item active">Novo Endereço</li>

            <li>



        </ol>

        <?php echo validation_errors(); ?>

        <form  action="<?= base_url() ?>enderecos/novo" method="post" >

            <div class="row">
                <div class="col-md-12 col-md-offset-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label>Pessoa a Pessoa</label>
                            <select name="pessoa_id" class="form-control">
                                <option value="">Selecione</option>
                                <?php foreach ($pessoas as $pessoa): ?>
                                    <option value="<?php echo $pessoa['id']; ?>"><?php echo $pessoa['nome']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" class="form-control" name="endereco" placeholder="Endereço">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>UF</label>
                                <select class="form-control" name="uf" id="uf">
                                    <option value="">Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CEP</label>
                                <input type="text" class="form-control" name="cep" placeholder="CEP">
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

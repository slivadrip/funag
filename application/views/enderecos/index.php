<?php $this->load->view('templates/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item">
                <a href="#">Endereço</a>
            </li>
            <li class="breadcrumb-item active">Lista de Endereços</li>
            <li>
        </ol>
    </div>

    <div class="container">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cidade</th>
                <th scope="col">UF</th>
                <th scope="col">CEP</th>
                <th scope="col">Pessoa</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($enderecos as $endereco) : ?>

                <tr>
                    <th scope="row"> <?php echo $endereco->id_endereco; ?></a></th>
                    <td> <?php echo $endereco->endereco; ?></a></td>
                    <td> <?php echo $endereco->cidade; ?></a></td>
                    <td> <?php echo $endereco->uf; ?></a></td>
                    <td> <?php echo $endereco->cep; ?></a></td>
                    <td> <?php echo $endereco->nome; ?></a></td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>


</div>
<?php $this->load->view('templates/footer'); ?>

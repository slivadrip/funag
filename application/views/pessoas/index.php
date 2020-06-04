<?php $this->load->view('templates/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item">
                <a href="#">Pessoa</a>
            </li>
            <li class="breadcrumb-item active">Lista de Pessoas</li>
            <li>
        </ol>
    </div>

    <div class="container">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Identidade</th>
                <th scope="col">Data Nascimento</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($pessoas as $pessoa) : ?>

                <tr>
                    <th scope="row"> <?php echo $pessoa->id; ?></a></th>
                    <td> <?php echo $pessoa->nome; ?></a></td>
                    <td> <?php echo $pessoa->identidade; ?></a></td>
                    <td> <?php echo date("d-m-Y", strtotime($pessoa->data_nasc));  ?></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>


</div>
<?php $this->load->view('templates/footer'); ?>

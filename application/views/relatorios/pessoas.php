<?php foreach ($pessoas as $pessoa) : ?>

    Nome: <strong> <?php echo $pessoa->nome; ?></strong>
    <br>
    <?php
    $count = 0;
    foreach ($enderecos as $endereco) :

        if ($pessoa->id == $endereco->pessoa_id) {
            if ($count == 1) {
                echo '<i>';
            }
            echo $endereco->endereco . " " . $endereco->cidade . " " . $endereco->uf . " " . $endereco->cep;
            echo "<br>";
            if ($count == 1) {
                echo '</i>';
            }
            $count += 1;
        } ?>

    <?php endforeach; ?>
    <hr>
    <br>
<?php endforeach; ?>

<p>Total de Cadastrados: <?php echo $countPessoa; ?></p>



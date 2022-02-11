
<h1>Cadastro de Carro</h1>
<?php echo form_open('carro/inserir'); ?>
<br><br>
<input class="form-control" type="text" required name="marca" placeholder="Marca Aqui..."/>
<br><br>
<input class="form-control" type="text" required name="modelo" placeholder="Modelo Aqui..."/>
<br><br>
<input class="form-control" type="text" required name="portas" placeholder="Número Portas Aqui..."/>
<br><br>
<input class="form-control" type="color" required name="cor" placeholder="Cor Aqui..."/>
<br><br>
<input class="form-control" type="text" required name="placa" placeholder="Placa Aqui..."/>
<br><br>
<select class="form-control" name="idPessoa" id="idPessoa">
    <option value="">Proprietário</option>
    <?php foreach ($pessoas as $pes): ?>
        <option value="<?php echo $pes->idPessoa; ?>"><?php echo $pes->nome; ?></option>
    <?php endforeach; ?>
</select> 
<br><br>
<input class="btn btn-outline-success" type="submit" value="Salvar"/>
<input class="btn btn-outline-danger" type="reset" value="Limpar"/>
<?php echo form_close(); ?>
<h2>Lista Carros</h2>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th>Marca</th><th>Modelo</th><th>Portas</th><th>Placa</th><th>Cor</th><th>Proprietário</th><th>Funções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($carros as $car): ?>
            <tr>
                <td><?php echo $car->marca; ?></td>
                <td><?php echo $car->modelo; ?></td>
                <td><?php echo $car->portas; ?></td>
                <td><?php echo $car->placa; ?></td>
                <td><input type="color" disabled value="<?php echo $car->cor; ?>" /></td>
                <td><?php
                    foreach ($pessoas as $pes):
                        if($car->idPessoa == $pes->idPessoa){
                            echo $pes->nome;
                            break;
                        }
                    endforeach;
                    ?></td>
                <td>
                    <a href="<?php
                    echo base_url() .
                    'carro/editar/' .
                    $car->idCarro;
                    ?>">Editar</a> | 
                    <a href="<?php
                    echo base_url() .
                    'carro/excluir/' .
                    $car->idCarro;
                    ?>">Deletar</a>
                </td>
            </tr>
<?php endforeach; ?>
    </tbody>
</table>

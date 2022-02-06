<h3>Rota para edição de carros</h3>

<?php
$property = $property[0];
?>

<form action="<?=url('/carros/update',['id' =>$property->id]);?>" method="post">

    <?= csrf_field(); ?>
    <?= method_field('PUT');?>

    <label for="title" >Nome do carro</label>
    <input type="text" name="title" id="title" value="<?= $property->title;?>">
    <br>
    <label for="description" >Descrição do carro</label>
    <textarea type="text" name="description" id="description" cols="30" rows="5" ><?= $property->description;?></textarea>
    <br>
    <label for="sale_price" >Preço de venda do carro</label>
    <input type="text" name="sale_price" id="sale_price"  value="<?= $property->sale_price;?>">
    <br>
    <label for="rental_price" >Preço de locação do carro</label>
    <input type="text" name="rental_price" id="rental_price"  value="<?= $property->rental_price;?>" >
    <br>
    <button type="submit">Editar carro</button>

</form>
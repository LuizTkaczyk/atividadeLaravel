<h3>Rota para a criação de carros</h3>

<form action="<?=url('/carros/store');?>" method="post">

    <?= csrf_field(); ?>

    <label for="title" >Nome do carro</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="description" >Descrição do carro</label>
    <textarea type="text" name="description" id="description" cols="30" rows="5"></textarea>
    <br>
    <label for="sale_price" >Preço de venda do carro</label>
    <input type="text" name="sale_price" id="sale_price">
    <br>
    <label for="rental_price" >Preço de locação do carro</label>
    <input type="text" name="rental_price" id="rental_price">
    <br>
    <button type="submit">Cadastrar carro</button>

</form>
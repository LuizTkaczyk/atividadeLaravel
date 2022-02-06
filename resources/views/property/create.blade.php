@extends('property.master')
@section('content')

<div class="container my-3 w-25">
<h3>Cadastro de veículos</h3>

    <form action="<?=url('/carros/store');?>" method="post">

        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="title" >Nome do carro</label>
            <input type="text" name="title" id="title" class="form-control">

        </div>

       <div class="form-group">
            <label for="description" >Descrição do carro</label>
            <textarea type="text" name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="sale_price" >Preço de venda do carro</label>
            <input type="text" name="sale_price" id="sale_price" class="form-control">
        </div>

        <div class="form-group">
            <label for="rental_price" >Preço de locação do carro</label>
            <input type="text" name="rental_price" id="rental_price" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-primary my-3">Cadastrar carro</button>

    </form>
</div>
@endsection
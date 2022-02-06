@extends('property.master')
@section('content')

    <div class="container my-3 w-25">
        <h3>Edição de veículos</h3>

        <?php
        $property = $property[0];
        ?>

        <form action="<?= url('/carros/update', ['id' => $property->id]) ?>" method="post">

            <?= csrf_field() ?>
            <?= method_field('PUT') ?>
            <div class="form-group">
                <label for="title">Nome do carro</label>
                <input type="text" name="title" id="title" value="<?= $property->title ?>" class="form-control">
            </div>
            <div class="form-group">
                <br>
                <label for="description">Descrição do carro</label>
                <textarea type="text" name="description" id="description" cols="30"
                    rows="5" class="form-control" > <?= $property->description ?> </textarea>
            </div>
            <div class="form-group">
                <br>
                <label for="sale_price">Preço de venda do carro</label>
                <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price ?>" class="form-control">
            </div>
            <div class="form-group">
                <br>
                <label for="rental_price">Preço de locação do carro</label>
                <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price ?>" class="form-control">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Editar carro</button>

        </form>
    </div>
@endsection

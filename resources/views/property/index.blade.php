@extends('property.master')
@section('content')

<div class="container my-3 w-50">
<h3>Lista de veículos cadastrados</h3>

<?php
if (!empty($properties)) {
    echo "<table class='table table-striped table-hover'>";
    echo "<thead class='bg-primary text-white'>
            <td>Título</td>
            <td>Valor de Locação</td>
            <td>Valor de venda</td>
            <td>Ações</td>
         </thead>";

    foreach ($properties as $property) {

        $linkReadMore = url('/carros/' . $property->name);
        $linkEditItem = url('/carros/editar/' . $property->name);
        $linkRemoveItem = url('carros/remover/' .$property->name);

        echo "<tr>
                <td>{$property->title}</td>
                <td>R$ " . number_format($property->rental_price, 2, ',', '.') . "</td>
                <td>R$ " . number_format($property->sale_price, 2, ',', '.') . "</td>
                <td> <a href='{$linkReadMore}' class='text-decoration-none'>Ver mais </a> | <a href='{$linkEditItem}' class='text-decoration-none'>Editar</a> | <a href='{$linkRemoveItem}' class='text-decoration-none'>Remover</a> </td>
        
        </tr>";

        //var_dump($property);
    }

    echo "</table>";
}
?>
</div>
@endsection
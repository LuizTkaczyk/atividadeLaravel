<h3>Rota funcionando</h3>

<p> <a href=" <?= url('/carros/novo');  ?>">Cadastrar novo veículo</a> </p>

<?php
if (!empty($properties)) {
    echo "<table>";
    echo "<tr>
            <td>Título</td>
            <td>Valor de Locação</td>
            <td>Valor de venda</td>
            <td>Ações</td>
         </tr>";

    foreach ($properties as $property) {

        $linkReadMore = url('/carros/' . $property->name);
        $linkEditItem = url('/carros/editar/' . $property->name);
        $linkRemoveItem = url('carros/remover/' .$property->name);

        echo "<tr>
                <td>{$property->title}</td>
                <td>R$ " . number_format($property->rental_price, 2, ',', '.') . "</td>
                <td>R$ " . number_format($property->sale_price, 2, ',', '.') . "</td>
                <td> <a href='{$linkReadMore}'>Ver mais </a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Remover</a> </td>
        
        </tr>";

        //var_dump($property);
    }

    echo "</table>";
}

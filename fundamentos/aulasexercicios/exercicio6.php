<?php
// "Banco de Dados"
$produtos = array(
    array(
        "Nome" => "Shampoo",
        "Marca" => "L'Oréal",
        "Preço" => 18.00
    ),
    array(
        "Nome" => "Condicionador",
        "Marca" => "L'Oréal",
        "Preço" => 21.50
    ),
    array(
        "Nome" => "Creme para Pentear",
        "Marca" => "Salonline",
        "Preço" => 34.50
    ),
    array(
        "Nome" => "Leave-in",
        "Marca" => "Wella",
        "Preço" => 16.99
    )
);

foreach ($produtos as $produtos){
    echo '
        <div>
            <h2>' . $produtos["Nome"] .'</h2>
            <p style="font-style: italic;">' . $produtos["Marca"] .'</p>
            <p>' . $produtos["Preço"] .'</p>
            <button>Comprar</button>
        
        </div>
         ';
    
   
         
}

?>


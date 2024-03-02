<h3>Fornecedor</h3>

@dd($fornecedores)

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem mais de 10</h3>
@else
    <h3>O resto</h3>
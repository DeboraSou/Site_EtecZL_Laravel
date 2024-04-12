<h3> admin - fornecedores - index </h3>

{{--Comentário que será descartado pelo interpretador do blade. --}}

{{--Aula de Laravel Blade.--}}

{{-- Vai trazer o valor do array criada no FronecedorController --}}
{{-- @dd($fornecedores); --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados.</h3>

    @elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados.</h3>
    
    @else
    <h3>Não existem alguns fornecedores cadastrados.</h3>
@endif
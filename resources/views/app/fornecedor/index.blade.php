<h3>Fornecedor</h3>

@php

@endphp
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedores[1]['telefone'] ?? '' }}) {{ $fornecedores[1]['telefone'] ?? '' }}
    @switch($fornecedores[1]['status'])
        @case('11')
            Sao Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break 
        @default
            Estado não identificado       
@endisset

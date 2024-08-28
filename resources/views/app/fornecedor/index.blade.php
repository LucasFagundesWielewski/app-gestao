<h3>Fornecedor</h3>

<h3>Fornecedor</h3>

@php
@endphp

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['telefone'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <br>
    @endfor
@endisset

<br>
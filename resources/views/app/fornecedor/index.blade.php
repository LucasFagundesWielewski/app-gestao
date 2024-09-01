<h3>Fornecedor</h3>

<h3>Fornecedor</h3>

@php
@endphp

@isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['telefone'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <br>
        @php $i++ @endphp
    @endwhile
@endisset

<br>
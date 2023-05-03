<h1>Fornecedores</h1>


@php 


  
@endphp


@unless(empty($fornecedores)) {{-- verifica se a variável está vazia --}}
    <h3>Existem fornecedores cadastrados</h3>
@endunless




@php
$totalFornecedores = 0; // inicializa a variável para contar o número de fornecedores
@endphp

@forelse($fornecedores as $index => $fornecedor)

   
    @if($loop->last)
      <p>Total de fornecedores: {{ $loop->count }}</p>
    @endif

    <div
      style="{{ $loop->odd ? 'background: #eee' : 'background: #fff' }}"
    >
    {{ $loop->first ? 'Primeira iteração do Loop' : '' }} {{-- verifica se é o primeiro elemento do array --}}
    {{ $loop->last ? 'Ultima iteração do Loop' : '' }} {{-- verifica se é o último elemento do array --}}

      <div
      style="display: flex; justify-content: flex-start; align-items: center; gap: 1rem; "
    > 
      <h3>Nome: </h3> <span>{{$fornecedor['nome']}}</span>
    </div>
    <div
    style="display: flex; justify-content: flex-start; align-items: center; gap: 1rem;"
  > 
    <h3>Cnpj: </h3> <span>{{$fornecedor['cnpj'] ?? 'Não informado'}}</span>
    @empty($fornecedor['cnpj']) {{-- verifica se o campo cnpj está vazio --}}
    @endempty

  </div>
    <div
      style="display: flex; justify-content: flex-start; align-items: center; gap: 1rem;"
    >
      <h5>Status: </h5> <span>{{$fornecedor['status'] == "N" ? "Não" : "Sim"}}</span>
    </div>
    @if(!($fornecedor['status'] == 'S'))
        <p>Fornecedor Inativo</p>
      @else
        <p>Fornecedor Ativo</p>
    @endif
    </div>

    @php
      $totalFornecedores++;
    @endphp
    <hr>

    @empty
      <p>Não existem fornecedores cadastrados</p>

@endforelse









@foreach ($produtos as $produto)
    <div style="background: {{ $loop->odd ? '#cecece' : '#000' }}">{{ $produto['nome'] }}</div>
    @if($loop->first)
        Primeira iteração
    @endif
    @if($loop->last)
    ultima iteração
@endif
@endforeach

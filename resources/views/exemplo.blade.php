<h1>Titulo</h1>

<p>Essa página é do(a) {{$nome}}</p>

<br>
{{-- @foreach ($categorias as $itemcategoria)

<p> {{ $itemcategoria->descricao }}
    
@endforeach --}}

<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Tipo</td>
            <td>Criado Em</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $itemcategoria)
            <tr>
                <td>{{$itemcategoria->id}}</td>
                <td>{{$itemcategoria->nome}}</td>
                <td>{{$itemcategoria->descricao}}</td>
                <td>{{$itemcategoria->created_at}}</td>
            </tr>
        @endforeach
        
    </tbody>
</table>

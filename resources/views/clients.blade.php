
@section('clients')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <span class="text-gray-400">({{ $data->count() }})</span>
    </h2>

    @foreach ($data as $date)
    <div class="alert alert-info">
            <h3>{{$date->name}}</h3>
            <p>{{$date->email}}</p>
            <p>{{$date->created_at}}</p>
        <h1>{{$date->payment}}</h1>
        <h1>{{$date->tags}}</h1>
    </div>


    @endforeach

{{$data->links()}}
@endsection

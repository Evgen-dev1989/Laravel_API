
@section('clients')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <span class="text-gray-400">({{ $data->count() }})</span>
    </h2>

    <div class="alert alert-info">
        @foreach ($data as $date)
            <h3>{{$date->name}}</h3>
            <p>{{$date->email}}</p>
            <p>{{$date->created_at}}</p>
        @endforeach
    </div>
    
{{$data->links()}}
@endsection

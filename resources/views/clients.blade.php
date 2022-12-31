@section('clients')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <span class="text-gray-400">({{ $data->count() }})</span>
    </h2>
    <form action="{{ route('clients') }}" method="get" class="pb-4">
        <div class="form-group">
            <input
                type="text"
                name="q"
                class="form-control"
                placeholder="Search..."
                value="{{ request('q') }}"
            />
        </div>
    </form>
    @if (request()->has('q'))
        <p class="text-sm">Using search: <strong>"{{ request('q') }}"</strong>. <a
                class="border-b border-indigo-800 text-indigo-800" href="{{ route('clients') }}">Clear filters</a></p>
    @endif

    @foreach($data as $date)
        <form>
            <div class="alert alert-info">
                <h4>{{ $date->name }}</h4>
                {{ $date->email }}
                {{ $date->created_at}}
                {{$date->tags}}
            </div>
        </form>
    @endforeach
@endsection



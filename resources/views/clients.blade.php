
@section('clients')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <span class="text-gray-400">({{ $data->count() }})</span>
    </h2>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('all') }}" method="get" class="pb-3">
                        <div class="form-group">
                            <input
                                type="text"
                                name="q"
                                class="form-control"
                                placeholder="Search..."
                                value="{{ request('q') }}"/>
                        </div>
                    </form>
                    @if (request()->has('q'))
                        <p class="text-sm">Using search: <strong>"{{ request('q') }}"</strong>. <a class="border-b border-indigo-800 text-indigo-800" href="{{ route('all') }}">Clear filters</a></p>
                    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 space-y-8">
                    @forelse ($data as $date)
                        <div class="alert alert-info">
                            <h3>{{$date->name}}</h3>
                            <p>{{$date->email}}</p>
                            <p>{{$date->created_at}}</p>
                            @foreach ($date->tags as $tag)
                                <span class="text-xs px-2 py-1 rounded bg-indigo-50 text-indigo-500">{{ $tag}}</span>
                            @endforeach
                        </div>
                </div>

                    @empty
                        <p>No clients found</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

@endsection

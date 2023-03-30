<h1>法律一覧</h1>

@foreach($laws as $law)
    <p><a href="{{ route('laws.show', $law) }}">{{ $law->name }}</a></p>
@endforeach


<h1>{{ $law->name }}法改正情報</h1>

@foreach($law->revisionLaws as $revision_law)
    <p>{{ $revision_law->created_at }}</p>
@endforeach

<a href="{{route('revisionLaws.create')}}">法改正情報作成</a>
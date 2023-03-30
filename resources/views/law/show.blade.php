<h1>{{ $law->name }}法改正情報</h1>

@foreach($law->revisionLaws as $revision_law)
    <p>{{ $revision_law->created_at }}</p>
@endforeach
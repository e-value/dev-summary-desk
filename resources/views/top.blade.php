@extends('layouts.app')

@section('content')

<form action="{{ route('revisionLaws.search') }}" method="get">
@foreach($law_categories as $law_category)
<h3>{{ $law_category->name }}</h2>
    <input type="checkbox" id="law_category_{{$law_category->id}}" value="{{ $law_category->id }}">
    <div id="laws_belongs_to_category_{{$law_category->id}}" style="display: none;">

        @foreach($law_category->laws as $law)

        <p>{{ $law->name }}</p>
        <input type="checkbox" name="law_ids[]" value="{{ $law->id }}">

        @endforeach

    </div>
    @endforeach

    <button id="law_search" class="btn btn-primary">検索</button>
</form>

    @foreach($revision_laws as $revision_law)
        <p>{{ $revision_law->id }}</p>
    @endforeach
    
@endsection
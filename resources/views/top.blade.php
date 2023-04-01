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
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>法律名</th>
                <th>発行日</th>
                <th>施行日</th>
            </tr>
        </thead>
        <tbody>
            @foreach($revision_laws as $revision_law)
            <tr>
                <td>{{ $revision_law->id }}</td>
                <td>{{ $revision_law->law->name }}</td>
                <td>{{ $revision_law->issue_date }}</td>
                <td>{{ $revision_law->enforcement_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {{ $revision_laws->links() }}
    </div>
@endsection
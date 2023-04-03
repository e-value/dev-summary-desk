@extends('layouts.app')

@section('content')

<form action="{{ route('top') }}" method="get">
    <input class="form-check-input" type="checkbox" name="search_dates[]" id="issue_date" value="issue_date">
    <label class="form-check-label fs-5">施行日</label>

    <input class="form-check-input" type="checkbox" name="search_dates[]" id="enforcement_date" value="enforcement_date">
    <label class="form-check-label fs-5">公布日</label>

    <div class="form-group">
        <div class="form-check form-check-inline">
            <input type="date" id="from_date" name="from_date">
            <input type="date" id="until_date" name="until_date">
        </div>

        <div class="form-check form-check-inline">
            <label for="">フリーワード</label>
            <input type="text" name="keyword" value="">
        </div>

    </div>
    
    <div class="form-group">
        @foreach($law_categories as $law_category)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  id="law_category_{{$law_category->id}}" value="{{ $law_category->id }}">
                <label class="form-check-label fs-5">{{ $law_category->name }}</label>
                    <div id="laws_belongs_to_category_{{$law_category->id}}" style="display: none;">
                        @foreach($law_category->laws as $law)
                            <input type="checkbox" name="law_ids[]" value="{{ $law->id }}">
                            <label class="form-check-label">{{ $law->name }}</label>
                        @endforeach
                    </div>
            </div>
        @endforeach
    </div>
    <button id="law_search" class="btn btn-primary">検索</button>
</form>


    <table class="table">
        <thead>
            <tr>
                <th><input type="checkbox" id="select-all-checkbox"></th>
                <th>id</th>
                <th>公布日</th>
                <th>施行日</th>
                <th>法分類</th>
                <th>法律名</th>
                <th>ステータス</th>
                <th>ポイント</th>
                
            </tr>
        </thead>
        <tbody>
           
                @foreach($revisionLaws as $revision_law)
                    <tr>
                        <td><input type="checkbox" name="revision_laws[]" class="revision_law-checkbox"></td>
                        <td>{{ $revision_law->id }}</td>
                        <td>{{ $revision_law->issue_date }}</td>
                        <td>{{ $revision_law->enforcement_date }}</td>
                        <td>{{ $revision_law->law->category->name }}</td>
                        <td>{{ $revision_law->law->name }}</td>
                        <td>{{ $revision_law->status }}</td>
                        <td>{{ $revision_law->point }}</td>
                    </tr>
                @endforeach
           
        </tbody>
    </table>
    <div class="d-flex">
        {{ $revisionLaws->appends(request()->query())->links() }}
    </div>
@endsection
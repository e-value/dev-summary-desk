@extends('layouts.app')

@section('content')

    @foreach($law_categories as $law_category)
        <h2>{{ $law_category->name }}</h2>
        <input type="checkbox" name="law_category_{{$law_category->id}}" value="{{ $law_category->id }}">
        <div class="laws" style="display: none;">
            @foreach($law_category->laws as $law)
                <p>{{ $law->name }}</p>
                <input type="checkbox" name="law_ids[]" value="{{ $law->id }}">
            @endforeach
        </div>
    @endforeach

@endsection
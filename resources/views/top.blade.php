<h1>Summary-Desk</h1>

@foreach($law_categories as $law_category)
    <h2>{{ $law_category->name }}</h2>
    <input type="checkbox">
    @foreach($law_category->laws as $law)
        <p>{{ $law->name }}</p>
    @endforeach 
@endforeach
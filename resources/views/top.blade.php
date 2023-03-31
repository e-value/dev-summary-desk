<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Summary-Desk</title>
</head>

<body>

    <h1>Summary-Desk</h1>

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

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(function(){
            $('input[type=checkbox][name=law_category_1]').change(function() {
                if ($(this).is(':checked')) {
                    $('.laws').show();
                }else {
                    $('.laws').hide();
                }
            });
        });
    </script>

</body>

</html>
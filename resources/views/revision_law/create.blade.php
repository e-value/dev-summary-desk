<h1>法改正情報新規作成</h1>

<form action="{{ route('revisionLaws.store')}}" method="post">
    @csrf 
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <button type="submit">作成</button>
</form>
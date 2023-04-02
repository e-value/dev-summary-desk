$(function(){
    $('input[type=checkbox][id^="law_category_"]').change(function() {
        if ($(this).is(':checked')) {
            // inputタグのid部分の13文字目以降の値を取得
            // 例) id="law_category_{{$law_category->id}}" の{{$law_category->id}}を取得
            var law_category_id = $(this).attr('id').substr(13);

            // 法分類のチェックボックスを入れるとlaws_belongs_to_category_{{$law_category->id}}を非表示に
            var laws_belongs_to_category_id = '#laws_belongs_to_category_' + law_category_id
            $(laws_belongs_to_category_id).show();
        }else {
            // inputタグのid部分の13文字目以降の値を取得
            // 例) id="law_category_{{$law_category->id}}" の{{$law_category->id}}を取得
            var law_category_id = $(this).attr('id').substr(13);

            // 法分類のチェックボックスを外すとlaws_belongs_to_category_{{$law_category->id}}を非表示に
            var laws_belongs_to_category_id = '#laws_belongs_to_category_' + law_category_id
            $(laws_belongs_to_category_id).hide();

            // <div id="laws_belongs_to_category_{{$law_category->id}}">以下にあるinputタグのチェックボックスを全て外す。
            // 全ての法律のチェックボックスをname="law_ids[]"をcategory_id_1_law_ids[]とするとrequestで取得した後、うまく扱えないので、law_idsと共通にした。
            // また、law_ids[]だけだと、全てのチェックを外してしまうので、「laws_belongs_to_category_{{$law_category->id}}以下にある、inputタグ」という記載方法にした。
            $(laws_belongs_to_category_id + ' input').prop('checked', false);
        }
    });
});
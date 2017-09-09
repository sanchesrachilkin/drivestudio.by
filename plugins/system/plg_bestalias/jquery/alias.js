(function($) {
    $(function() {
        $('#jform_title').blur(function(){
            // Ключ API Яндекса
            var key = 'trnsl.1.1.20141111T115046Z.a6a856e921dec82a.cd5a35b3454ffb55393cc293a692422a51b1c3e9';
            var text = $('#jform_title').val();
            var lang = 'ru-en';
            var format = 'plain';
            jQuery.ajax({
                url: 'https://translate.yandex.net/api/v1.5/tr.json/translate',
                type: 'post',
                dataType: 'json',
                data: {key:key, text:text, lang:lang, format:format},
                success: function (data) {
                    $.each(data, function(i, text) {    // обрабатываем полученные данные
                        $('#jform_alias').val(text);
                    });
                },
                error:function(){
                    alert('Произошла ошибка при переводе. Проверьте ключ API');
                }
            });
        });
    })
})(jQuery)
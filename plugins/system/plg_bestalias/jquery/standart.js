(function(agjoker) { 
  agjoker(function() {      
    agjoker("form[name=adminForm]").ready(function () {
        if (agjoker(this).find('input[name="jform[title]"]').length) {
            admin = agjoker(this).find('input[name="jform[title]"]');
            agjoker(admin).blur(function () {
                ag_val = agjoker(this).val();
                result = get_trans(ag_val);
                inser_trans(result)
            });
        } else if (agjoker(this).find(':input[name="jform[alias]"]').length) {
            admin = agjoker(this).find('input[name="jform[alias]"]');
            agjoker(admin).blur(function () {
                ag_val = agjoker(this).val();
                result = get_trans(ag_val);
                inser_trans(result)
            });
        }
    });
    
    function get_trans() {
        en_to_ru = {
            'а': 'a',
            'б': 'b',
            'в': 'v',
            'г': 'g',
            'д': 'd',
            'е': 'e',
            'ё': 'jo',
            'ж': 'zh',
            'з': 'z',
            'и': 'i',
            'й': 'j',
            'к': 'k',
            'л': 'l',
            'м': 'm',
            'н': 'n',
            'о': 'o',
            'п': 'p',
            'р': 'r',
            'с': 's',
            'т': 't',
            'у': 'u',
            'ф': 'f',
            'х': 'h',
            'ц': 'c',
            'ч': 'ch',
            'ш': 'sh',
            'щ': 'sch',
            'ъ': '#',
            'ы': 'y',
            'ь': '',
            'э': 'je',
            'ю': 'ju',
            'я': 'ja',
            ' ': '-',
            'і': 'i',
            'ї': 'i'
        };
        ag_val = ag_val.toLowerCase();
        ag_val = trim(ag_val);
        ag_val = ag_val.split("");
        trans = new String();
        for (i = 0; i < ag_val.length; i++) {
            for (key in en_to_ru) {
                val = en_to_ru[key];
                if (key == ag_val[i]) {
                    trans += val;
                    break
                } else if (key == "ї") {
                    trans += ag_val[i]
                }
            }
        }
        return trans;
    }
    
    function inser_trans(result) {
        pole = agjoker('input[name="jform[alias]"]');
        allvalue = pole.val();
        if (! (allvalue.length)) {
            agjoker(pole).val(result);
        }
    }
    
    function trim(string) {
        string = string.replace(/'|"|<|>|\!|\||@|#|$|%|^|&|\*|\(\)|-|\|\/|;|\+|№|,|\?|_|:|{|}|\[|\]/g, "");
        string = string.replace(/(^\s+)|(\s+$)/g, "");
        return string;
    }
      });
})(Ageent);
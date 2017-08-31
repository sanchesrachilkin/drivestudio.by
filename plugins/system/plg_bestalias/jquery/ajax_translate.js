google.load("language", "1");
agjoker(document).ready(function () {
    agjoker("form[name=adminForm]").ready(function () {
        if (agjoker(this).find('input[name="jform[title]"]').length) {
            admin = agjoker(this).find('input[name="jform[title]"]');
            agjoker(admin).blur(function () {
                ag_val = agjoker(this).val();
                ag_val = trim(ag_val);
                ag_val = agent_ajax(ag_val);
            });
        } else if (agjoker(this).find(':input[name="jform[alias]"]').length) {
            admin = agjoker(this).find('input[name="jform[alias]"]');
            agjoker(admin).blur(function () {
                ag_val = agjoker(this).val();
                ag_val = trim(ag_val);
                ag_val = agent_ajax(ag_val);
            });
        }
    });
    

    
    function inser_trans(result) {
        pole = agjoker('input[name="jform[alias]"]');
        allvalue = pole.val();
        if (! (allvalue.length)) {
            agjoker(pole).val(result);
        }
    }
    
    function trim(string) {
        string = string.replace(/'|"|<|>|\!|\||@|#|$|%|^|&|\*|\(\)|-|\|\/|;|\+|№|,|\?|_|:|{|}|\[|\]|(\)|(\())/g, "");
        string = string.replace(/(^\s+)|(\s+$)/g, "");
        return string;
    }
    
      function agent_ajax(text) {
        pole = agjoker('input[name="jform[alias]"]');
        allvalue = pole.val();
        if (allvalue.length) {
            return false;
        }
          google.language.detect(text, function(result) {
            if (!result.error && result.language) {
              
              google.language.translate(text, result.language, "en",
              function(result) {
                if (result.translation) {
                    inser_trans(result.translation.toLowerCase())
                }
              });
            }
          });
      }
});
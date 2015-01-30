$(document).ready(function() {
    //Merci OC pour le code ^^:
    var $container = $('div#pm_characterbundle_characterused_edit_classDnDInstances'); //-> Changer div en table pour mettre en place le theme
                     $('div#pm_characterbundle_characterused_edit_classDnDInstances').prev().hide();
    
    //Procédure : compter le nombre de classe qu'il y a déjà
    // faire une boucle là dessus
    // Modifier pour chaque classe l'affichage
    
    var index = $container.find(':input').length;
    if (index == 0) {
        addBab($container);
    } else {
        $container.children('div').each(function() {
            addDeleteLink($(this));
        });
    }

    function addBab($container) {
        var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Classe n°' + (index+1))
            .replace(/__name__/g, index));
        $container.append($prototype);
        
        var $new_container = '',
            $div_classdndinstances_X = $('div#pm_characterbundle_characterused_edit_classDnDInstances_' + index),
            $select_class = $('select#pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_classDnD').html(),
        
        $new_container = '\n\
            <div class="col-md-3 control-label">\n\
                <label class="control-label required" for="pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_classDnD">Classe :</label>\n\
            </div>\n\
            <div class="col-md-9">\n\
                <div class="row">\n\
                    <div class="col-md-5">\n\
                        <select id="pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_classDnD" class="required form-control" name="pm_characterbundle_characterused_edit[classDnDInstances][' + index + '][classDnD]">\n\
                        ' + $select_class + '\n\
                        </select>\n\
                    </div>\n\
                    <div class="col-md-3 control-label">\n\
                        <label class="control-label required" for="pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_level">Niveau :</label>\n\
                    </div>\n\
                    <div class="col-md-4">\n\
                        <input id="pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_level" type="number" required="required" class="form-control" name="pm_characterbundle_characterused_edit[classDnDInstances][' + index + '][level]"></input>\n\
                    </div>\n\
                </div>\n\
            </div>';
        
        $div_classdndinstances_X.html($new_container);
        $('div#pm_characterbundle_characterused_edit_classDnDInstances_' + index).prev().hide();
        
        index++;
    }   
});
$(document).ready(function() {
    var index = $('div[id^="pm_characterbundle_characterused_edit_classDnDInstances_"]').prev().text(),
        select_class = $('select#pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_classDnD').html(),
        input_level_value = $('input#pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_level').val();

    $('div#pm_characterbundle_characterused_edit_classDnDInstances').prev().hide();
    $('div[id^="pm_characterbundle_characterused_edit_classDnDInstances_"]').prev().hide();
    $('div[id^="pm_characterbundle_characterused_edit_classDnDInstances_"]').html('\n\
            <div class="col-md-3 control-label">\n\
                <label class="control-label required" for="pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_classDnD">Classe :</label>\n\
            </div>\n\
            <div class="col-md-9">\n\
                <div class="row">\n\
                    <div class="col-md-5">\n\
                        <select id="pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_classDnD" class="required form-control" name="pm_characterbundle_characterused_edit[classDnDInstances][' + index + '][classDnD]">\n\
                        ' + select_class + '\n\
                        </select>\n\
                    </div>\n\
                    <div class="col-md-3 control-label">\n\
                        <label class="control-label required" for="pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_level">Niveau :</label>\n\
                    </div>\n\
                    <div class="col-md-4">\n\
                        <input id="pm_characterbundle_characterused_edit_classDnDInstances_' + index + '_level" type="number" required="required" class="form-control" name="pm_characterbundle_characterused_edit[classDnDInstances][' + index + '][level]" value="' + input_level_value + '"></input>\n\
                    </div>\n\
                </div>\n\
            </div>');
    
    
});
$('#UserTab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})

//--------------------------------------------------------------------------
// -- Caches des champs user/ajouter.html.twig :
//--------------------------------------------------------------------------
$(document).on('change','#fos_user_registration_form_isEleve', function(){
    if($('input[name=fos_user_registration_form[isEleve]]:checked').val() === '1') 
    {
        $('#assoproject_userbundle_usercreatetype_isEleve_extendDiv').show('1500');
    }
    else if($('input[name=fos_user_registration_form[isEleve]]:checked').val() === '0')
    {
        $('#assoproject_userbundle_usercreatetype_isEleve_extendDiv').hide('1500');
    }
});

$(document).on('change','#fos_user_registration_form_isJoining', function(){
    if($('input[name=fos_user_registration_form[isJoining]]:checked').val() === '1') 
    {
        $('#assoproject_userbundle_usercreatetype_isJoining_extendDiv').show('1500');
    }
    else if($('input[name=fos_user_registration_form[isJoining]]:checked').val() === '0')
    {
        $('#assoproject_userbundle_usercreatetype_isJoining_extendDiv').hide('1500');
    }
});

$.ajax({ //Get New Password
    type: "POST",
    url: Routing.generate('asso_project_user_ajax_password'),
    success: function(data){
        $('#fos_user_registration_form_plainPassword_first').attr('value', data.password);
        $('#fos_user_registration_form_plainPassword_second').attr('value', data.password);
    },
    error: function(data) {alert(data.responseText);},
    dataType: 'json'
});    
//--------------------------------------------------------------------------

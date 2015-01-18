$('#UserTab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})

//--------------------------------------------------------------------------
// -- Caches des champs user/ajouter.html.twig :
//--------------------------------------------------------------------------

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

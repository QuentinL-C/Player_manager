$('#UserTab a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})

//--------------------------------------------------------------------------
// -- Caches des champs user/edit.html.twig :
//--------------------------------------------------------------------------
$(document).on('change','#fos_user_profile_form_isEleve', function(){
    if($('input[name=fos_user_profile_form[isEleve]]:checked').val() === '1') 
    {
        $('#assoproject_userbundle_usercreatetype_isEleve_extendDiv').show('1500');
    }
    else if($('input[name=fos_user_profile_form[isEleve]]:checked').val() === '0')
    {
        $('#assoproject_userbundle_usercreatetype_isEleve_extendDiv').hide('1500');
    }
});

$(document).on('change','#fos_user_profile_form_isJoining', function(){
    if($('input[name=fos_user_profile_form[isJoining]]:checked').val() === '1') 
    {
        $('#assoproject_userbundle_usercreatetype_isJoining_extendDiv').show('1500');
    }
    else if($('input[name=fos_user_profile_form[isJoining]]:checked').val() === '0')
    {
        $('#assoproject_userbundle_usercreatetype_isJoining_extendDiv').hide('1500');
    }
});
//--------------------------------------------------------------------------

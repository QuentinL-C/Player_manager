/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {
    $('[data-toggle="popover"]').popover();
    
    $('.main-hide-div').hide();
    
    $('#UserTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    
    $(document).on('click','[class*="main-JS-delete"]', function(){
        if(!confirm('Etes-vous sûr de vouloir supprimer cet élément ?')) return false;
    });
});



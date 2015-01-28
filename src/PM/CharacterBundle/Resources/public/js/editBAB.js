$(document).ready(function() {
    //Merci OC pour le code ^^:
    var $container = $('div#form_babs'); //-> Changer div en table pour mettre en place le theme
    var $addLink = $('<a href="#" id="add_babs" class="btn btn-default">Ajouter un BAB</a>');

    $container.append($addLink);
    
    $addLink.click(function(e) {
        addBab($container);
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
    });

    var index = $container.find(':input').length;
    if (index == 0) {
        addBab($container);
    } else {
        $container.children('div').each(function() {
            addDeleteLink($(this));
        });
    }

    function addBab($container) {
        var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'BAB n°' + (index+1))
            .replace(/__name__/g, index));
        addDeleteLink($prototype);
        $container.append($prototype);
        index++;
    }

    function addDeleteLink($prototype) {
        $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');
        $prototype.append($deleteLink);
        $deleteLink.click(function(e) {
            $prototype.remove();
            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
        });
    }
});
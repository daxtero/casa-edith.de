$(document).ready(function() {
    $("a.grouped_elements").fancybox({
        'transitionIn'		: 'elastic',
        'transitionOut'		: 'elastic',
        'titlePosition' 	: 'over',
        'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Bild: ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; &nbsp; ' + title : '') + '</span>';
        }
    });
});
var gallery = {

    galleryLoad: function() {
        $(".fancybox-effects-c").fancybox({
             beforeShow: function () {
                $.fancybox.wrap.bind("contextmenu", function (e) {
                        return false; 
                });
            },
            openEffect  : 'fade',
            closeEffect : 'fade',
            helpers : {
                title: {
                    type: 'outside',
                    position: 'bottom'
                },
                overlay : {
                    css : {
                        'background' : 'rgba(0, 0, 0, 0.85)'
                    }
                }
            },
            nextEffect: 'fade',
            prevEffect: 'fade',
            padding: 0
        });
    }
}
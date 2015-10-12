var app = {

    init: function() {
        app.events();
    },

    events: function() {

        $('.backButton').on('click', function(e) {
            e.preventDefault();
            history.back();
        })

    }
}
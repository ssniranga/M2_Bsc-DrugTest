require([
"jquery"
], function($){
    $(document).ready(function() {

        $('#drugtest-data-table').footable({
            "paging": {
                "enabled": true
            },
            "filtering": {
                "enabled": true
            },
            "sorting": {
                "enabled": true
            }
        });
    });
});
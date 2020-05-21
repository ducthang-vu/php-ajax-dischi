import $ from 'jquery'
const Handlebars = require("handlebars")


function printCards(template, container, arr_object) {
    arr_object.forEach(object => container.append(template(object)))
}		

function callAjax(template, query) {
    $.ajax({
        method: "GET",
        url: "http://localhost:80/php-ajax-dischi/partials/script/json-script.php",
        success: response => {
            let matched_data = response
            if (query) {
                matched_data = response.filter(
                    x => x.author.toLowerCase().includes(query)
                )
            }
            printCards(template, $('#cards-container'), matched_data)
        },
        error: error => console.log(error)
    });
}

function startSearch(template, query='') {
    $('#cards-container').empty()
    callAjax(template, query)
}


$(document).ready(function () {
    // init handlebars
    var source = $('#card-template').html()
    var template = Handlebars.compile(source)

    // print all items
    //callAjax(template)
    startSearch(template) 

    $(document).keyup(function(e) { 
        if (e.which == 13 || e.keyCode == 13) {
            startSearch(template, $('#input').val().trim().toLowerCase())
        }
    });

    $('#btn-logo').click(() => startSearch(template))
});

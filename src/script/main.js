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
            if (!$('#cards-container').html()) {
                $('#failure-mess').addClass('active')
                $('#input').focus().select()
            }
            $('#input').focus()
        },
        error: error => console.log(error)
    });
}

function startSearch(template, query='') {
    $('#failure-mess').removeClass('active')
    $('#cards-container').empty()
    callAjax(template, query)
}


$(document).ready(function () {
    // init handlebars
    var source = $('#card-template').html()
    var template = Handlebars.compile(source)

    $('#input').focus()

    // print all items
    startSearch(template)
    $('#btn-logo').click(() => {
        $('#input').val('').blur()
        startSearch(template)
    }) 

    // print items matching user query
    $(document).keyup(function(e) { 
        if (e.which == 13 || e.keyCode == 13) {
            let query = $('#input').val().trim().toLowerCase()
            if (query) startSearch(template, query)
        }
    });
});

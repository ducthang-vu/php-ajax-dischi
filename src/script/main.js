import $ from 'jquery'
const Handlebars = require("handlebars")

/*
console.log('main.js is working')
console.log($)
console.log(Handlebars)
*/

$(document).ready(function () {
    // init handlebars
    var source = $('#card-template').html()
    var template = Handlebars.compile(source)

    // print all items
    $.ajax({
        method: "GET",
        url: "http://localhost:80/php-ajax-dischi/partials/script/json-script.php",
        success: function (response) {
            console.log(response)
        }
    });
});

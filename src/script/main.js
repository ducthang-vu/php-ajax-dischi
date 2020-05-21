import $ from 'jquery'
const Handlebars = require("handlebars")

/*
console.log('main.js is working')
console.log($)
console.log(Handlebars)
*/


function printCards(template, container, arr_object) {
    arr_object.forEach(object => {
        var context = {
			poster: object.poster,
			title: object.title,
			author: object.author,
			year: object.year
		}
		
		container.append(template(context));
    })
}		


$(document).ready(function () {
    // init handlebars
    var source = $('#card-template').html()
    var template = Handlebars.compile(source)

    // print all items
    $.ajax({
        method: "GET",
        url: "http://localhost:80/php-ajax-dischi/partials/script/json-script.php",
        success: response => {
            printCards(template, $('#cards-container'), response)
        },
        error: error => console.log(error)
    });
});

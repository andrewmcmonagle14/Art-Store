// Define arrays
var genres = ["Abstract", "Baroque", "Gothic", "Renaissance"];
var subjects = ["Animals", "Landscape", "People"];
var years = [];

for (var i = 2010; i <= 2030; i++) {
	years.push(i);
}

// Function to create options
function createOptions(array) {
	var options = "";
	for (var i = 0; i < array.length; i++) {
		options += "<option value='" + array[i] + "'>" + array[i] + "</option>";
	}
	return options;
}

// Populate select boxes with options
var genreSelect = document.getElementById("genre");
genreSelect.innerHTML = createOptions(genres);

var yearSelect = document.getElementById("year");
yearSelect.innerHTML = createOptions(years);

var subjectSelect = document.getElementById("subject");
subjectSelect.innerHTML = createOptions(subjects);

$(document).ready(function(){
    $('.checkoption').click(function() {
       $('.checkoption').not(this).prop('checked', false);
    });
    });
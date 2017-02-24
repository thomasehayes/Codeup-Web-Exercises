"use strict";

$(document).ready(function(){
$("body").keydown(function(key){
	if(key.keyCode == [38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 13]){
		alert("you have added 30 lives!")
	}
});

});
"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.
// var response = "";	
// while (response == "" || response == null) {
// 	response = prompt("what is your name?");
// 	if (response == "" || response == null){
// 		alert("Tell me your name");
// 	}
// }

//Pre-work answer
var response = "";

while (response == "") {
	response = prompt("Hi, what is your name?")

 } 

// //Ryan's Answer
// var name;
// do {
// 	name = prompt("Wat do they call you?");
// 	name = name.trim();
// } while(name == "" || name == "null");

// alert("Hi " + name);



// TODO: Show an alert message that welcomes the user based on their input.
alert("Hello " + response + "!");
// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.
var pizza = confirm("Do you like pizza?");
	if (pizza  == true){
		alert("lets get pizza");
	} else {
		alert("we can't be friends");

	}



// recursion - another approach to this. 
function getName() {
	//prompt user their name
	var name = prompt("Please input your name");
	
	//if their response is empty
	if (name == "") {
	//call getName again
	return getName();
	} else {
		return name;
	}
}

//calling code
var name = getName();

alert ("Yo " + name + "!");
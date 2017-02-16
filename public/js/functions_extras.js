"use strict";

//Question 1

function log(input) {
	console.log(input);
}

var result = log("Bob");
	console.log(result);


//Question 2
function identity (input) {
	console.log(input);
	return input;
}
var result = identity("Tough!")
	console.log(result);



//Question 3
// function getRandomIntBetween(min, max) {

function getRandomIntBetween(min, max) {
	return Math.floor(Math.random() * (max -  min)) + min;
}
var random = getRandomIntBetween(1,100);
	console.log(random);



//Question 4
// how to check if a value is numeric in javascript --> how to google search up

function isNumeric(input) {
	if (!isNaN(input)) {
		return true;
	} else {
		return false;
	}
}
//  return !isNaN(input);
// }
result = isNumeric("pineapple");
console.log("It is " + result + " that \"pineapple\" is numeric");
console.log("It is " + isNumeric(3.141) + " that 3.1414 is numeric");

//Question 5
var a = 5;
var b = 3;

function add(a, b) {
	if(isNumeric(a) && isNumeric(b)) {
		return a + b;
	}
}

function subtract(a, b) {
	if(isNumeric(a) && isNumeric(b)) {
		return a - b;
	}
}

function  multiply(a, b) {
	if(isNumeric(a) && isNumeric(b)) {
		return a * b;
	}
}

function divide(a, b) {
	if(isNumeric(a) && isNumeric(b)) {
		return a / b;
	}
}


//my solution:
// var add = (a + b);
// var subtract = (a - b);
// var multiply = (a * b);
// var divide = (a / b);




function square(num) {
	return multiply(num, num);
}



function sumOfSquares(a, b) {
	// all do the same thing. 
	// return a*a + b*b;
	return square(a) +square(b);
	// return sum(square(a), square(b));
	// return sum(multiply(a, a), multiply(b,b));
}

console.log(sumOfSquares(2,3));


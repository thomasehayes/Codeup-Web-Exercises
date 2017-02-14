"use strict";

// Question 1
var highGrades = ((70+80+95)/3);

if (highGrades > 80) {
	console.log("You're awesome!");
}	else {
	console.log("You need to practice more.");
}

var grade1 = 70,
	grade2 = 80,
	grade3 = 95,
	numberOfGrades = 3,
	gradeAverage = (grade1 + grade2 + grade3) / numberOfGrades;

	if (gradeAverage >80) {
		console.log("You're awesome!");
}	else {
	console.log("You need to practice more.");
	}

// Question 2
var customer = null,
	cost = null,
	totalCost = null,
	discount = .35,
	discountMessage = ""

if (cost > 200) {
	totalCost = cost - cost * discount;
	discountMessage = "Discount was applied.";
}


// Question 3

var flipACoin = Math.floor(Math.random()*2);

if (flipACoin === 0) {
	console.log("Buy a car");
} else {
	console.log("Buy a house");
} 

var flipACoin = (Math.floor(Math.random()*2) === 0) ? "Buy a car" : "Buy a house";
	console.log(flipACoin);
"use strict";

//question 2
// var i = 2

// while (i <=65536) {
// 	console.log(i);
// 	i = i * 2;
// }

//question 1
 // This is how you get a random number between 50 and 100
var allCones /*coneInventory */ = Math.floor(Math.random() * 50) + 50;
 // This is how you get a random number between 1 and 5
var cones = Math.floor(Math.random() * 5) + 1;

do {
	var conesToSell = Math.floor(Math.random() *5) +1;
	// if we have that many left, subtract it frmo our inventory
	if (conesToSell <= allCones/* we have enough left */) {
		//subtract from inventory
		console.log("sold " + conesToSell + " cones...")
		allCones = (allCones - conesToSell);
	} else {
		console.log("I don't have enough!")
	}
} while (allCones > 0/* we have cones left to sell*/)

	console.log("sold all the cones!");



//If you are finished...
//write some code such that a random *even* number will be console.logged
//everytime the page is refreshed

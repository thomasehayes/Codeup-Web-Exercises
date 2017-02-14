"use strict";
//Question 1
var luckyNumber = Math.floor(Math.random()* 6);
var receipt = 60;
var d0 = receipt,
 	d1 = receipt*.1,
 	d2 = receipt*.25,
 	d3 = receipt*.35,
 	d4 = receipt*.5,
 	d5 = receipt-receipt;
switch (luckyNumber) {
	case 0:
		console.log("Total $"+d0 + " You got No Discount");
		break;
	case 1:
		console.log("Total $"+d1 + " You got a 10% Discount");
		break;
	case 2:
		console.log("Total $"+d2 + " You got a 25% Discount");
		break;
	case 3:
		console.log("Total $"+d3 + " You got a 35% Discount");
		break;
	case 4:
		console.log("Total $"+d4 + " You got a 50% Discount");
		break;
	case 5:
		console.log("Total $"+d5 + " You got it for Free");
		break;
	default:
		console.log("Ask for a Discount");
}

//or 

//finalPrice = (1-discountPercentage) * priceBeforeDiscount;


//Question 2

var month = Math.floor(Math.random()* 13);

switch (month) {
	case 1:
		console.log("January");
		break;
	case 2:
		console.log("February");
		break;
	case 3:
		console.log("March");
		break;
	case 4:
		console.log("April");
		break;
	case 5:
		console.log("May");
		break;
	case 6:
		console.log("June");
		break;
	case 7:
		console.log("July");
		break;
	case 8:
		console.log("August");
		break;
	case 9:
		console.log("September");
		break;
	case 10:
		console.log("October");
		break;
	case 11:
		console.log("November");
		break;
	case 12:
		console.log("December");
		break;
	default:
		console.log("That isn't a month");
}
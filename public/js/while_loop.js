"use strict";

//question 2
// var i = 2

// while (i <=65536) {
// 	console.log(i);
// 	i = i * 2;
// }

//question 1
 // This is how you get a random number between 50 and 100
var allCones = Math.floor(Math.random() * 50) + 50;
 // This is how you get a random number between 1 and 5
var cones = Math.floor(Math.random() * 5) + 1;
var i = 5;
var calculatedCones = allCones-cones;


 do {
 	console.log(cones + " sold"); 
 	i++;

 } while (i <= 5);
console.log(allCones);
console.log(calculatedCones);
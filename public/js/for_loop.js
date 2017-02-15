"use strict";

//question 1
for (var i = 1; i < 10; i++) { 
	console.log((i + "").repeat(i));
}

	console.log("0000000000");


//question 2


var multiply = Math.floor(Math.random() * 10) + 1;

for (var i = 1; i <=10; i++) {
	console.log(multiply + "x" + i + "=" + multiply*i);
}




//question 3

var oddEven;


for (var i = 1; i<=10; i++) {
	oddEven = Math.floor(Math.random() * 181) + 20;
	if (oddEven % 2 === 1){
		console.log(oddEven + " is odd");
	} else {
		console.log(oddEven + " is even");
	}
}

//question 4
for (var i=100; i>0; i -=5){
	console.log(i);
}
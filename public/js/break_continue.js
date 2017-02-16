"use strict";


var random;
do {
	random = Math.floor((Math.random()*50)+1);
}while (random % 2 == 0);

console.log("Random odd number to skip is: " + random);

for (var i =1; i <=50; i+=2) {
	if (i === random) {
		console.log("Yikes! Skipping this number: " + i);
		continue;
	} else {
		console.log ("Here is an odd number " + i);
	}
}


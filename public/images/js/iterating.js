
    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
	var names = ["Alissa", "Thomas", "Anthony", "Taylor"];

    // TODO: Create a log statement that will log the number of elements in the names array.

	console.log("There are " + names.length + " names in the names arrary");

    // TODO: Create log statements that will print each of the names array elements individually.
	// console.log("My crush's name is " + names[0]);
	// console.log("My name is " + names[1]);
	// console.log("My brother's name is " + names[2]);
	// console.log("His wife's name is " + names[3]);
	

	console.log("For loop:");

	for (var i = 0; i < names.length; i++) {
		console.log("Names at index: " + i + " is " + names[i]);
	}

	console.log("ForEach loop:");

		names.forEach(function (element, index, array) {
			console.log("Names at index: " + i + " is " + element);
		});
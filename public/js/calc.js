
	'use strict';

	var leftDisplay = document.getElementById("leftDisplay");
	var middleDisplay = document.getElementById("operatorDisplay");
	var rightDisplay = document.getElementById("rightDisplay");
	var operator = document.getElementsByClassName("operator");
	var final = document.getElementsByClassName("final");
	var answer = document.getElementsByClassName("answer");
	var display = document.getElementsByClassName("forms")[0];
	var numbers = document.getElementsByClassName("number");

	leftDisplay.value = "";
	operatorDisplay.value  = "";
	rightDisplay.value = "";

		function displayNumber() {
			// append the display's inner text with the innerText of the button clicked
			console.log(middleDisplay);
			console.log(middleDisplay.innerText);
			console.log(middleDisplay.innerHTML);
			console.log(middleDisplay);
			if (middleDisplay.value == "")
			{
				leftDisplay.value += this.innerText;
			}
			else if(leftDisplay.value !== "")
			{
				if(operator[0].value == "+")
				{
					middleDisplay.value  = "+";
				}
				else if(this.value == "-")
				{
					middleDisplay.value = "-";
				}
				else if(this.value == "x")
				{
					middleDisplay.value = "x";
				}
				else if(this.value == "/")
				{
					middleDisplay.value = "/";
				}
			}
		}
		

		for(var i = 0; i < numbers.length; i++) {
			numbers[i].addEventListener("click", displayNumber);

		}

		document.getElementById("clear").addEventListener("click", function() {
			leftDisplay.innerText = "";
			operatorDisplay.innerText = "";
			rightDisplay.innerText = "";
		});

		document.getElementById("equals").addEventListener("click", function() {
			// check the operatorDisplay
			// if operatorDisplay is "+"
			// do math on leftDisplay + rightDisplay 
			// update left display with the result
			// clear out right display and operator display
		});
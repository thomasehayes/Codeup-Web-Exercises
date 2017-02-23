
	'use strict';

	var leftDisplay = document.getElementById("leftDisplay");
	var middleDisplay = document.getElementById("operatorDisplay");
	var rightDisplay = document.getElementById("rightDisplay");
	var operator = document.getElementsByClassName("operator");
	var numbers = document.getElementsByClassName("number");

	leftDisplay.value = "";
	operatorDisplay.value  = "";
	rightDisplay.value = "";

		function displayNumber() {
			// append the display's inner text with the innerText of the button clicked

			if (middleDisplay.value == "")
			{
				leftDisplay.value += this.innerText;
			}

			if(middleDisplay.value !== "")
				{
					rightDisplay.value  += this.innerText;
				}
		}
		
		function displayOperator() {
			middleDisplay.value = this.innerText;
		}

		for(var i = 0; i < numbers.length; i++) {
			numbers[i].addEventListener("click", displayNumber);

		}

		for (var i = 0; i <operator.length; i++) {
			operator[i].addEventListener("click", displayOperator);
		}

		document.getElementById("clear").addEventListener("click", function() {
			leftDisplay.value = "";
			operatorDisplay.value = "";
			rightDisplay.value = "";
		});

		document.getElementById("equals").addEventListener("click", function() {
			var result;
			if(middleDisplay.value !="") {
			switch (middleDisplay.value){
				case "+": 
					result =parseFloat(leftDisplay.value) + parseFloat(rightDisplay.value);
					break;
					case "-": 
					result =parseFloat(leftDisplay.value) - parseFloat(rightDisplay.value);
					break;

					case "*": 
					result =parseFloat(leftDisplay.value) * parseFloat(rightDisplay.value);
					break;

					case "/": 
					result =parseFloat(leftDisplay.value) / parseFloat(rightDisplay.value);
					break;
			}
			operatorDisplay.value = "";
			rightDisplay.value = "";			
			leftDisplay.value = result;
		} 
		});





	'use strict';

	var left = document.getElementById("left");
	var middle = document.getElementById("middle");
	var right = document.getElementById("right");
	var answer = document.getElementById("answer");
	var number = document.getElementsByClassName("number");
	var operator = document.getElementsByClassName("operator");
	var final = document.getElementsByClassName("final");
	
	left.value = "";
	middle.value = "";
	right.value = "";

	function clickNumber() {
		var dataValue = this.getAttribute("value");
		if (answer.value != "") {
			left.value = "";
			answer.value = "";
			middle.value = "";
			right.value = "";
		}

	}

	function clickOperator() {
		var dataValue = this.getAttribute("value");
		middle.value = "";
		middle.value = middle.value + dataValue;
		if (answer.value != "") {
			left.value = answer.value;
			answer.value = "";
			right.value = "";
		}
		else if (left.value == "") {
			left.value = 0;
		}
	}

	function clickFinal() {
		var dataValue = this.getAttribute("value");
		if (dataValue == "C") {
			left.value = "";
			middle.value = "";
			right.value = "";
			answer.value = "";
		} else if (dataValue == "=") {
			var leftValue = Number(left.value);
			var rightValue = Number(right.value);
			var AnswerValue = Number(answer.value);
			answer.removeAttribute("hidden");
			if (right.value == "" && middle.value != "") {
				right.value = 0;
			} else if (right.value == "" && middle.value == "") {
				answer.value = left.value
			} else if (right.value == "") {
				right.value = 0;
			}

			if (middle.value == "+") {
				answer.value = (leftValue + rightValue);
			} else if (middle.value == "-") {
				answer.value = (leftValue - rightValue);
			} else if (middle.value == "*") {
				answer.value = (leftValue * rightValue);
			} else if (middle.value == "/") {
				if (right.value == "0") {
					alert("Cannot divide by 0.  Please enter a new value in the second field of the operation.");
					right.value = "";
				} else {
					answer.value = (leftValue / rightValue);
				}
			}
		}
	}


	for (var i = 0; i < number.length; i++) {
		number[i].addEventListener('click', clickNumber, false);
	}

	for (var i = 0; i < operator.length; i++) {
		operator[i].addEventListener('click', clickOperator, false);
	}

	for (var i = 0; i < final.length; i++) {
		final[i].addEventListener('click', clickFinal, false);
	}

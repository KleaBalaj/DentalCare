function check(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
    var question3 = document.quiz.question3.value;
    var question4 = document.quiz.question4.value;
    var question5 = document.quiz.question5.value;
    var question6 = document.quiz.question6.value;
    var question7 = document.quiz.question7.value;
    var question8 = document.quiz.question8.value;
    var question9 = document.quiz.question9.value;
    var question10 = document.quiz.question10.value;
	var correct = 0;


	if (question1 == "a") {
		correct++;
    }
	if (question2 == "a") {
		correct++;
    }	
	if (question3 == "d") {
		correct++;
    }
    if (question4 == "a") {
		correct++;
    }
    if (question5 == "c") {
		correct++;
    }
    if (question6 == "a") {
		correct++;
    }
    if (question7 == "e") {
		correct++;
    }
    if (question8 == "f") {
		correct++;
    }
    if (question9 == "b") {
		correct++;
    }
    if (question10 == "b") {
		correct++;
	}
	
	
	var messages = ["Shume mire!", "Mjaftueshem", "Informohu me shume"];
	var score;

	if (correct >= 0 && correct <= 3) {
		score = 2;
	}

	if (correct > 3 && correct <=7) {
		score = 1;
	}

	if (correct > 7 && correct <= 10) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";

	document.getElementById("message").innerHTML = messages[score];
	document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
	//document.getElementById("picture").src = pictures[score];
	
	}


	function checkk(){

		var question1 = document.quizi.question1.value;
		var question2 = document.quizi.question2.value;
		var question3 = document.quizi.question3.value;
		var question4 = document.quizi.question4.value;
		var question5 = document.quizi.question5.value;
		var question6 = document.quizi.question6.value;
		var question7 = document.quizi.question7.value;
		var question8 = document.quizi.question8.value;
		var question9 = document.quizi.question9.value;
		var question10 = document.quizi.question10.value;
		var question11 = document.quizi.question11.value;
		var question12 = document.quizi.question12.value;
		var question13 = document.quizi.question13.value;
		var question14 = document.quizi.question14.value;
		var question15 = document.quizi.question15.value;
		var question16 = document.quizi.question16.value;
		var correct = 0;
	
		if (question1 == "c") {
			correct++;
		}
		if (question2 == "c") {
			correct++;
		}	
		if (question3 == "a") {
			correct++;
		}
		if (question4 == "a") {
			correct++;
		}
		if (question5 == "c") {
			correct++;
		}
		if (question6 == "a") {
			correct++;
		}
		if (question7 == "a") {
			correct++;
		}
		if (question8 == "b") {
			correct++;
		}
		if (question9 == "c") {
			correct++;
		}
		if (question10 == "b") {
			correct++;
		}
		if (question11 == "b") {
			correct++;
		}
		if (question12 == "b") {
			correct++;
		}
		if (question13 == "b") {
			correct++;
		}
		if (question14 == "b") {
			correct++;
		}
		if (question15 == "a") {
			correct++;
		}
		if (question16 == "d") {
			correct++;
		}
		var messages = ["Shume i rrezikuar", "Pjeserisht i rrezikuar", "Aspak i rrezikuar"];
		var score;

		if (correct >= 0 && correct <= 6) {
			score = 2;
		}
		if (correct >6 && correct <=12) {
			score = 1;
		}
		if (correct >12 && correct <= 16) {
			score = 0;
		}
		document.getElementById("after_submit").style.visibility = "visible";
		document.getElementById("message").innerHTML = messages[score];
		document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
		}
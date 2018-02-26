var numSquares = 6;
var colors = [];
var pickedColor;
var squares = document.querySelectorAll(".square");
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.querySelector("message");
var h1 = document.querySelector("h1");
var resetButton = document.querySelector("#reset");
var modeButtons = document.querySelectorAll(".mode");

init();
function init(){
	//mode buttons event listeners
	setupModeButtons();
	
	setupSquares();
	reset();
}

function setupModeButtons(){
		for(var i = 0; i < modeButtons.length;i++){
	modeButtons[i].addEventListener("click", function(){
		modeButtons[0].classList.remove("selected");
		modeButtons[1].classList.remove("selected");
		this.classList.add("selected");

		this.textContent === "Easy" ? numSquares = 3: numSquares = 6;  
		// if(this.textContent ==="Easy"){
		// 	numSquares = 3;
		// }else{
		// 	numSquares = 6;
		// }
		reset();
	});
	}
}

function setupSquares(){
		for (var i = 0; i < squares.length; i++){
	// //add intial colors to squares
	// squares[i].style.backgroundColor = colors[i];
	// //add click listener to square
	squares[i].addEventListener("click", function(){
	// //grab color of clicked square
	var clickedColor = this.style.backgroundColor;
	//compare color to pickedColor
	//console.log(clickedColor, pickedColor)
	if(clickedColor === pickedColor){
		message.textContent = "Correct";
		resetButton.textContent = "Play Again";
		changeColors(clickedColor);
		h1.style.background = clickedColor;
	}else{
		this.style.backgroundColor = "#232323";
		message.textContent = "Try Again";
	}
	
	});
	}
}
function reset(){
	//generate all new colors
	colors = generateRandomColors(numSquares);
	// pick a new random color from array
	pickedColor = pickColor();
	//change colors of squares
	colorDisplay.textContent = pickedColor;
	resetButton.textContent = "New Colors";

	message.textContent = null;

	for(var i = 0; i < squares.length; i ++){
		if(colors[i]){
			squares[i].style.display = "block";
			squares[i].style.background = colors[i];
		}else{
			squares[i].style.display = "none";
		}
		squares[i].style.backgroundColor = colors[i];
	}
	h1.style.background = "#400080";
}
// easyBtn.addEventListener("click", function(){
// 	hardBtn.classList.remove("selected");
// 	easyBtn.classList.add("selected");
// 	numSquares = 3;
// 	colors = generateRandomColors(numSquares);
// 	pickedColor = pickColor();
// 	colorDisplay.textCintent = pickedColor;
// 	for(var i = 0; i < squares.length; i++){
// 		if(colors[i]){
// 			squares[i].style.background = colors[i];
// 		}
// 		else{
// 			squares[i].style.display = "none";
// 		}

// 	}
// });

// hardBtn.addEventListener("click", function(){
// 	easyBtn.classList.remove("selected");
// 	hardBtn.classList.add("selected");
// 	numSquares = 6;
// 	colors = generateRandomColors(numSquares);
// 	pickedColor = pickColor();
// 	colorDisplay.textCintent = pickedColor;
// 	for(var i = 0; i < squares.length; i++){
// 		squares[i].style.background = colors[i];
// 		squares[i].style.display = "block";
// 	}
// });

resetButton.addEventListener("click", function(){

	reset();
})




function changeColors(color){
	//loop through all squares
	for(var i = 0; i < squares.length; i++){
		//change each color to match given color
		squares[i].style.backgroundColor = color;
	}
}

function pickColor(){
	var	random = Math.floor(Math.random()*colors.length);
	return colors[random];
}

function generateRandomColors(num) {
	//make an array
	var arr = [];
	//add num random colors to array
	for(var i = 0; i < num; i++){
			//get random color and push into arr
		arr.push(randomColor())
	
	}
	//return that array
	return arr;
}

function randomColor() {
	//pick a "red" from 0 -255
	var r = Math.floor(Math.random() * 256);
	//pick a "green" from 0 -255
	var g = Math.floor(Math.random() * 256);
	//pick a "blue" from 0 -255
	var b = Math.floor(Math.random() * 256);

	return "rgb(" + r + ", " + g + ", " + b + ")";
}
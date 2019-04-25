

window.onload = (function () {
	

	getBoard(function(board){
		console.log(board);
		var target = document.getElementById("board");
		target.append(drawTable(JSON.parse(board)));

		//localPlay(board);
	});



});


function localPlay(board){
	var flag = false;



}


function playerMove(cell){

	cell.style.border = "10px solid green";

}

function drawTable(board){
	var table = document.createElement("table");
	table.setAttribute('id', "myTable");
	for(n = 0; n < 8; n++){
		var row = document.createElement("tr");
		for(m = 0; m < 8; m++){
			var col = document.createElement("td");
			col.setAttribute('id', "white");
			var oImg = document.createElement("img");
			oImg.setAttribute('src', "../images/" + board[n][m][1]);
			col.appendChild(oImg);
			col.onclick = function(){
				playerMove(this);
			};
			row.append(col);
		}
		table.append(row);
	}

	row.appendChild(col);

	return table;
}



function defaultBoard(callback){

	args = ""

	$.ajax({

		type: 'GET',

  		url: '../pieces/board.php',

  		data: {defaultBoard: args},

	  	success: callback,

	 	error: function() {
	    	console.log("error fetching session")

	  	}

	});
	
}

function getTurn(callback){

	args = ""

	$.ajax({

		type: 'GET',

		url: '../php/local.php',

		data: {getTurn: args},

		success: callback,

		error: function() {
			console.log("error fetching session")

		}

	});

}

function startGame(callback){

	args = ""

	$.ajax({

		type: 'GET',

		url: '../php/local.php',
		data: {start: args},

		success: callback,

		error: function() {
			console.log("error fetching session")

		}

	});

}

function getBoard(callback){

	args = ""

	$.ajax({

		type: 'GET',

		url: '../php/local.php',
		data: {getBoard: args},

		success: callback,

		error: function() {
			console.log("error fetching session")

		}

	});

}


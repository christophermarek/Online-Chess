

window.onload = (function () {
	

	defaultBoard(function(board){
		var target = document.getElementById("board");
		target.append(drawTable(JSON.parse(board)));

	});

});

function drawTable(board){
	var table = document.createElement("table");

	for(n = 0; n < 8; n++){
		var row = document.createElement("tr");
		for(m = 0; m < 8; m++){
			var col = document.createElement("td");
			var oImg = document.createElement("img");
			console.log("../images/" + board[n][m][1]);
			oImg.setAttribute('src', "../images/" + board[n][m][1]);
			col.appendChild(oImg);
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
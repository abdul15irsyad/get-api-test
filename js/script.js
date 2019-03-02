function sendRequest(){
	totalKey=0;
	$('.root').html('');
	let requestMethod = $('#method').val();
	let requestQuery = $('#query').val();
	$.ajax({
		url: requestQuery,
		method: requestMethod,
		dataType: "json",
		success: function(response){
			console.log(response);
			$('.root').jsonViewer(response);
		}
	});
}
$('.btn-send').on('click', function(){
	sendRequest();
});

$('#query').on('keyup',function(e){
	if(e.keyCode === 13){
		sendRequest();
	}
});

//add parameter
let totalKey=0;
$('.btn-add-param').on('click', function(){
	let key = $('.key').val();
	let value = $('.value').val();
	let query = $('#query').val();
	if(totalKey==0){
		query += '?' + key + '=' + value;
		totalKey++;
	}
	else{
		query += '&' + key + '=' + value;
	}
	$('#query').val(query);
	$('.key').val('');
	$('.value').val('');
});
//https://www.googleapis.com/youtube/v3/channels
//key=AIzaSyBmQiyHAmPhJw5BQ1ACOT1VhZ502jGq-tY
//part=snippet,statistics
//id=UCZAZS5qZ-ycexMbIHjSqV9Q

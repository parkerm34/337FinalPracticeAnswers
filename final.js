var bikes = [];

// Creates the dynamic array once the page is populated from the db
function initBike() {
	$(".modal").each(function(){
		if(this.id != "rider")
			bikes.push( this.id );
	});
}

var currentBike = "";

// Dynamic code from php does not like the $(".modal").click code, therefore
// we must use the document and on method from javascript
$(function() {
	$(document).on('click', '.modal', function(){
		currentBike = $(this).attr('id');
		changeImage();
	});
});

function shut() {
	$("#nav").removeClass("front");
	$("#lightbox").css("left", "-2000px");
	$(".modal").css("left", "0px");
}
			
function prev() {
	var count = 0;
	for(count = 0; count < 5; count++)
	{
		if(bikes[count] == currentBike)
		{
			if(count == 0)
			{
				count = 4;
				currentBike = bikes[count];
			}
			else
				currentBike = bikes[count-1];
			changeImage();
			break;
		}
	}
	if(count == 5)
		currentBike = bikes[4];
	changeImage();
}
			
function next() {
	var count = 0;
	for(count = 0; count < 5; count++)
	{
		if(bikes[count] == currentBike)
		{
			if(count == 4)
			{
				count = 0;
				currentBike = bikes[count];
			}
			else
				currentBike = bikes[count+1];
			changeImage();
			break;
		}
	}
	if(count == 5)
		currentBike = bikes[0];
	changeImage();
}
			
function changeImage() {
	$(".modal").css("left", "-2000px");
	$("#lightbox").css("background-image", "url('images/" + currentBike + ".jpg')");
	$("#lightbox").css("left", "0px");
	$("#nav").addClass("front");
}
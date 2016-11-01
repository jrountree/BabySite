
/* ::: WEEKS REMAINING ::: */
var today = new Date();
var dueDate=new Date(today.getFullYear(), 5, 2) ;
var one_day=1000*60*60*24;
var days = (Math.ceil((dueDate.getTime()-today.getTime())/(one_day)));
var weeksRemaining = Math.round(days/7);


if (weeksRemaining < 30 ) {
	document.getElementById('image').src="img/week24.png";

} else if (weeksRemaining < 38){
	document.getElementById('image').src="img/week30.png";

} else {
	document.getElementById('image').src="img/week40.png";

}



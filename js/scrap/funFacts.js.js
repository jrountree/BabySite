/* ::: FUN FACTS ::: */
var week24 = "Right now your baby is on fire. Isn't that grand."



/* ::: WEEKS REMAINING ::: */
var today = new Date();
var dueDate=new Date(today.getFullYear(), 5, 2) ;
var one_day=1000*60*60*24;
var days = (Math.ceil((dueDate.getTime()-today.getTime())/(one_day)));
var weeksRemaining = Math.round(days/7);


if (weeksRemaining < 30 ) {
	document.write(week24);

} else if (weeksRemaining < 38){
	document.write(week30);

} else {
	document.getElementById('image').src="img/week40.png";

}



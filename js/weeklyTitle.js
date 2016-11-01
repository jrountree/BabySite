
/* ::: WEEKS REMAINING ::: */
var today = new Date(); /*gets todays date */
var dueDate=new Date(today.getFullYear(), 5, 2) ; /* June 2nd 2016 */
var one_day=1000*60*60*24;
var days = (Math.ceil((dueDate.getTime()-today.getTime())/(one_day))) - 1;
var weeksRemaining = Math.round(days/7)

var title = ("<h2>Week " + (40 - weeksRemaining)+ "</h2>");

/* TESTERS 

document.write("<br>" + title);
document.write("<br>" + today);
document.write("<br>" + dueDate);
document.write("<br>" + days);
document.write("<br>" + weeksRemaining);
document.write("<br>" + (40 - weeksRemaining));
/*

/*  ORIGINAL
var today = new Date();
var dueDate=new Date(today.getFullYear(), 6, 2) ;
var one_day=1000*60*60*24;
var days = (Math.ceil((dueDate.getTime()-today.getTime())/(one_day)));
var weeksRemaining = Math.round(days/7);

var title = ("<h2>Week " + (weeksRemaining + 2)+ "</h2>");

document.write(title);
*/
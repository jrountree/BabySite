$today = new Date();

var dueDate=new Date(today.getFullYear(), 5, 2) ;

var one_day=1000*60*60*24;
 
var days = (Math.ceil((dueDate.getTime()-today.getTime())/(one_day)));

var weeksRemaining = Math.round(days/7);

document.write(40-weeksRemaining);



if (weeksRemaining < 30 ) {
    /*document.write("you are under 30 weeks");*/

    document.write(img);    

} else if (weeksRemaining < 38){

    document.write("you are under 40 weeks");
} else {

    document.write("happy buttsex you are 40 weeks");
}

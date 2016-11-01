/*var dob= Date(2016, 4, 24); // May 24 2016
var dob = "May, 24, 2016";
var d1 = new Date(dob);
var d2 = new Date();

var age = {

    inDays: function(d1, d2) {
        var t2 = d2.getTime();
        var t1 = d1.getTime();

        return parseInt((t2-t1)/(24*3600*1000));
    },

    inWeeks: function(d1, d2) {
        var t2 = d2.getTime();
        var t1 = d1.getTime();

        return parseInt((t2-t1)/(24*3600*1000*7));
    },

    inMonths: function(d1, d2) {
        var d1Y = d1.getFullYear();
        var d2Y = d2.getFullYear();
        var d1M = d1.getMonth();
        var d2M = d2.getMonth();

        return (d2M+12*d2Y)-(d1M+12*d1Y);
    },

    inYears: function(d1, d2) {
        return d2.getFullYear()-d1.getFullYear();
    }
}

*/

var dob = new Date(2026, 4, 24);
var today = new Date();
var diff = new Date(today.getTime() - dob.getTime());
// diff is: Thu Jul 05 1973 04:00:00 GMT+0300 (EEST)
var year = "";

	if ((diff.getUTCFullYear() - 1970) < 0) {
		year = 0;
	} else {
		year = (diff.getUTCFullYear() - 1970);
	};
// Gives difference as year
// 3
var month = diff.getUTCMonth(); // Gives month count of difference
// 6
var day = diff.getUTCDate() - 1; // Gives day count of difference
// 4
var yrtxt = ' Years ';
var mtxt = ' Months and ';
var dtxt = ' Days Old!';
var age = year + yrtxt + month + mtxt + day + dtxt;

document.write(age);
// JavaScript eSolutions Calculators
// Curator: Jesse Fowler
// Version: 1.1
// Notes: Link calcs.js from the head of your webpage and include inc_calcs.aspx into the body to get calculators

function removeCommas(aNum) {

//remove any commas

aNum=aNum.replace(/,/g,"");

//remove any spaces

aNum=aNum.replace(/\s/g,"");

return aNum;

}//end of removeCommas(aNum)

//this checks whether the number entered does not have several decimals

//or non-numeric characters

function checkNum(aNum) {

var isOK=0;

var aNum=aNum+"";

//if the number has one or none decimal points, lastIndexOf and indexOf

//will give the same answer

if (aNum.lastIndexOf(".")!=aNum.indexOf("."))

isOK=1;

else

//here a regular expression is used to check for numbers and decimals

if (aNum.match(/[^0-9.]/))

isOK=2;

return isOK;

}//end of checkNum(aNum)


function floor(number)
{
  return Math.floor(number*Math.pow(10,2))/Math.pow(10,2);
}

function dosum()
{
  var mi = document.temps.IR.value / 1200;
  var base = 1;
  var mbase = 1 + mi;
  for (i=0; i<document.temps.YR.value * 12; i++)
  {
    base = base * mbase
  }
  document.temps.LA.value = removeCommas(document.temps.LA.value)
  document.temps.PI.value = floor(document.temps.LA.value * mi / ( 1 - (1/base)))
  document.temps.MT.value = floor(document.temps.AT.value / 12)
  document.temps.MI.value = floor(document.temps.AI.value / 12)
  var dasum = document.temps.LA.value * mi / ( 1 - (1/base)) +
        document.temps.AT.value / 12 + 
        document.temps.AI.value / 12;
  document.temps.MP.value = floor(dasum);
}

function checkNumber(input, min, max, msg)
    {   msg = msg + " field has invalid data: " + input.value;
        var str = input.value;
        for (var i = 0; i < str.length; i++)
            {   var ch = str.substring(i, i + 1)
                if ((ch < "0" || ch > "9") && ch != '.')
                    {   alert(msg);    return false;    }
            }
        var num = parseFloat(str)
        if (num < min || num > max)
            {   alert(msg + " not in the range " + min + " to " + max);
                return false;
            }
        input.value = str;
        return true;
    }
function computeField(input)
    {   if (    input.value != null && input.value.length != 0    )
                  input.value = "" + eval(removeCommas(input.value));
        computeForm(input.form);
    }
	
function computeForm(form)
    {   if (   form.payments.value == null ||
                form.payments.value.length == 0 ||
                form.interest.value == null ||
                form.interest.value.length == 0 ||
                form.principal.value == null ||
                form.principal.value.length == 0  )
            return;
		
        if (   !checkNumber(form.principal, 100, 9999999, "Principal") ||
                !checkNumber(form.payments, 1, 480, "Number of Payments") ||
                !checkNumber(form.interest, .001, 99, "Interest")    )
            {   form.payment.value = "Invalid";    return;    }
        var i = form.interest.value;
        if (    i < 1    )
            {   i *= 100;    form.interest.value = i;    }
        i /= 1200;
        var pow = 1;
        for (var j = 0; j < form.payments.value; j++)
             pow = pow * (1 + i);
        monthly = (form.principal.value * pow * i) / (pow - 1)
        form.payment.value = Math.ceil(100 * monthly)/100
    }
function clearForm(form)
    {   form.principal.value = "";
        form.payments.value = "";
        form.interest.value = "";
    }

<!-- Original:  Michael C. Hundt (mchundt@nglic.com) -->
<!-- Web Site:  http://www.cinet.net/~mhundt/mystuff.htm -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->


var i = 0; // interest
var m = 0; // months
var f = 0; // factor
var den = 0; 
var s = "0"; // string
var d = 0; // decimal place
function CalcA() {
if(document.calform.interest.value=="" || document.calform.months.value=="" || document.calform.payment.value=="") {
alert("Please fill in all of the required fields.");
}
else { 
if(document.calform.period.options[1].selected == true) {
m = document.calform.months.value * 12;
}
else {
m = document.calform.months.value;
} 
i = Math.pow(((document.calform.interest.value/100)+1),.0833333)-1;
den = i / (i+1);
f = Math.pow((i+1),m)-1;
f /= den;
f *= removeCommas(document.calform.payment.value);
d = String(f).indexOf(".");
s = String(f).substring(0,(d+3));
document.calform.total.value = "$" + s;  
   }
}

<!-- This script and many more are available free online at --> 
<!-- The JavaScript Source!! http://javascript.internet.com --> 
<!-- Created by: Jeremy Zongker: http://www.creditorweb.com/content/ --> 

function cwCalc() 
{ 

if (document.getElementById('cwBalance').value=='') {alert('Please enter your credit card balance.'); return;} 
if (document.getElementById('cwRate').value=='') {alert('Please enter your credit card\'s interest rate.'); return;} 
if ( (document.getElementById('cwMonthlyAmount').value=='' && document.getElementById('cwDesiredMonths').value=='') || (document.getElementById('cwMonthlyAmount').value!='' && document.getElementById('cwDesiredMonths').value!='') ) {alert('Please enter either a payment amount or desired months.'); return;}

var mRate=(document.getElementById('cwRate').value/100)/12; 
if (document.getElementById('cwMonthlyAmount').value=='') 
{ 
        var payment=removeCommas(document.getElementById('cwBalance').value)*(mRate)/( 1-Math.pow((1+mRate),(-document.getElementById('cwDesiredMonths').value)) ); 
        payment=Math.round(payment*100)/100; 
        document.getElementById('cwResult').innerHTML="It will cost $" + payment.toFixed(2) + " a month to pay off this card and will cost you a total of $" + (payment*document.getElementById('cwDesiredMonths').value).toFixed(2) + ".";

} else { 
        var remainingBalance=removeCommas(document.getElementById('cwBalance').value); 
        var minPayment=mRate*removeCommas(document.getElementById('cwBalance').value); 
        var months=0; 
        var lastPayment; 
        if (minPayment>removeCommas(document.getElementById('cwMonthlyAmount').value)) {alert ('Your monthly payment is less than the monthly interest charged by this card.');return;}

        while (remainingBalance>0) 
        { 
                months++; 
                remainingBalance=remainingBalance*(1 + mRate)-removeCommas(document.getElementById('cwMonthlyAmount').value); 
        } 
        document.getElementById('cwResult').innerHTML="It will take " + months + " months to pay off this card and will cost you a total of $" + (removeCommas(document.getElementById('cwMonthlyAmount').value)*months).toFixed(2) + ".";

} 
} 


<!-- Original:  Brian Cordeau (stdbsc13@shsu.edu) -->
<!-- Web Site:  http://www.shsu.edu/~stdbsc13 -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

function Loan() {
var housePrice;
var IR;
var dpayment;
var years;
var monthPay;
var month;
switch(document.calcform.startm.value) {
case "january":
document.calcform.startm.value="0";
parseInt(document.calcform.startm.value)
break;
case "february":
document.calcform.startm.value="1";
parseInt(document.calcform.startm.value)
break;
case "march":
document.calcform.startm.value="2";
parseInt(document.calcform.startm.value);
break;
case "april":
document.calcform.startm.value="3";
parseInt(document.calcform.startm.value);
break;
case "may":
document.calcform.startm.value="4";
parseInt(document.calcform.startm.value);
break;
case "june":
document.calcform.startm.value="5";
parseInt(document.calcform.startm.value);
break;
case "july":
document.calcform.startm.value="6";
parseInt(document.calcform.startm.value);
break;
case "august":
document.calcform.startm.value="7";
parseInt(document.calcform.startm.value);
break;
case "september":
document.calcform.startm.value="8";
parseInt(document.calcform.startm.value);
break;
case "october":
document.calcform.startm.value="9";
parseInt(document.calcform.startm.value);
break;
case "november":
document.calcform.startm.value="10";
parseInt(document.calcform.startm.value);
break;
case "december":
document.calcform.startm.value="11";
parseInt(document.calcform.startm.value);
break;
default:
document.calcform.startm.value="0";
parseInt(document.calcform.startm.value);
break;
}
housePrice = parseFloat(document.calcform.price.value);
dpayment = parseFloat(document.calcform.dpayment.value);
IR = parseFloat(document.calcform.interest.value);
years = parseFloat(document.calcform.time.value);
housePrice = housePrice - dpayment;
month = years * 12;
interestRate = IR / 12;
negmonth =- 1 * month;
var bottom = 1 - (Math.pow(interestRate+1,negmonth));
var top = interestRate;
var mid = top / bottom;
var dec;
document.calcform.monthPay.value = (housePrice * mid);
monthPay = document.calcform.monthPay.value;
document.calcform.monthPay.value = eval(monthPay);
housePrice = housePrice - document.calcform.monthPay.value;
document.calcform.month.value = month;
}
function convert() {
var startmonth = new String();
startmonth = document.calcform.startm.value;
document.calcform.startm.value = startmonth.toLowerCase();
}
function changenum() {
document.calcform.startyear.value=parseInt(document.calcform.startyear.value);
}
var d = new Date;
function getFieldValue (strFieldName) {
var strFieldValue;
var objRegExp = new RegExp(strFieldName + "=([^&]+)","gi");
if (objRegExp.test(location.search))
strFieldValue = unescape(RegExp.$1);
else strFieldValue="";
return strFieldValue;
}
function Currency(money1) {
var money = new String(money1);
var decimal = money.indexOf(".",[0]);
var money = money.substring(0,decimal+3);
var money1 = parseFloat(money);
return money;
}
var startmonth;
startmonth = getFieldValue("startm");
var monthofpayment = new String;
month = getFieldValue("month");
monthPay = getFieldValue("monthPay");
Houseprice = getFieldValue("price");
Ir = getFieldValue("interest");
Ir = Ir/12;
year = getFieldValue("startyear")
function check() {
var dPayment = document.calcform.dpayment.value;
var price = document.calcform.price.value;
if(price.indexOf(",") >= 0) {
alert("Please do not put commas in the Price number")
   }
}
function check1() {
var dPayment = document.calcform.dpayment.value;
if(dPayment.indexOf(",") >= 0) {
alert("Please do not put commas in the Down Payment number");
   }
}

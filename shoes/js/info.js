function validateForm()
{
var fullname = document.forms["myForm"]["fullname"];
var email = document.forms["myForm"]["email"];
var posp = email.value.indexOf(".");
var posat = email.value.indexOf("@");
var lastposp = email.value.lastIndexOf(".");
var zipcode = document.forms["myForm"]["zipcode"];
var size = document.forms["myForm"]["size"];
var phone = document.forms["myForm"]["phone"];
var quantity = document.forms["myForm"]["quantity"];
var country = document.forms["myForm"]["country"];
var countat = email.value.split("@").length - 1;
var r1 = document.getElementById("r1");
var r2 = document.getElementById("r2");



if(fullname.value =="")
{
document.getElementById("errorf").innerHTML="fullname required ...";
fullname.focus();
return false;
}
else
{
document.getElementById("errorf").innerHTML="";  
}


if(posp<1 || posat<1 || (lastposp-posat)<2 || 
lastposp==email.value.length-1 || countat !=1)
{
    document.getElementById("errore").innerHTML="Invalid email ...";
    email.focus();
    return false;
}
else
{
document.getElementById("errore").innerHTML="";  
}

if(phone.value ==""|| !(/^\+[0-9]+$/.test(phone.value)))
{
document.getElementById("errorph").innerHTML="phone number invalide ...";
phone.focus();
return false;
}
else
{
document.getElementById("errorph").innerHTML="";  
}

if(zipcode.value =="")
{
document.getElementById("errorzip").innerHTML="zip code invalid ...";
zipcode.focus();
return false;
}
else
{
document.getElementById("errorzip").innerHTML="";  
}

if(quantity.value =="")
{
document.getElementById("errorq").innerHTML="Quantity required ...";
quantity.focus();
return false;
}
else
{
document.getElementById("errorq").innerHTML="";  
}

if(size.value =="")
{
document.getElementById("errors").innerHTML="shoe size required ...";
size.focus();
return false;
}
else
{
document.getElementById("errors").innerHTML="";  
}

if(country.selectedIndex<1)
{
document.getElementById("errorc").innerHTML="Invalid country ...";
country.focus();
return false;
}
else
{
document.getElementById("errorc").innerHTML="";  
}

if(!r1.checked && !r2.checked)
{
document.getElementById("errorg").innerHTML="Invalid sexe ...";
return false;
}
else
{
document.getElementById("errorg").innerHTML="";  
}

return true;
}
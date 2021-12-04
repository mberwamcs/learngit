

// console.log("js is here");
//alert("js is here!");
var $ = function(id){
		return document.getElementById(id);
	};
//$("plus").disabled = false;
//$('totalmiles').disabled = true;
 //$('dayincome').disabled = true;
function day_calculate(){
    var startm = $('startmiles').value;
    var endm = $('endmiles').value;
    var del = $('deliveried').value;
    var price = $('perprice').value;
    //var tmiles = $('totalmiles').value;
    var gallons = $('gallon').value;
    var gas = $('gas').value;
    //var income = $('dayincome').value;
    var note = $('notes').value;
    $('notes').value = note;
    //total miles
    var tmiles = (endm - startm);
    $('totalmiles').value = tmiles;
    //total income
    var income = (del * price);
    $('dayincome').value = income;
    console.log(income);
     handleOnClockOut();
//alert('button clicked');
}

function endDay(){
     $("endday").style.display = "block";
     $("mainBtns").style.display = "none";
     $("home").style.display = "block";
     //$("submitBtn").style.display = "block";
     //$("editbtn").style.display = "none";
//alert("button clicked");
}
function viewData(){
    location ="read_mydate.php";
    //location = "allmath.html";
}
function homePage(){
    location ="index.php";
}

window.onload = function(){
    //$("newdaybtn").onclick = newDay;
    $("enddaybtn").onclick = endDay;
    $("submitBtn").onclick = day_calculate;
    $("viewBtn").onclick = viewData;
    $("homeBtn").onclick = homePage;
}
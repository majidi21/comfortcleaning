function populate (s1, s2){
 var s1 = document.getElementById(s1);
 var s2 = document.getElementById(s2);
 s2.innerHTML = "";

 if(s1.value == "HouseMaid"){
     var optionArray = ["|","Day_by_Day|Day_by_Day","living_home|living_home"];  
 } else if ( s1.value == "CommercialService"){
    var optionArray = ["|","Offices,Shops and retail premises|Offices,Shops and retail premises"," 	Community premises such us mosques, churches, halls| 	Community premises such us mosques, churches, halls"," 	Educational Premises including schools, colleges and universities| 	Educational Premises including schools, colleges and universities"," 	Hotels, clubs, guesthouses, apartments| 	Hotels, clubs, guesthouses, apartments"," 	Grounds, event ventures and hospitality| Grounds, event ventures and hospitality"];
}
 for(var option in optionArray){
      var pair = optionArray[option].split("|");
      var newoption = document.createElement("option");
      newoption.value = pair[0];
      newoption.innerHTML = pair[1];
      s2.options.add(newoption);
 }
}
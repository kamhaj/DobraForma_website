jQuery('document').ready(function(){
  var age = document.getElementById("age");
  var height = document.getElementById("height");
  var weight = document.getElementById("weight");
  var male = document.getElementById("male");
  var female = document.getElementById("female");
  var form = document.getElementById("form");

  document.getElementById("submit").addEventListener("click", countBmi);

  function countBmi() {
   if(age.value=='' || height.value=='' || weight.value=='' || (male.checked==false && female.checked==false)){
      alert("All fields are required!");
    }else{
      var p = [age.value, height.value, weight.value];
      if(male.checked){
        p.push("male");
      }else if(female.checked){
        p.push("female");
      }
      var bmi = Number(p[2])/(Number(p[1])/100*Number(p[1])/100);
      document.getElementById('calculate').innerHTML = bmi;
    }
  }
})
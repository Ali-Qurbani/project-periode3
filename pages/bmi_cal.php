<?php
if (!isset($_SESSION["id"])) {
    header("Location: ./index.php?content=message&alert=auth-error");
}
?>
<script>
    function bereken() {
        // var geboortedatum= document.getElementById("age").value;
        var gewicht= document.getElementById("gewicht").value;
        var lengte= document.getElementById("lengte").value;
        var lengte2 = parseFloat(lengte) * parseFloat(lengte)
        var qi = parseFloat(gewicht) / parseFloat(lengte2)
        var qi2 = Math.round(qi)

           var bmiqi = document.getElementById("bmiqi");
           bmiqi.innerHTML = "Uw BMI waarde is: " + qi2;
        console.log(qi)
           if (qi < 18.5) result.innerHTML = "Ondergewicht";
           if (qi > 18.5 && qi < 25) result.innerHTML = "Normaal gewicht";
           if (qi > 25 && qi < 27) result.innerHTML = "Licht overgewicht";
           if (qi > 27 && qi < 30) result.innerHTML = "Matig overgewicht";
           if (qi > 30 && qi < 40) result.innerHTML = "Ernstig overgewicht";
           if (qi > 40) result.innerHTML = "Ziekelijk overgewicht";
           document.getElementById("bmidb").value =qi2 ;

       }
</script>

<div>
   <h1>BMI Calculator</h1>
        <!-- <h6>Geboortedatum <input type="number" placeholder="18" id="age"></h6> -->
        <h6>Massa (kg) <input type="number" placeholder="90" id="gewicht"></h6>
        <h6>Lengte (m) <input type="number" placeholder="1.73" step="0.01" id="lengte"></h6>

   <h1 id="bmiqi"></h1>
   <h1 id="result"> </h1>

   <button type="button" class="btn btn-danger" onclick="bereken();">Bereken</button>

<form action="./index.php?content=bmi_save" method="post">
   <input type="hidden" id="bmidb" name="bmidb" value=" "><br>
   <input type="hidden" id="idv" name="idv" value="<?php echo $_SESSION["id"]; ?>"><br>
   <input type="submit" class="btn btn-info" value="Sla Op">
</form> 
</div>
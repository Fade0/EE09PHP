function skrypt1(){

    var wartosc=document.getElementById("auto").value;
    var cos="";
    console.log(wartosc);
    if (wartosc=="Renault"){
    cos="Renault Range T, 460 KM, 131531 km, tablica rejestracyjna KR130RE";
    }

    else if (wartosc=="MAN"){
    cos="MAN TGX XXL, 510 KM, 341833 km, tablica rejestracyjna KR131RE";
    }

    else if (wartosc=="Scania"){
        cos="Scania Streamline, 460 KM Euro 6, 143371 km tablica rejestracyjna KR130RF";
    }

    else if (wartosc=="Mercedes-Benz"){
        cos="Mercedes-Benz New Actros, 460 KM Euro 6,143313 km, tablica rejestracyjna KR130TB";
    }
    else{
        document.write("ni mo");

    }
    document.getElementById("szczegoly-pojazdu").innerHTML=cos;
    console.log(cos);
}
function skrypt2(){
    var jeden=parseInt(document.getElementById("tony").value);
    var dwa=parseInt(document.getElementById("km").value);
    var trzy=document.getElementById("typ").value;
    var wynik=1;
    console.log(jeden);
    console.log(dwa);
    console.log(trzy);

    if(trzy=="Chłodniczy"){
        wynik=dwa*0.15;
    }
    else if(trzy=="Zwykły"){
        wynik=dwa*0.05;
    }
    else if(trzy=="Gabaryt"){
        wynik=dwa*0.95;
    }
    console.log(wynik);
    document.getElementById("koszt").innerHTML=wynik+"zł";
}
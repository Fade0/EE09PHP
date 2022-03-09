function oblicz(){
    var dystans=document.getElementById("dystans").value;
    var typ=document.getElementById("usluga").value;
    console.log(typ);
    var cena=0;
    var wynik = 0;
    var wynik100=0;
    var usluga=0;

    if (dystans<21){
        cena=10;
        wynik100=cena;
    }
    else if (dystans<51){
        cena=20;
        wynik100=cena;
    }
    else if (dystans<101){
        cena=50;
        wynik100=cena;
    }
    else{
        dystans2=dystans-100;
        cena=dystans2*2+70;

    }
    if (typ==0 || typ==5){
        usluga=100;
    }
    if (typ==1){
        usluga=35;
    }
    if (typ==2 || typ==3){
        usluga=100;
    }
    if (typ==4){
        usluga=75;
    }

    wynik=usluga+cena;
    document.getElementById("wypisz").innerHTML=wynik;
}
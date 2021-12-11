

function skryptySa(){
    document.getElementById("przyciskJS").style.display="block";
    document.getElementById("komunikat").style.display="none";
}
    function storageLokalne(){
    if (localStorage.getItem("userName") === null) {
        document.querySelector("#username").innerText="serialowiczu";
      }
    else {
        document.querySelector("#username").innerText=localStorage.getItem("userName");
      }
    }
function storageSesji(){
    if (sessionStorage.getItem("lastlyViewed") === null) {
        document.querySelector("#ostatnioPrzegladane").style.visibility="hidden";
      }
    else {
        document.querySelector("#ktorySerial").innerText=sessionStorage.getItem("lastlyViewed");
      }
    }

   jQuery(function($)
        {
            //zresetuj scrolla
            $.scrollTo(0);
                
            $('#gotop').click(function() { $.scrollTo($('body'), 1000); });
            $('#idzdopolecanych').click(function() { $.scrollTo($('#polecane'), 1000); });
        }
        );
 var licznik = 0;
//zmien zeby licznik sie w local storage zapisywal
    
    function zmienKontrast() {
        
        if(licznik%2==0) {

            document.querySelector("body").style.backgroundColor = 'black';
            document.querySelector("footer").style.backgroundColor = "#101010";
        }
        else {
            document.querySelector("body").style.backgroundColor = '#2f3336';
            document.querySelector("footer").style.backgroundColor = "#2A2D30";
        }
        licznik++;
        localStorage.setItem("licznik", licznik);
    }
    function aktualnyKontrast(){
        var licz = localStorage.getItem("licznik");
        if(licz%2==0) {
            document.querySelector("body").style.backgroundColor = '#2f3336';
            document.querySelector("footer").style.backgroundColor = "#2A2D30";
        }
        else {
            document.querySelector("body").style.backgroundColor = 'black';
            document.querySelector("footer").style.backgroundColor = "#101010";
        }
    }

    function naCzymOgladam(){
        var para = document.createElement("p");
        var text = document.createTextNode("Seriale zazwyczaj oglądam na netfliksie. Mam wykupioną subskrypcję i" +
        "zdecydowanie polecam takie rozwiązanie. Dzięki temu nie oglądam telewizji.");
        para.appendChild(text);
            document.getElementById("przyciskJS").appendChild(para);
            document.getElementById("zobaczsam").style.display = "none";
    }
    function walidacja(){
    const form = document.querySelector("form");
    const input = form.querySelector("#fname");
    form.addEventListener("submit", e => {
        e.preventDefault();

        if(input.value.length<=1)
        {
            $( "#dialog-1" ).dialog( "open" );
        }
        else
        {
            const imieosobnika=input.value;
            localStorage.setItem("userName", imieosobnika);
            e.target.submit();
        }
    })
}

    function zczytajTytul()
    {
        const tytul = document.querySelector(".title").innerText;
        sessionStorage.setItem("lastlyViewed", tytul);
    }

    
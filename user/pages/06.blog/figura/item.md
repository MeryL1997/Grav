---
title: Figura
date: '11:22 06/12/2019'
taxonomy:
    category:
        - blog
    tag:
        - Figura
body_classes: 'header-lite fullwidth blogstyling'
author: 'Mery Lema'
---

Ingrese un numero: <input type="text" id="valor" onkeyup="myFunction()" >
 <!--onkeyup="myFunction()"-->
<p id="nombre" style="color:Azul;"></p>

<script type="text/javascript">

    function myFunction() {    
     var msj="";
    document.getElementById("nombre").innerHTML =msj;
    var max= document.getElementById("valor").value;
    //Imprimir figuras de triangulos formados por asteriscos con ciclo for
    var f,c;
    //triangulo rectangulo recto a derechas

    for (f=1;f<=max;f++)
    {
        for(c=1;c<=f;c++)
           msj=msj+"* ";
        msj=msj+"<br>";
    }
    //document.write("<br>");

    //triangulo rectangulo invertido a izquierdas
    for (f=max;f>=1;f--)
    {
        for(c=1;c<=max-f;c++)
            msj=msj+"&nbsp&nbsp";
        for(c=1;c<=f;c++)
            msj=msj+"* ";
      msj=msj+"<br>";
    }
    msj=msj+"<br>";
   // document.write("fin");
        document.getElementById("nombre").innerHTML = msj;
    }

</script>
$(buscar_datos());
var d;
var l=0;

$(document).on('click', ".tabla_datos tr",function(){
    var dato = $(this).find('td:nth-child(2)').text();
    d = $(this).find('td:nth-child(5)').text();
    l= $(this).find('td:nth-child(3)').text();
    if (parseInt(l)!=0){
        dou=$('#seca').val(dato + d);
    }else{
        dou=$('#seca').val("");
    }
    
  });

//DESDE EL BOTON ROJO
function javascript_to_php3() {
  
    if(parseInt(l)==0)
        {
                alert("Debe seleccionar un Centro de Salud.");
                return false;
    }else{
        confirm('Enviar Notificación?');
    }
       
}

//DESDE EL BOTON VERDE
function javascript_to_php() {
  
    if(parseInt(l)==0)
        {
                alert("Debe seleccionar un Centro de Salud.");
                return false;
    }else{
        window.location.href = 'form1_Antec.php' + "?w1="+d;
    }
       
}
//DESDE EL BOTON NARANJA
function javascript_to_php2() {
      if(parseInt(l)==0)
        {
                alert("Debe seleccionar un Centro de Salud.");
                return false;
    }else{
        window.location.href = 'form2_Primera_Atencion.php' + "?w2="+d;
    }
   
}
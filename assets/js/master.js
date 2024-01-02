
/*funciones dentro de nuestro proyecto*/
window.addEventListener('load',function () {
    var colapce = document.getElementById('colapce');
    var close = document.getElementById('close');
    let menu=document.getElementById('menu');
    let tamanoH=menu.getElementsByTagName("div");
    let tamanoP;
    let tamanoPW=window.screen.width;

    let i;
    if(tamanoPW<801){
        tamanoP=(window.screen.height);
    }else{
        tamanoP=(window.screen.height - 320);
    }

    let height=tamanoP+'px';

    for(i=0;i<tamanoH.length;i++){
        if(tamanoH[i].className==="inicioImage"){
            tamanoH[i].style.height=height;
            if(tamanoPW<801){
                tamanoH[i].style.backgroundImage = 'url("../assets/resouces/img/Inicio/Puerquito2.png")';
            }
        }
    }
        colapce.addEventListener('click',closeMenu);
        close.addEventListener('click',closeMenu);
        function closeMenu() {


            if(menu.className=="container"){
                menu.className += " Desplegado";
                colapce.className += " hAnimation";
                
            }else{
                menu.className="container";
                colapce.className += "hamburger";
            } 
}});
(function(){
    'use strict';
    window.addEventListener('DOMContentLoaded',function(){

        console.log("Todo redy");

        const barra_movil = document.querySelector("#menu_movil");
        const barra = document.querySelector("#site_nav");

        if(window.matchMedia("(max-width: 991px)").matches){
            window.addEventListener('scroll', fixedBar);
        }
        else{
            window.addEventListener('scroll', fixedBarEsc);
        }

        function fixedBar(){
            if(window.scrollY>0){
                barra_movil.classList.add('fixed');
                document.querySelector('#site_header').style.paddingTop=barra_movil.offsetHeight+"px";
                document.querySelector('#uriel_bar').classList.add('animated','bounceInUp');
 
            }
            else{
                document.querySelector('#site_header').style.paddingTop=0;
                document.querySelector('#uriel_bar').classList.remove('animated','bounceInUp');
                barra_movil.classList.remove('fixed');
            }
        }
        function fixedBarEsc(){
            if(window.scrollY>0){
                document.querySelector('#oculta').style.height=barra.offsetHeight+"px";
                barra.classList.add('fixed-esc');
                document.querySelector('#inicio a li').innerHTML="Uriel A.";
                
 
            }
            else{
                document.querySelector('#oculta').style.height=0;
                barra.classList.remove('fixed-esc');
                document.querySelector('#inicio a li').innerHTML="Inicio";
            }
        }


    });
})();
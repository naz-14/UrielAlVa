(function(){
    'use strict';
    window.addEventListener('DOMContentLoaded',function(){


        const barra = document.querySelector('#site_nav');
        //Barra fixed
        window.addEventListener('scroll', fixedBar);

        function fixedBar(){
            if(window.scrollY>0){
                document.querySelector('#uriel_bar').classList.remove('animated','bounceOutLeft')
                barra.classList.add('fixed');
                document.querySelector('.nav_container').style.height=barra.offsetHeight+"px";
                document.querySelector('#uriel_bar').classList.add('animated','bounceInLeft');
                
 
            }
            else{
                document.querySelector('#uriel_bar').classList.add('animated','bounceOutLeft');
                document.querySelector('.nav_container').style.height='';
                barra.classList.remove('fixed');
                document.querySelector('#uriel_bar').classList.remove('animated','bounceInLeft','duration-5s');
            }
        }

        //navegacion movil
        const hamburger = document.querySelector('#btn_menu_movil');
        const barra_lateral = document.querySelector('.opciones');
        const links = document.querySelectorAll('#contenedor_opciones a');
        hamburger.addEventListener('click',menuMovil);
        

        function menuMovil() {
            event.preventDefault();
            event.stopPropagation();
            barra_lateral.classList.toggle('activo');
            barra.classList.toggle('activo');
            if (barra_lateral.classList.contains('activo')) {
                window.addEventListener('scroll',()=>{
                    barra.classList.remove('activo');
                    barra_lateral.classList.remove('activo');
                });
                document.body.addEventListener('click',clickDom);
            }
        }
        //click fuera de nav
        function clickDom(){
            event.stopPropagation();
                    if(event.target!= barra_lateral){
                        console.log(event.target)
                        barra.classList.remove('activo');
                        barra_lateral.classList.remove('activo');
                    }
            document.body.removeEventListener('click',clickDom);
        }

        // navegacion con barra fixed
        links.forEach(link => {
            link.addEventListener('click',navegacion);
        });
        function navegacion(){
            event.preventDefault();
            var enlace = this.getAttribute('href');
            window.scrollTo(0,(document.querySelector(enlace).offsetTop - barra.offsetHeight));
            barra.classList.remove('activo');
            barra_lateral.classList.remove('activo');
        }

        

    });
})();
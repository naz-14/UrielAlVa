(function () {
  "use strict";
  window.addEventListener("DOMContentLoaded", function () {
    const barra = document.querySelector("#site_nav");
    //Barra fixed
    window.addEventListener("scroll", fixedBar);
    var i = 0,
      j = 0;
    function fixedBar() {
      if (window.scrollY > 0) {
        if (i == 0) {
          j = 0;
          document
            .querySelector("#inicio-uriel")
            .classList.remove("bounceOutLeft");
          document
            .querySelector("#inicio-bar")
            .classList.remove("bounceInLeft");
          document
            .querySelector("#inicio-bar")
            .classList.add("animated", "bounceOutLeft");
          document
            .querySelector("#inicio-bar")
            .addEventListener("animationend", ponerClases);
          i++;
        }
        document.querySelector("#uriel_bar").classList.remove("bounceOutLeft");
        document.querySelector(".nav_container").style.height =
          barra.clientHeight + "px";
        barra.classList.add("fixed");
        document
          .querySelector("#uriel_bar")
          .classList.add("animated", "bounceInLeft");
      } else {
        if (j == 0) {
          i = 0;
          document
            .querySelector("#inicio-bar")
            .classList.remove("bounceOutLeft");
          document
            .querySelector("#inicio-uriel")
            .classList.remove("bounceInLeft");
          document
            .querySelector("#inicio-uriel")
            .classList.add("bounceOutLeft");
          document
            .querySelector("#inicio-uriel")
            .addEventListener("animationend", quitarClases);
          j++;
        }
        document
          .querySelector("#uriel_bar")
          .classList.add("animated", "bounceOutLeft");
        document.querySelector(".nav_container").style.height = "";
        barra.classList.remove("fixed");
        document
          .querySelector("#uriel_bar")
          .classList.remove("bounceInLeft", "duration-5s");
      }
    }

    function quitarClases() {
      document.querySelector("#inicio-uriel").classList.remove("activo");
      document
        .querySelector("#inicio-bar")
        .classList.add("activo", "animated", "bounceInLeft");
      document
        .querySelector("#inicio-uriel")
        .removeEventListener("animationend", quitarClases);
    }
    function ponerClases() {
      document.querySelector("#inicio-bar").classList.remove("activo");
      document
        .querySelector("#inicio-uriel")
        .classList.add("activo", "animated", "bounceInLeft");
      document
        .querySelector("#inicio-bar")
        .removeEventListener("animationend", ponerClases);
    }

    //navegacion movil
    const hamburger = document.querySelector("#btn_menu_movil");
    const barra_lateral = document.querySelector(".opciones");
    const links = document.querySelectorAll("#contenedor_opciones a");
    hamburger.addEventListener("click", menuMovil);

    function menuMovil() {
      event.preventDefault();
      event.stopPropagation();
      barra_lateral.classList.toggle("activo");
      barra.classList.toggle("activo");
      if (barra_lateral.classList.contains("activo")) {
        window.addEventListener("scroll", () => {
          barra.classList.remove("activo");
          barra_lateral.classList.remove("activo");
        });
        document.body.addEventListener("click", clickDom);
      }
    }
    //click fuera de nav
    function clickDom() {
      event.stopPropagation();
      if (event.target != barra_lateral) {
        console.log(event.target);
        barra.classList.remove("activo");
        barra_lateral.classList.remove("activo");
      }
      document.body.removeEventListener("click", clickDom);
    }

    // navegacion con barra fixed
    links.forEach((link) => {
      link.addEventListener("click", navegacion);
    });
    function navegacion() {
      var enlace = this.getAttribute("href");
      window.scrollTo(
        0,
        document.querySelector(enlace).offsetTop - barra.offsetHeight
      );
      barra.classList.remove("activo");
      barra_lateral.classList.remove("activo");
    }

    //enviar email
    const formularioContacto = document.querySelector('.formulario_contacto')

    if (formularioContacto) {
      formularioContacto.addEventListener('submit', leerFormulario)
    }

    function leerFormulario(e){
      e.preventDefault()
      const nombre = document.querySelector('#nombre').value.trim()
      const apellido = document.querySelector('#apellido').value.trim()
      const email = document.querySelector('#email').value.trim()
      const asunto = document.querySelector('#asunto').value.trim()
      const mensaje = document.querySelector('#mensaje').value.trim()

      if (nombre == ''|| apellido == '' || email == '' || asunto == ''|| mensaje == ''){
        alert('Se deben llenar todos los campos del formulario')
      }else{
        const datos = new FormData()
        datos.append('nombre',nombre)
        datos.append('apellido',apellido)
        datos.append('email',email)
        datos.append('asunto',asunto)
        datos.append('mensaje',mensaje)
        correo(datos)
      }

    }

    function correo(datos) {
      //llamado a ajax
      //crear el objeto
      const xhr = new XMLHttpRequest();
      //abrir conexion
      xhr.open("POST", "includes/functions/email.php", true);
      //pasar los datos
      xhr.onload = function () {
        if (this.status === 200) {
          const respuesta = (xhr.responseText);
          if (respuesta == true) {
            alert('El Correo se envio correctamente, en breve me pondren en contacto')
          } else {
            alert('Hubo un error al enviar el correo por favor contactame por otro medio, gracias!')
          }
        }
      };
      //enviar los datos
      xhr.send(datos)
    }
  });
})();

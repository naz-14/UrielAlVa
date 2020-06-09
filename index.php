<?php include "includes/templates/header.php"; ?>
      <div class="header_content contenedor">
        <div class="personal">
          <div class="nombre">
            <h1 id="uriel">Uriel</h1>
            <h1 id="alvarez">Alvarez</h1>
          </div>
          <p id="conocimiento">"El Conocimiento se comparte"</p>
        </div>
        <div class="tecnologias">
          <div class="tecnologias-contenedor">
            <p class="tec">HTML5</p>
            <p class="tec">Css3</p>
            <p class="tec">MySql</p>
            <p class="tec">Jquery</p>
            <p class="tec">JavaScript</p>
            <p class="tec">PHP</p>
          </div>
        </div>
      </div>
    </header>
    <section class="acerca_de_mi" id="acerca_de_mi">
      <div class="acerca_de_mi_content contenedor" id="acerca_de_mi_content">
        <h2>Acerca de mi</h2>
        <p>
          Soy un desarrollador apasionado, todo tipo de tecnologías me
          interesan, actualmente estoy enfocado en el desarrollo frontend, sin
          embargo he desarrollado también aplicaciones full stack, siéntete
          libre de revisar mis proyectos anteriores mas abajo. Todo lo que se lo
          aprendí de forma autodidacta, con cursos y documentación oficial,
          actualmente mi nivel de HTML5 y Css3 (Sass y otros preprocesadores) es
          alto, medio en JavaScript y básico en MySql y PHP.
        </p>
        <p>
          Mi objetivo es ser desarrollador de aplicaciones móviles y a corto
          plazo espero poder desarrollar una aplicación completa en Native
          React.
        </p>
      </div>
    </section>
    <main class="portafolio" id="portafolio">
      <div class="portafolio_content contenedor" id="portafolio_content">
        <h2>Algunos Proyectos</h2>
        <h3>Proyectos Frontend</h3>
        <div class="contenedor_elementos">
          <div class="elemento_portafolio">
            <a href="proyecto.php?proyecto=manage">
              <h4>Manage Landing page</h4>
              <div class="img_portafolio">
                <img src="img/manage.png" alt="" />
              </div>
            </a>
          </div>
          <div class="elemento_portafolio">
            <a href="proyecto.php?proyecto=pitscript">
              <h4>Pitscript</h4>
              <div class="img_portafolio">
                <img src="img/pit.png" alt="" />
              </div>
            </a>
          </div>
          <div class="elemento_portafolio">
            <a href="proyecto.php?proyecto=slider">
              <h4>Slider With Vanilla JavaScript</h4>
              <div class="img_portafolio">
                <img src="img/slider.png" alt="" />
              </div>
            </a>
          </div>
        </div>
        <h3>Proyectos FullStack</h3>
        <div class="contenedor_elementos">
          <div class="elemento_portafolio">
            <a href="proyecto.php?proyecto=listings">
              <h4>Job Listings</h4>
              <div class="img_portafolio">
                <img src="img/joblistings.png" alt="" />
              </div>
            </a>
          </div>
          <div class="elemento_portafolio">
            <a href="proyecto.php?proyecto=webcamp">
              <h4>GDLWebCamp</h4>
              <div class="img_portafolio">
                <img src="img/gdlwebcamp.png" alt="" />
              </div>
            </a>
          </div>
        </div>
        <div class="btn-vermas-container">
          <a href="portafolio.php">Ver todos</a>
        </div>
      </div>
    </main>
    <section class="contacto" id="contacto">
      <div class="contacto_content contenedor" id="contacto_content">
        <h2>Contacto</h2>
        <div class="formulario_contacto">
          <form action="gracias.html" method="post" autocomplete="off">
            <div class="campo">
              <input
                type="text"
                name="nombre"
                id="nombre"
                placeholder="Nombre:"
              />
            </div>
            <div class="campo">
              <input
                type="text"
                name="apellido"
                id="pellido"
                placeholder="Apellido:"
              />
            </div>
            <div class="campo">
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Correo Electronico:"
              />
            </div>
            <div class="campo">
              <textarea
                name="mensaje"
                id="mensaje"
                cols="30"
                rows="10"
                placeholder="Mensaje:"
              ></textarea>
            </div>
            <div class="enviar">
              <input
                type="submit"
                id="btn-enviar"
                class="button"
                value="Enviar"
              />
            </div>
          </form>
        </div>
      </div>
    </section>
<?php include "includes/templates/footer.php"; ?>

<template>
  <div class="">
    <div class="row">
      <div class="col-md-12">
        <br />
      </div>
      <div class="col-md-6">
        <h1>Clínica dental Macía</h1>
        <p>
          Somos una empresa joven y dinámica,
          que encuentra su sentido en la satisfacción de nuestros clientes.
          Nos caracterizamos por la calidad de nuestras acciones y por el
          contacto y apoyo personalizado al odontólogo y propietario de la clínica dental.
          La razón por la que he elegido éste tema para realizar un plan de empresa es
          porque considero que el mundo de la odontología es interesante a la hora de
          emprender un negocio ya que abarca a todo tipo de público, siendo un servicio
          básico con el inconveniente que el sistema nacional de salud no abarca los
          servicios de la odontología, siendo una gran ventaja para éste sector de la
          sanidad y una oportunidad para crear una clínica dental.
        </p>
      </div>
      <div class="col-md-6">
        <!-- carousel con img de la clinica -->
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/silla.jpg" alt="Silla" width="500" height="280" />
            </div>
            <div class="carousel-item">
              <img src="./img/pared.jpg" alt="pared" width="500" height="280" />
            </div>
            <div class="carousel-item">
              <img src="./img/maquina.jpg" alt="maquina" width="500" height="280" />
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
    <hr style="height:2px;border-width:0;color:#660358;background-color:#660358; opacity: 0.3;" />

    <!--¿QUÉ TIPO DE TRATAMIENTO OFRECEMOS? -->
    <div class="container" id="foto">
      <div class="row">
        <div class="col-lg">
          <h2 class="text-center">¿QUÉ TIPO DE TRATAMIENTOS OFRECEMOS?</h2>

          <div class="row">
            <div class="col-xl-4">
              <h3>CONSULTA ESTÉTICA</h3>
              <p>Esto es una prueba de bootstrap.</p>
            </div>
            <div class="col-xl-4" >
              <h3></h3>
              <p></p>
            </div>
            <div class="col-xl-4">
              <h3>CONSULTA GENERAL</h3>
              <p>Esto es una prueba de bootstrap.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- AQUI VAMOS A INTRODUCIR EL FOOTER -->
    <hr style="height:2px;border-width:0;color:#660358;background-color:#660358; opacity: 0.3;" />

    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4">
      <!-- Footer Text -->
      <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3">
            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold">Footer text 1</h5>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil
              repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae
              harum esse fugiat. Itaque, culpa?
            </p>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3" />

          <!-- Grid column -->
          <div class="col-md-6 mb-md-0 mb-3">
            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum
              commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id
              excepturi hic.
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Text -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">
        © 2020 Copyright:
        <a href="https://github.com/MCosuna">Maria del Carmen Osuna Ojeda</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
<style >

.carousel {
  -webkit-box-shadow: 1px 2px 9px 6px rgba(242, 230, 230, 1);
  -moz-box-shadow: 1px 2px 9px 6px rgba(242, 230, 230, 1);
  box-shadow: 1px 2px 9px 6px rgba(242, 230, 230, 1);
}
.carousel-inner img {
  width: 100%;
  height: 100%;
  /* 801x451 */
}
#foto {
  background-image: url("./img/img2Ros.png");
  /* width: 100%; 
   height: 100vh;  */
  height: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.page-footer {
  background-color: #aa1679;
}
</style>   
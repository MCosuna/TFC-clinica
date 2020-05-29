<template>
<div>
   <!-- Page Header -->
  <header class="masthead" style="background-image: url(https://image.freepik.com/foto-gratis/herramientas-dentista-encuentran-mascara-protectora-espejo-pinzas-raspador-plantilla-publicidad-o-blog_121946-1275.jpg)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clínica Dental Macía</h1>
            <span class="subheading">Queremos verte sonreir</span>
          </div>
        </div>
      </div>
    </div>
  </header>

   <div class="overlay"></div>
  <div class="container">
     <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h3  id="colorMorao"  class=text-center>Horario</h3>
            <h4 id="colorMorao" class="subheading text-center">Lunes a Viernes: 9:00 / 20:00</h4>
          </div>
        </div>
      </div>

    <div class="row ">
    
     <!-- aqui iba carousel -->
      </div>
    </div>
    <hr style="height:2px;border-width:0;color:#660358;background-color:#660358; opacity: 0.3;" />

    <!--¿QUÉ TIPO DE TRATAMIENTO OFRECEMOS? -->
    <div class="" id="foto">
      <div class="row">
        <div class="col-lg">
          <h2 class="display-4 text-center">¿QUÉ TIPO DE TRATAMIENTOS OFRECEMOS?</h2>

          <div class="row">
            <div class="col-xl-4">
              <h3>CONSULTA ESTÉTICA</h3>
              <!-- A partir de aqui empieza el modal de reserva ahora -->
              <button
                type="button"
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#modalDiscount"
              >
                ¿Quieres saber más?
              </button>

              <!--Modal: modalDiscount-->
              <div
                class="modal fade right"
                id="modalDiscount"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myModalLabel"
                aria-hidden="true"
                data-backdrop="true"
              >
                <div
                  class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger"
                  role="document"
                >
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading">
                        Consulta estetica dental
                        <strong>Sé feliz, sonríe</strong>
                      </p>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                      </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="row">
                        <div class="col">
                          <p></p>
                          <p class="">
                            <i class="fas fa-gift fa-4x"></i>
                          </p>
                        </div>

                        <div class="col-9">
                          <p>
                            Nuestro equipo está compuesto por profesionales dedicados a tu felicidad.
                          </p>
                          <p>
                            <strong>
                              ¿Quieres saber más ?
                              <u>haz click aquí para consultar casos clínicos</u>.
                            </strong>
                          </p>
                          <h2>
                            <span class="badge">-----</span>
                          </h2>
                        </div>
                      </div>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer flex-center">
                      <a
                        href="https://mdbootstrap.com/products/jquery-ui-kit/"
                        class="btn btn-danger"
                      >
                        RESERVA AHORA
                        <i class="far fa-gem ml-1 white-text"></i>
                      </a>
                      <a
                        type="button"
                        class="btn btn-outline-danger waves-effect"
                        data-dismiss="modal"
                      >NO, GRACIAS</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!--Modal: modalDiscount-->
            </div>
            <div class="col-xl-4">
              <h3></h3>
              <p></p>
            </div>
            <div class="col-xl-4">
              <h3>CONSULTA GENERAL</h3>

              <!-- A partir de aqui empieza el modal de reserva ahora -->
              <button
                type="button"
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#modalDiscount"
              >
               ¿Quieres saber más?
              </button>

              <!--Modal: modalDiscount-->
              <div
                class="modal fade right"
                id="modalDiscount"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myModalLabel"
                aria-hidden="true"
                data-backdrop="true"
              >
                <div
                  class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger"
                  role="document"
                >
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading">
                       CONSULTA GENERAL
                        <strong>tu sonrisa es lo primero</strong>
                      </p>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                      </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-3">
                          <p></p>
                          <p class="text-center">
                            <i class="fas fa-gift fa-4x"></i>
                          </p>
                        </div>

                        <div class="col-9">
                          <p>
                            Sharing is caring. Therefore, from time to time we like to give our visitors small gifts. Today is
                            one of those days.
                          </p>
                          <p>
                            <strong>
                              Copy the following code and use it at the checkout. It's valid for
                              <u>one day</u>.
                            </strong>
                          </p>
                          <h2>
                            <span class="badge">Reserva ahora tu cita</span>
                          </h2>
                        </div>
                      </div>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer flex-center">
                      <a
                        href="https://mdbootstrap.com/products/jquery-ui-kit/"
                        class="btn btn-danger"
                      >
                        Get it
                        now
                        <i class="far fa-gem ml-1 white-text"></i>
                      </a>
                      <a
                        type="button"
                        class="btn btn-outline-danger waves-effect"
                        data-dismiss="modal"
                      >No, thanks</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!--Modal: modalDiscount fin-->
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

          <hr class=" w-100 d-md-none pb-3" />

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
  </div>
</template>
 <script src="js/clean-blog.min.js"></script>

<script>
export default {
 
  mounted() {
    console.log("Component mounted.");
  },
  
};

</script>
<style >
.colorG{
  
}
.prueba1{
  background-color: #f2e6e6;
  /* margin-top: 3%; */
  width: 70% !important;
  margin-right: 0 !important;
}

.container-fluid {
 /* position: absolute;  */
/* margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
  height: 100%;
  width: 100%;
  margin: 0 !important;  */
}


.carousel {
  -webkit-box-shadow: 1px 2px 9px 6px rgba(242, 230, 230, 1);
  -moz-box-shadow: 1px 2px 9px 6px rgba(242, 230, 230, 1);
  box-shadow: 1px 2px 9px 6px rgba(242, 230, 230, 1);
  width: 100% !important;
  height: 100% !important;
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
  /* width: 100%; */
  margin:0px !important;
  height: 100%;

}
header.masthead {
    margin-bottom: 25px;
    background: no-repeat center center;
    background-attachment: scroll;
    position: relative;
    background-size: cover;
    color: #660358;
    /* background: snow; */

}
#colorMorao{
 color: #660358;
}

</style>   
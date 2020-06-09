<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <header>Contacta con nosotros:</header>
        <form id="form" class="topBefore" method="post" v-on:submit.prevent="crearContacto" >
          <input id="name" type="text" placeholder="Nombre" v-model="cliente.name" />
          <input id="email" type="text" placeholder="E-mail:" v-model="cliente.email" />
          <textarea id="message" type="text" placeholder="Deja tu mensaje..." v-model="cliente.message"></textarea>
          <input id="submit" type="submit" value="ENVIAR" />
        </form>
      </div>

      <div class="col">
            <header>¿Dónde nos encontramos?</header>

 <GmapMap style="width: 600px; height: 280px;" :zoom="12" :center="{lat:  37.1881700, lng: -3.6066700}"
        ref="map">
      <GmapMarker 
        :position="{lat: 37.1681467, lng: -3.6040124}" 

        />
    </GmapMap>

<!-- queda calcular la distancia entre dos puntos -->

      </div>
     
    </div>
     <!-- <div class="row">
        <div class="col">  -->
          <!-- footer -->
           

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
              
            </p>
          </div>
          <!-- Grid column -->

          <hr class=" w-100 d-md-none pb-3" />

          <!-- Grid column -->
          <div class="col-md-6 mb-md-0 mb-3">
            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
            <p>
             
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

        </div>
      <!-- </div>
  </div> -->
  
</template>

   
<script>
export default {
  data() {
  
    return {
      markers: [],
      place: null,
      datos: [],
      cliente:{
        name: '',
        email: '',
        message: '',
      },
      show : false,
    };


  },
  beforeMount(){
    
    
  },
  mounted() {
    console.log("Component mounted.");

  },
  methods: {
    generate() {
      this.center = {
        lat: 37.1881700,
        lng: -3.6066700,
      }
      this.markers = _.range(30)
        .map(m => ({
          latLng: {
            lat: 37.1881700,
            lng:-3.6066700,
          }
        }))
    },
    crearContacto(){
      this.$http.post("/contacto/", this.cliente).then(
        response => {
          this.datos.push(response.data.cliente);
          this.cliente = {
            name: "",
            email: "",
            message: "",
          };
          console.log(response.data.name);
          console.log(response.data.email);
          console.log(response.data.message);

          var n = JSON.parse(JSON.stringify(response.data.name));
          var correo = JSON.parse(JSON.stringify(response.data.email));
          var message = JSON.parse(JSON.stringify(response.data.message));
                  
         
        },
        response => {
          console.log("response error: "+response);
        }
      );

    }
  }

      
};
</script>

<style >
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
.footer{
  padding : 0;
  margin: 0 !important;
  width: 100vh !important;
  height: 100%;
}
.row{
   margin: 0 !important;
}
#map {
   width: 100%;
   height: 400px;
   background-color: grey;
 }
@media only screen and (max-width: 400px) {

#form {
  position: relative;
  width: 350px;
  margin: 50px auto 100px auto;
}


}
/* medida normal */
.container-fluid {
  margin-top: 40px !important;
}
.col {
  /* border: 1px solid black; */
}
.gm-style{
  position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;
}


input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
  color: #ffffff;
  font-size: 1em;
}

input:focus::-webkit-input-placeholder,
textarea:focus::-webkit-input-placeholder {
  color: #bbb5af;
}

input::-moz-placeholder,
textarea::-moz-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-moz-placeholder,
textarea:focus::-moz-placeholder {
  color: #bbb5af;
}

input::placeholder,
textarea::placeholder {
  color: #660358;
  font-size: 0.875em;
}

input:focus::placeholder,
textarea::focus::placeholder {
  color: #282828;
}

input::-ms-placeholder,
textarea::-ms-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-ms-placeholder,
textarea:focus::-ms-placeholder {
  color: #bbb5af;
}

/* on hover placeholder */

input:hover::-webkit-input-placeholder,
textarea:hover::-webkit-input-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-webkit-input-placeholder,
textarea:hover:focus::-webkit-input-placeholder {
  color: #cbc6c1;
}

input:hover::-moz-placeholder,
textarea:hover::-moz-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-moz-placeholder,
textarea:hover:focus::-moz-placeholder {
  color: #f2e6e6;
  font-size: 0.875EM;
}

input:hover::placeholder,
textarea:hover::placeholder {
  color: #f2e6e6;
  font-size: 0.875em;
}

input:hover:focus::placeholder,
textarea:hover:focus::placeholder {
  color: #f2e6e6;
}

input:hover::placeholder,
textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-ms-placeholder,
textarea:hover::focus:-ms-placeholder {
  color: #cbc6c1;
}

header {
  position: relative;
  margin: 100px 0 25px 0;
  font-size: 2em;
  text-align: center;
  letter-spacing: 7px;
  color: #282828;
}

#form {
  position: relative;
  width: 500px;
  margin: 50px auto 100px auto;
}

input {
  font-family: "Lato", sans-serif;
font-size: 18px;
  width: 470px;
  height: 50px;
  padding: 0px 15px 0px 15px;

  background: transparent;
  outline: none;
  color: #660358;

  border: solid 1px #b3aca7;
  border-bottom: none;

  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

input:hover {
 background: #282828;
  color: #f2e6e6;
}

textarea {
  width: 470px;
  max-width: 470px;
  height: 110px;
  max-height: 110px;
  padding: 15px;
  background: transparent;
  outline: none;
  /* color: #726659; */
  /* font-family: "Lato", sans-serif; */
 font-size: 18px;
  border: solid 1px #b3aca7;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

textarea:hover {
  background: #282828;
  color: #f2e6e6;
}

#submit {
  padding: 0;
  margin: -5px 0px 0px 0px;

  /* font-family: "Lato", sans-serif; */
  font-size: 20px;
  color: #aa1679 ;

  outline: none;
  cursor: pointer;
  background-color: #282828;
  border: solid 1px #282828;;
  border-top: none;
}

#submit:hover {
    background: #aa1679;

  color: #f2e6e6;
}
</style>

<template>
  <!-- <div>
     <h2>Este es el componente de reserva</h2>
  </div>-->

  <!-- -------------------------------------------------------------------- -->
  <div class="reserva container-fluid center ">
    <div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
          <form class="form-horizontal" v-on:submit.prevent="crearCita" method="post">
            <fieldset>
              <legend class="text-center header">Reserva tu cita</legend>
              <!-- nombre del cliente -->
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fa fa-user bigicon"></i>
                </span>
                <div class="col-md-8">
                  <input
                    id="fname"
                    name="name"
                    type="text"
                    placeholder="Nombre"
                    class="form-control"
                    v-model="cliente.name"
                  />
                </div>
              </div>
              <!-- apellidos del cliente -->
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fa fa-user bigicon"></i>
                </span>
                <div class="col-md-8">
                  <input
                    id="lname"
                    name="name"
                    type="text"
                    placeholder="Apellidos"
                    class="form-control"
                    v-model="cliente.lname"
                  />
                </div>
              </div>
              <!-- email del cliente para enviar la cita -->
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fa fa-envelope-o bigicon"></i>
                </span>
                <div class="col-md-8">
                  <input
                    id="email"
                    name="email"
                    type="text"
                    placeholder="Email"
                    class="form-control"
                    v-model="cliente.email"
                  />
                </div>
              </div>
              <!-- telefono del cliente -->
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fa fa-phone-square bigicon"></i>
                </span>
                <div class="col-md-8">
                  <input
                    id="phone"
                    name="phone"
                    type="text"
                    placeholder="Teléfono"
                    class="form-control"
                    v-model="cliente.phone"
                  />
                </div>
              </div>
              <!-- dni que funciona como clave principal -->
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fa fa-phone-square bigicon"></i>
                </span>
                <div class="col-md-8">
                  <input
                    id="dni"
                    name="dni"
                    type="text"
                    placeholder="DNI"
                    class="form-control"
                    v-model="cliente.dni"
                  />
                </div>
              </div>
              
            <!-- textarea con mensaje para el profesional -->
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fa fa-pencil-square-o bigicon"></i>
                </span>
                <div class="col-md-8">
                  <textarea
                    class="form-control"
                    id="message"
                    name="message"
                    placeholder="Déjanos un mensaje"
                    rows="7"
                    v-model="cliente.message"
                  ></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary btn-lg">ENVIAR</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  data (){
    return{
      datos: [],
      errors:[],
      cliente: {
        name: '',
        lname: '',
        phone: '',
        message: '',
        email: '',
        dni: null
      }

    } 
  },
  created (){

  },
  mounted() {
    console.log("Component reserva mounted.");
  },
  methods: {
       crearCita(){
          this.$http.post("/reserva", this.cliente).then(response =>{
            this.datos.push(response.data.cliente);
            this.cliente={name:'',email:'', lname:'', phone: '', message:'', dni:null};
            //console.log(response.data.cliente)
            var parsedobj = JSON.parse(JSON.stringify(response.data));
            console.log(parsedobj)
          },response =>{
            this.errors=response.data;
            //console.log(this.error)
          } );
        }
  }
};
</script>
<style >
.btn{
  background-color: #660358;
}
.reserva{
  margin-top: 5% !important;
}


</style>
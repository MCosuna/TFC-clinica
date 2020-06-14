<template>
  <!-- <div>
     <h2>Este es el componente de reserva</h2>
  </div>-->

  <!-- -------------Component reserva------------------------------------------------------- -->
  <div class="reserva container-fluid center">
    <div class="row" id="abs-center">
      <div class="col-md-12">
        <div class="well well-sm">
          <form
            class="form-horizontal"
            v-on:submit.prevent="crearCita"
            method="post"
          >
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
                    minlength="5"
                    maxlength="40"
                    pattern="[A-Za-z0-9]+"
                    required
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
                    minlength="5"
                    maxlength="40"
                    pattern="[A-Za-z0-9]+"
                    required
                  />
                </div>
              </div>
              <!-- email del cliente para enviar la cita -->
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fas fa-at bigicon"></i>
                </span>
                <div class="col-md-8">
                  <input
                    id="email"
                    name="email"
                    type="text"
                    placeholder="Email"
                    class="form-control"
                    v-model="cliente.email"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                    required
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
                    
                    required
                  />
                </div>
              </div>
              <!-- dni que funciona como clave principal -->
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fas fa-user-check bigicon"></i>
                </span>
                <div class="col-md-8">
                  <input
                    id="dni"
                    name="dni"
                    type="text"
                    placeholder="DNI"
                    class="form-control"
                    v-model="cliente.dni"
                    required
                  />
                </div>
              </div>

              <!-- selector de hora -->

              <!-- textarea con mensaje para el profesional -->
              <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">
                  <i class="fas fa-inbox bigicon"></i>
                </span>
                <div class="col-md-8">
                  <textarea
                    class="form-control"
                    id="message"
                    name="message"
                    placeholder="Déjanos un mensaje"
                    rows="7"
                    v-model="cliente.message"
                    required
                  ></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary btn-lg">
                    ENVIAR
                  </button>
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
import jspdf from "jspdf";
// import 'jspdf-autotable'

export default {
  data() {
    return {
      datos: [],
      errors: [],
      cliente: {
        name: "",
        lname: "",
        phone: "",
        message: "",
        email: "",
        dni: null
      }
    };
  },
  created() {},
  beforeSend: function() {
    // console.log(this.data);
  },
  mounted() {
    console.log("Component reserva mounted.");
    // console.log(this.cliente);
  },
  methods: {
    crearCita() {
      this.$http.post("/reserva", this.cliente).then(
        response => {
          this.datos.push(response.data.cliente);
          this.cliente = {
            name: "",
            email: "",
            lname: "",
            phone: "",
            message: "",
            dni: null
          };
          const doc = new jspdf();
          console.log(response.data.name);
          console.log(response.data.lname);
          console.log(response.data.phone);
          console.log(response.data.dni);
          console.log(response.data.email);
          console.log(response.data.message);

          var n = JSON.parse(JSON.stringify(response.data.name));
          var apellidos = JSON.parse(JSON.stringify(response.data.lname));
          var correo = JSON.parse(JSON.stringify(response.data.email));
          var phone = JSON.parse(JSON.stringify(response.data.phone));
          var message = JSON.parse(JSON.stringify(response.data.message));
          var dni = JSON.parse(JSON.stringify(response.data.dni));

          // generar PDF para el cliente

          const img = new Image();
          var imgBase64 =
            "data:image/png;base64,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";

          doc.text("DETALLES DE SU CITA:", 15, 15);
          doc.text("_______________________", 15, 17);
          doc.addImage(imgBase64, "png", 95, 15, 75, 25);
          doc.setFontSize(16);
          doc.text("Nombre: " + n, 15, 25);
          doc.text("Apellidos: " + apellidos, 15, 35);
          doc.text("Teléfono: " + phone, 15, 45);
          doc.text("E-mail: " + correo, 15, 55);
          doc.text("DNI: " + dni, 15, 65);
          doc.text("Mensaje para el especialista: " + message, 15, 75);
          doc.save("cita.pdf");
        },
        response => {}
      );
    },

    descarga() {
      //  const doc = new jspdf();
      //  doc.text("hello world ",15,15)
      //  doc.save("prueba.pdf");
    }
  }
};
</script>
<style>
form input:valid {
  border: 2px solid green;
}

form input:focus:invalid {
  border: 2px solid red;
}
.btn {
  background-color: #660358;
}
.reserva {
  margin-top: 5% !important;
}
.form-horizontal {
  width: 100%;
  float: inherit;
}
#abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}
</style>

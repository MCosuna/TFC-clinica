<template>
  <div class="container">
    <div class="container ">
      <div class="row">
        <div class="col">
          <h2>Citas para hoy:</h2>
          <table class="table text-center">
            <!--Creamos una tabla que mostrará todas las tareas-->
            <thead>
              <tr>
                <th scope="col">DNI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Actualizado</th>
                <th scope="col">Creado</th>
                <th scope="col">opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="task in arrayTasks" :key="task.dni">
                <!--Recorremos el array y cargamos nuestra tabla-->
                <td v-text="task.dni"></td>
                <td v-text="task.name"></td>
                <td v-text="task.lname"></td>
                <td v-text="task.email"></td>
                <td v-text="task.phone"></td>
                <td v-text="task.message"></td>
                <td v-text="task.updated_at"></td>
                <td v-text="task.created_at"></td>
                <td>
                  <!-- <button
                    v-if="update != 0"
                    @click="updateTasks()"
                    class="btn btn-warning"
                  >
                    Actualizar
                  </button> -->

                  <button class="btn" @click="deleteTask(task)">Borrar</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <button v-on:click="getCitas" type="submit" class="btn btn-black">
      Obtener Citas de hoy
    </button>
    <!-- <button v-if="update != 0" @click="clearFields()" class="btn">Atrás</button> -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      arrayTasks: []
    };
  },
  beforeMount() {
    if (localStorage.getItem("log") == undefined) {
      document.href = "/login";
    }
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    getCitas: function() {
      let me = this;
      let url = "/api/clientes"; //Ruta que hemos creado para que nos devuelva todas las tareas
      axios
        .get(url)
        .then(function(response) {
          console.log(response);
          me.arrayTasks = response.data;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    deleteTask(data) {
      //Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
      let me = this;
      let task_id = data.dni;
      if ( this.$swal("¿Seguro que deseas borrar esta tarea?", "haz click en OK para continuar")) {
        axios
          .delete("/api/clientes/" + task_id)
          .then(function(response) {
            me.getCitas();
                    // this.$swal('Heading', 'this is a Heading', 'OK');

          })
          .catch(function(error) {
            console.log(error);
          });
      }
   
    },

  }
};
</script>
<style>
</style>

<template>
<div class="container">
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <!-- <table class="table" >
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
      </tr>      
      <tr class="success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
    </tbody>
  </table> -->
  <button v-on:click="getCitas" type="submit" class="btn btn-black">pulsa</button>
</div>

</template>

<script>
export default {
    beforeMount(){
        if(localStorage.getItem('log')== undefined){
            document.href = '/login'
        }
    },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
   getCitas: function () {
                let me =this;
                let url = '/api/clientes' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                  console.log(response);
                })
                .catch(function (error) {
                   
                    console.log(error);
                });
            }
  }
};
</script>
<style >


</style>
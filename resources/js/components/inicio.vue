<template>

    <div class="container">
  <div class="row">
        <div class="col-md-12"><br></div>
        <div class="col-md-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Sed id lacus mauris. Praesent vel euismod urna, a molestie nunc.
            Etiam bibendum quis erat non ornare. Pellentesque habitant morbi tristique senectus 
            et netus et malesuada fames ac turpis egestas. Mauris velit sem, sollicitudin in sapien a,
             venenatis pellentesque est. Nulla facilisi. Curabitur ullamcorper,
           lacus nec mattis dapibus, ex turpis pellentesque augue, quis pharetra diam ex vel quam.</p> </div>
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
      <img src="./img/silla.jpg" alt="Los Angeles" width="500" height="280">
    </div>
    <div class="carousel-item">
      <img src="./img/pared.jpg" alt="Chicago" width="500" height="280">
    </div>
    <div class="carousel-item">
      <img src="./img/maquina.jpg" alt="New York" width="500" height="280">
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

</style>   
<template>

<nav  class="navbar navbar-expand-lg static-top menu">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img class="img-responsive" src="./img/LOGO2.png" alt="" width="30%" >
        </a>
    <button class="navbar-toggler btn-menu " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">INICIO
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">¿QUIÉNES SOMOS?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">CONTACTO</a>
        </li>
        <li>
          <div class="dropdown btn-outline-secondary">
  <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" >
    CONSULTA
  </button>
  <div class="dropdown-menu">
    <button class="dropdown-item" type="button">CONSULTA ESTÉTICA</button>
    <button class="dropdown-item" type="button">CONSULTA GENERAL</button>
  </div>
</div>
        </li>
      </ul>
    </div>
  </div>
</nav>

</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
<style >

.navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='black' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}

.navbar-toggler {
  border-color: #282828;
} 
.dropdown {
  background-color: #ffffff;
}
</style>
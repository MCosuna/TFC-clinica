<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg fixed-top menu clearfix">
      <!-- <div class="container"> -->
      <router-link class="navbar-brand" tag="li" to="/">
        <img class="img-responsive" src="./img/LOGO2.png" alt width="30%" />
      </router-link>
      <button
        class="navbar-toggler btn-menu"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive"
        aria-controls="navbarResponsive"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon">
          <i class="fas fa-bars" style="font-size:35px;color:#aa1679;"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <router-link tag="li" to="/">INICIO</router-link>
            </a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="#">
              <router-link tag="li" to="/reserva">RESERVA CITA</router-link>
            </a>-->

            <div class="dropdown btn-outline-secondary">
              <button
                class="btn dropdown-toggle"
                type="button"
                id="dropdownMenu2"
                data-toggle="dropdown"
              >CONSULTA</button>
              <div class="dropdown-menu">
                <button class="dropdown-item" type="button">
                  <router-link tag="li" to="/consultaEstetica">CONSULTA ESTÉTICA</router-link>
                </button>

                <button class="dropdown-item" type="button">
                  <router-link tag="li" to="/consultaGeneral">CONSULTA GENERAL</router-link>
                </button>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <router-link tag="li" to="/reserva">RESERVA CITA</router-link>
            </a>
          </li>
          <li>
            <a class="nav-link" href="#">
              <router-link tag="li" to="/contacto">CONTACTO</router-link>
            </a>
          </li>
    
        </ul>
      </div>
      <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous"
      />
    </nav>
    <!-- <contacto/> -->
    <router-view></router-view>
  </div>
</template>
<script>
import contacto from "./components/contacto";

export default {
  name: "App",
  components: {
    // contacto
  }
};
</script>

<script>
$(function() {
  $(document).scroll(function() {
    var $nav = $(".navbar");
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
  });
});
</script>
<style >
.navbar.scrolled {
  background-color: #aa1679 !important;
  transition: background-color 1000ms linear;
}

.navbar li {
  margin-right: 20px;
}
.container {
  /* height: 100%; */
}
.navbar {
  margin-bottom: 100px !important;
}
.navbar a:hover {
  color: #660358;
  background-color: #f2e6e6;
}
#dropdownMenu2 {
  color: #660358;
  background-color: #f2e6e6;
}

.dropdown-menu :hover {
  color: #660358;
  background-color: #f2e6e6;
}

@media only screen and (max-width: 981px) {
  .navbar {
    background-color: #aa1679;
  }
  .btn-menu {
    background-color: #ffffff;
  }
  .navbar-toggler-icon {
    display: table-cell;
  }
}
</style>
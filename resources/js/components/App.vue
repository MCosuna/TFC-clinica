<template>
  <!-- <v-app>
        <v-navigation-drawer app></v-navigation-drawer>
        <v-app-bar
            app
            color="indigo"
            dark
  >-->
  <!-- <v-app-bar-nav-icon @click.stop="drawer = ! drawer" /> -->
  <!-- <v-toolbar-title>Clinica dental macia</v-toolbar-title>
        </v-app-bar>
        <v-content>
            <v-container>
  <router-link tag="li" to="/">Inicio</router-link>-->
  <!-- <router-link tag="li" to="/ExampleComponent">ExampleComponent</router-link> -->
  <!-- <router-view></router-view>
            </v-container>
        </v-content>
  </v-app>-->

  <div class="container">
    <nav class="navbar navbar-expand-lg fixed-top menu">
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
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <router-link tag="li" to="/">INICIO</router-link>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <router-link tag="li" to="/reserva">RESERVA CITA</router-link>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <router-link tag="li" to="/reserva">CONTACTO</router-link>
            </a>
          </li>
          <li>
            <div class="dropdown btn-outline-secondary">
              <button
                class="btn dropdown-toggle"
                type="button"
                id="dropdownMenu2"
                data-toggle="dropdown"
              >CONSULTA</button>
              <div class="dropdown-menu">
                <button class="dropdown-item" type="button">CONSULTA ESTÉTICA</button>
                <button class="dropdown-item" type="button">CONSULTA GENERAL</button>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- </div> -->
      <!-- <hr style="height:2px;border-width:0;color:#282828;background-color:#282828; "> -->
    </nav>

    <router-view></router-view>
  </div>
</template>
<style scoped>
.container{
    height: 100%;

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
  .btn-menu {
    background-color: #660358;
    color: #ffffff !important;
  }
  .navbar-toggler-icon {
    color: #ffffff !important;
    background-color: #ffffff !important;
  }
}
</style>
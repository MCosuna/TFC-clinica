<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <header>Contacta con nosotros:</header>
        <form id="form" class="topBefore">
          <input id="name" type="text" placeholder="Nombre" />
          <input id="email" type="text" placeholder="E-mail:" />
          <textarea id="message" type="text" placeholder="Deja tu mensaje..."></textarea>
          <input id="submit" type="submit" value="ENVIAR" />
        </form>
      </div>

      <div class="col">
            <h3>My Google Maps Demo</h3>

            <div id="map"></div>

      </div>
    </div>
    
  </div>
  
</template>
 <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcewRtBVYkKKxZvqKZWJuLQz4DhKdLyy0&callback=initMap&libraries=&v=weekly"
      async
      defer
    ></script>
<script>
export default {
  data() {
    return {

    } 

  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
      // Initialize and add the map
  initMap() {
    // The location of Uluru
    var uluru = {lat: -25.344, lng: 131.036};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
    var marker = new google.maps.Marker({
  position: uluru,
  map: map
});
}
  }
};
</script>

<style >
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
  border: 1px solid black;
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

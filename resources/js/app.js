/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import "./bootstrap"
import Vue from 'vue';
import vuetify from '@/js/plugins/vuetify';
import MaterialInput from 'vue-material-input';
import * as VueGoogleMaps from "vue2-google-maps";
import Form from './components/Form';
import Vue2Editor from "vue2-editor";
Vue.use(Vue2Editor);

window.Form = Form;


Vue.use(VueGoogleMaps, {
  load: {
    key: "AIzaSyBcewRtBVYkKKxZvqKZWJuLQz4DhKdLyy0",
    libraries: "places" // necessary for places input
  }
});

// Vue.component('contacto', VueGoogleMaps.Map);

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)
//Vue.use(Vuetify);
//importar las rutas desde vue routes
import Route from '@/js/routes.js';

import App from '@/js/components/App';


  import axios from "axios";
  import VueAxios from "vue-axios";



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//  Vue.component('inicio', require('./components/inicio.vue').default);

// Vue.component('reserva', require('./components/reserva.vue'));

 //import router from './routes'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



Vue.use(VueAxios,axios );
Vue.use(MaterialInput);

const app = new Vue({
    el: '#app',
     vuetify,
    router: Route,
    render: h => h(App),
    // vuetify : new Vuetify()
});

export default app;
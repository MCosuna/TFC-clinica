// import Vue from 'vue';
// import Router from 'vue-router';
// import ExampleComponent from './components/ExampleComponent';
// import inicio from './components/inicio.vue';

// Vue.use(Router)

// export default new Router({
//     routes: [
//         {
//             path: '/',
//             name: 'ExampleComponent',
//             component: require('./components/ExampleComponent')
//         },
//         {
//            path: '/inicio',
//            name: 'inicio',
//            component: require('./components/inicio')
//         }
//     ],
//     mode: 'history' //delete #
// })

import Vue from 'vue';
// import Router from 'vue-router';

import inicio from '@/js/components/inicio'
import reserva from '@/js/components/reserva'
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'inicio',
            component: inicio
        },
        {
            path: '/reserva',
            name: 'reserva',
            component: reserva
        }
    ]
});

export default router;

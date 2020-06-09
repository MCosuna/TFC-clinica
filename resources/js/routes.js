
import Vue from 'vue';
import inicio from '@/js/components/inicio'
import reserva from '@/js/components/reserva'
import consultaE from '@/js/components/consultaE'
import consultaG from '@/js/components/consultaG'
import contacto from '@/js/components/contacto'
import login from '@/js/components/login'
import VueRouter from 'vue-router';
import PanelAdministrador from '@/js/components/PanelAdministrador';
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'inicio',
            component: inicio
        }
        ,
        {
            path: '/reserva',
            name: 'reserva',
            component: reserva
        },
        {
            path: '/consultaEstetica',
            name: 'consultaEstetica',
            component: consultaE
        },
        {
            path: '/consultaGeneral',
            name: 'consultaGeneral',
            component: consultaG
        },
        {
            path: '/contacto',
            name: 'contacto',
            component: contacto
        },
        {
            path: '/login',
            name:'login',
            component: login
        },
        {
            path: '/PanelAdministrador',
            name: 'PanelAdministrador',
            component: PanelAdministrador
        },
        
    ]
});

export default router;

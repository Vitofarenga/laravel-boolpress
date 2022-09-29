import Vue from 'vue';
import App from './views/App'
import VueRouter from 'vue-router';
Vue.use(VueRouter)

import About from './pages/About';
import Contacts from './pages/Contacts';


const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/',
        name: 'About',
        component: About
        },
        {
            path: '/',
        name: 'Contacts',
        component: Contacts
        },
    ],
})

export default router
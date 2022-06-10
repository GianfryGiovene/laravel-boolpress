import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomeComponent from './pages/HomeComponent'
import BlogComponent from './pages/BlogComponent'
import ContactsComponent from './pages/ContactsComponent'
import NotFoundComponent from './pages/NotFoundComponent'
import DetailComponent from './pages/DetailComponent'



const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeComponent
        },
        {
            path: '/blog',
            name: 'blog',
            component: BlogComponent
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: ContactsComponent
        },
        {
            path: '/blog/:slug',
            name: 'detail',
            component: DetailComponent
        },
        {
            // rotta per risorsa inesistente
            path: '/*',
            name: 'notFound',
            component: NotFoundComponent
        }
    ]
})

export default router;

import VueRouter from 'vue-router';


let routes = [

    {
        component : require('./views/Home'),
        path      : '/'
    },

    {
        component : require('./views/About'),
        path      : '/about'
    },

    {
        component : require('./views/Contact'),
        path      : '/contact'
    }

];


export default new VueRouter({

    linkActiveClass : 'is-active',

    routes

});

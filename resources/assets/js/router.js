import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home')
    },
    {
        path: '/about',
        component: require('./views/About')
    },
    {
        path: '/contact',
        component: require('./views/Contact')
    },
    {
        path: '/users',
        component: require('./views/users/index')
    },
    {
        name: 'users.show',
        path: '/users/:id',
        component: require('./views/users/show')
    },
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});

import Home from '../views/p-home';

export default [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '*',
        redirect: '/'
    }
]
import MainPage from '../components/MainPage.vue'

export const routes = [
    {
        path: '/',
        name: 'MainPage',
        component: MainPage,
    },
    {
        path: '/admin/home',
        name: 'adminPage',
        component: require('../scenes/Admin').default,
    },
];

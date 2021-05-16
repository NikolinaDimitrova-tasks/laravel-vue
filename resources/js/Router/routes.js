const routes = [
    {
        path: '',
        component: () => import('../Pages/Main.vue'),
        name: 'home'
    },
    {
        path: 'form',
        component: () => import('../Pages/Form.vue'),
        name: 'form'
    },
]

export default routes;
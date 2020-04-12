import Dashboard from './kode/components/Dashboard'
import Projects from './kode/components/Projects'
import Teams from './kode/components/Teams'
import Error404 from './kode/components/Error404'

export default {
    base: '/app/',
    mode: 'history',
    routes: [
        {
            path: '*',
            component: Error404
        },
        {
            path: '/',
            component: Dashboard
        },
        {
            path: '/dashboard',
            component: Dashboard
        },
        {
            path: '/projects',
            component: Projects
        },
        {
            path: '/teams',
            component: Teams
        }
    ]
}

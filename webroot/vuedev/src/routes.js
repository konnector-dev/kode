import Dashboard from './components/Dashboard'
import Projects from './components/Projects'
import Teams from './components/Teams'
import Error404 from './components/Error404'

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

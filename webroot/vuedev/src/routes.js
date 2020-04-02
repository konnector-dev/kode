import Dashboard from './components/Dashboard'
import Projects from './components/Projects'

export default {
    base: '/app/',
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Dashboard
        },
        {
            path: '/dashboard',
            redirect: '/'
        },
        {
            path: '/projects',
            component: Projects
        }
    ]
}

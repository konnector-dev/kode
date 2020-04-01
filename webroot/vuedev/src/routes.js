import Dashboard from './components/Dashboard'
import Projects from './components/Projects'

export default {
    base: '/app/',
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Dashboard,
            alias: ['/', '/dashboard']
        },
        {
            path: '/projects',
            component: Projects
        }
    ]
}

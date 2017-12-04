import Axios from 'axios'

Vue.use(Axios)

export const HTTP = Axios.create({
    baseURL: 'http://dev.cmsful.com/app_dev.php/',
    headers: {
        Authorization: 'Bearer {token}'
    }
});
/*
 * HTTP Ajax Client using Axios
 * 
 * @author Kevin Roy <royk@myraytech.net>
 */
import Axios from 'axios'
let client = {}
var token = this.$store.getters.getToken

export default client = Axios.create({
        baseURL: 'http://dev.cmsful.com/app_dev.php/api/',
        headers: {
            Authorization: 'Bearer ' + token
        }
    });

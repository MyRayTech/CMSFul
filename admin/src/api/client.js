import ls from "local-storage"
import Axios from 'axios'

const client = Axios.create({
    baseURL: 'http://localhost/app_dev.php/api/v1/admin'
});


export default client;
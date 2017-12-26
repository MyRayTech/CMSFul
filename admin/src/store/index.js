/* 
 * Vuex State Store
 */

import Vue from 'vue'
import Vuex from 'vuex'
import * as actions from './actions'
import * as getters from './getters'
import * as mutations from './mutations'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    state: {
        config: {},
        builder: {},
        user: {}
    },
    actions,
    getters,
    mutations,
    modules: {

    },
    strict: debug,
    plugins: []
})

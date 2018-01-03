/* 
 * Vuex State Store
 */

import Vue from 'vue'
import Vuex from 'vuex'
import config from './modules/config'
import projects from './modules/projects'
import pages from './modules/pages'
import posts from './modules/posts'
import * as actions from './actions'
import * as getters from './getters'
import * as mutations from './mutations'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    state: {
        token: '',
        config: {},
        projects: {},
        builder: {},
        user: {},
    },
    actions,
    getters,
    mutations,
    modules: {
        config,
        projects,
        pages,
        posts
    },
    strict: debug,
    plugins: []
})

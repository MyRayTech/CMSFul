/* 
 * Vuex State Store
 */

import Vue from 'vue'
import Vuex from 'vuex'
import articles from './modules/articles'
import config from './modules/config'
import gallery from './modules/gallery'
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
        builder: {},
        user: {},
    },
    actions,
    getters,
    mutations,
    modules: {
        articles,
        config,
        gallery,
        pages,
        posts,
        projects
    },
    strict: debug,
    plugins: []
})

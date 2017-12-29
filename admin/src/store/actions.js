/* 
 *
 */
import * as modules from './modules';
import * as types from './mutation_types'

export function LOAD_CONFIG ({ commit }) {
        modules.config.fetch().then((response) => {
        commit(types.SET_CONFIG, { list: response.data })
      }, (err) => {
        console.error(err + ': Could not fetch config');
      })
}

export function SET_TOKEN ({commit}, token) {
    commit(types.SET_TOKEN, { token: token })
}
/* 
 *
 */
import * as types from './mutation_types'

export function SET_TOKEN ({commit}, token) {
    commit(types.SET_TOKEN, { token: token })
}
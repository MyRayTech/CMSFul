/* 
 *
 */
import config from '../api/config';

import * as types from './mutation_types'

export function LOAD_CONFIG ({ commit }) {
        config.fetch().then((response) => {
        commit(types.SET_CONFIG, { list: response.data })
      }, (err) => {
        console.error(err + 'Could not fetch config');
      })
}
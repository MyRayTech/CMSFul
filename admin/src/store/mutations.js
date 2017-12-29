/* 
 * Mutations
 */

export function SET_CONFIG (state, {list}) {
    state.config = list;
}

export function SET_USER_PROFILE (state, { profile } ) {
    state.user = profile;
}

export function SET_TOKEN(state, {token}) {
    state.token = token;
}
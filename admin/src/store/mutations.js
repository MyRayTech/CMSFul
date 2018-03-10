/* 
 * Mutations
 */

export function SET_CONFIG (state, {list}) {
    state.config = list;
}

export function SET_PROJECTS (state, {projects}) {
    state.projects = projects;
}

export function SET_PAGES (state, {pages}) {
    state.pages = pages;
}

export function SET_POSTS (state, {posts}) {
    state.posts = posts;
}

export function SET_GALLERY (state, {gallery}) {
    state.gallery = gallery;
}

export function SET_ARTICLES (state, {articles}) {
    state.articles = articles;
}

export function SET_USER_PROFILE (state, { profile } ) {
    state.user = profile;
}

export function SET_TOKEN(state, {token}) {
    state.token = 'Bearer ' + token;
}
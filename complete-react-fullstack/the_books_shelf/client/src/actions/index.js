import http from '../services/http';

export function getBooks(
  limit = 10,
  start = 0,
  order = 'asc',
  list = null
) {
  const request = http.get(`/books?offset=${start}&limit=${limit}&order=${order}`)
    .then(response => list ? list.concat(response.data) : response.data);
    // .then(response => {
    //   if (list) {
    //     return [ ...list, ...response.data];
    //   }
    //   return response.data
    // });
  
  return {
    type: 'GET_BOOKS',
    payload: request
  }

}

// Aqui irei usar o método to thunk
export function getBookWithReviewer(id) {
  const request = http.get(`/books/${id}`);

  return (dispatch) => {
    request.then(({data}) => {
      let book = data;

      http.get(`/users/${book.ownerId}`)
        .then(({data}) => {
          let payload = {
            book,
            reviewer: data
          }

          dispatch({
            type: 'GET_BOOK_WITH_REVIEWER',
            payload
          })
        })
    });
  }
}

export function clearBookWithReviewer() {
  return {
    type: 'CLEAR_BOOK_WITH_REVIEWER',
    payload: {
      book: null,
      reviewer: null
    }
  }
}

export function userLogin({login, password}) {
  const request = http.post('/login', {login, password})
    .then(response => response.data);

  return {
    type: 'USER_LOGIN',
    payload: request
  }
}

// export function auth() {
//   const request = http.get('/users/auth')
//     .then(response => response.data);

//   return {
//     type: 'AUTH',
//     payload: request
//   }
// }

export function auth() {
  let request = false;

  if (localStorage.getItem('token')) {
    request = http.get('/users/auth')
      .then(response => response.data);
  }
  return {
    type: 'AUTH',
    payload: request
  }
}

export function 
addBook(book) {
  const request = http.post('/books', book)
    .then(response => response.data);

  return {
    type: 'ADD_BOOK',
    payload: request
  }
}

export function clearNewbook() {
  return {
    type: 'CLEAR_NEWBOOK',
    payload: null
  }
}

export function getUserPosts(userId) {
  const request = http.get(`/books?user_id=${userId}`)
    .then(request => request.data);

  return {
    type: 'GET_USER_POSTS',
    payload: request
  }
}

export function getBook(id) {
  const request = http.get(`/books/${id}`)
    .then(response => response.data);

  return {
    type: 'GET_BOOK',
    payload: request
  }
}

export function updateBook(book) {
  const request = http.put(`/books/${book.id}`, book)
    .then(response => response.data);

  return {
    type: 'UPDATE_BOOK',
    payload: request
  }
}

export function deletePost(id) {
  const request = http.delete(`/books/${id}`)
    .then(response => response.data);
  
  return {
    type: 'DELETE_BOOK',
    payload: request
  }
}

export function clearBook() {
  return {
    type: 'CLEAR_BOOK',
    payload: {
      book: null,
      updateBook: null,
      deletedBook: null
    }
  }
}

export function getUsers() {
  const request = http.get('/users')
    .then(response => response.data);

  return {
    type: 'GET_USERS',
    payload: request
  }
}

export function registerUser(user, currentUserList) {
  const request = http.post('/users', user);

  return (dispatch) => {
    request.then(response => {
      let users = response.data.success ? [response.data.user, ...currentUserList] : currentUserList;
      let payload = {
        success: response.data.success,
        users
      }

      dispatch({
        type: 'REGISTER_USER',
        payload: payload
      })
    })
  }
}

export function clearRegisterUser() {
  return {
    type: 'CLEAR_REGISTER_USER',
    payload: {
      success: null,
      users: null
    }
  }
}
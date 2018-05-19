export default function(state = {}, action) {
  switch (action.type) {
    case 'USER_LOGIN':
      return { ...state, login: action.payload }
    case 'AUTH':
      return { ...state, login: action.payload }
    case 'GET_USER_POSTS':
      return { ...state, usersPosts: action.payload }
    case 'GET_USERS':
      return { ...state, users: action.payload }
    case 'REGISTER_USER':
      return { ...state, 
        success: action.payload.success,
        users: action.payload.users
       }
    case 'CLEAR_REGISTER_USER':
      return { ...state, 
        success: action.payload.success,
        users: action.payload.users
       }
    default:
      return state;
  }
}
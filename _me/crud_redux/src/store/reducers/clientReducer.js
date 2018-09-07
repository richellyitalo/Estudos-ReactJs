import { ADD_CLIENT, FETCH_CLIENTS, SET_CLIENT } from '../types'

const initialState = {
  clients: [],
  pagination: {},
  client: {},
  isLoading: false
}

export default (state = initialState, action) => {
  switch (action.type) {
    case ADD_CLIENT:
      return {
        ...state,
        clients: [action.payload, ...state.clients]
      }
    case FETCH_CLIENTS:
      const { data: clients, ...pagination } = action.payload

      return {
        ...state,
        clients,
        pagination
      }
    case SET_CLIENT:
      return {
        ...state,
        client: action.payload
      }
    default:
      return state
  }
}

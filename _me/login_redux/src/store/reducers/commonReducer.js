import { SET_LOADING } from '../types'

const initialState = {
  isLoading: false
}

export default (state = initialState, { type, payload }) => {
  switch (type) {
    case SET_LOADING:
      return {
        ...state,
        isLoading: payload
      }
    default:
      return state
  }
}

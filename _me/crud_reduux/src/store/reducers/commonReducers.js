import { FETCH_STATES, FETCH_CITIES, SET_ALERT, CLEAR_ALERT } from '../types'

const initialState = {
  states: [],
  cities: [],
  alert: {
    type: 'info',
    message: ''
  }
}

export default (state = initialState, action) => {
  switch (action.type) {
    case FETCH_STATES:
      return {
        ...state,
        states: action.payload
      }
    case FETCH_CITIES:
      return {
        ...state,
       cities: action.payload
      }
    case SET_ALERT:
      return {
        ...state,
       alert: {...action.payload}
      }
    case CLEAR_ALERT:
      return {
        ...state,
       alert: {
         ...state.alert,
         message: action.payload
       }
      }
    default:
      return state
  }
}

import {
  FETCH_STATES,
  FETCH_CITIES,
  SET_ALERT,
  CLEAR_ALERT,
  SET_LOADING,
  SET_ERRORS
} from '../types'

const initialState = {
  states: [],
  cities: [],
  isLoading: true,
  errors: [],
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
        alert: { ...action.payload }
      }
    case SET_LOADING:
      return {
        ...state,
        isLoading: action.payload
      }
    case SET_ERRORS:
      return {
        ...state,
        errors: action.payload
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

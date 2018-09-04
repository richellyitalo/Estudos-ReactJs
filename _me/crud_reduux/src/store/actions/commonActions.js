import commonServices from '../../services/commonService'
import {
  FETCH_STATES,
  FETCH_CITIES,
  SET_ALERT,
  CLEAR_ALERT,
  SET_LOADING,
  SET_ERRORS
} from '../types'

export const fetchStates = () => dispatch => {
  commonServices.getStates().then(res => {
    dispatch({
      type: FETCH_STATES,
      payload: res
    })
  })
}

export const fetchCities = stateID => dispatch => {
  commonServices.getCities(stateID).then(res => {
    dispatch({
      type: FETCH_CITIES,
      payload: res
    })
  })
}

export const setAlert = (message, type = 'info') => ({
  type: SET_ALERT,
  payload: {
    type,
    message
  }
})

export const clearAlert = () => ({
  type: CLEAR_ALERT,
  payload: ''
})

export const setLoading = (status = true) => ({
  type: SET_LOADING,
  payload: status
})

export const setErrors = (errors = []) => ({
  type: SET_ERRORS,
  payload: errors
})
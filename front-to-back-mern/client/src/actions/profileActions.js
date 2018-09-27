import axios from 'axios'

// Types
import { GET_PROFILE, PROFILE_LOADING, CLEAR_CURRENT_PROFILE, GET_ERRORS } from './types';

export const getCurrentProfile = () => dispatch => {
  dispatch(setProfileLoading());
  // GET profile do usuario
  axios
    .get('/api/profile')
    .then(res => {
      dispatch({
        type: GET_PROFILE,
        payload: res.data
      })
    })
    // Se não encontrou define como vazio
    .catch(err => dispatch({
      type: GET_PROFILE,
      payload: {}
    }))
}

export const createProfile = (profileData, history) => dispatch => {
  axios
    .post('/api/profile', profileData)
    .then(res => history.push('/dashboard'))
    .catch(err => dispatch({
      type: GET_ERRORS,
      payload: err.response.data
    }))
}

// set profile loading
export const setProfileLoading = () => {
  return {
    type: PROFILE_LOADING
  }
}

// clear profile da sessão
export const clearCurrentProfile = () => {
  return {
    type: CLEAR_CURRENT_PROFILE
  }
}
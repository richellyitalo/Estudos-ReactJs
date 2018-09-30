import axios from 'axios'

// Types
import {
  GET_PROFILE,
  PROFILE_LOADING,
  CLEAR_CURRENT_PROFILE,
  GET_ERRORS,
  SET_CURRENT_USER
} from './types'

export const getCurrentProfile = () => dispatch => {
  dispatch(setProfileLoading())
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
    .catch(err =>
      dispatch({
        type: GET_PROFILE,
        payload: {}
      })
    )
}

export const deleteAccount = () => dispatch => {
  axios
    .delete('/api/profile')
    .then(res =>
      dispatch({
        type: SET_CURRENT_USER,
        payload: {}
      })
    )
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    )
}

export const addExperience = (experienceData, history) => dispatch => {
    axios
      .post('/api/profile/experience', experienceData)
      .then(res => history.push('/dashboard'))
      .catch(err => dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      }))

}

export const addEducation = (experienceData, history) => dispatch => {
    axios
      .post('/api/profile/education', experienceData)
      .then(res => history.push('/dashboard'))
      .catch(err => dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      }))
}

export const deleteExperience = id => dispatch => {
  axios
    .delete(`/api/profile/experience/${id}`)
    .then(res =>
      dispatch({
        type: GET_PROFILE,
        payload: res.data
      })
    )
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    )
}

export const deleteEducation = id => dispatch => {
  axios
    .delete(`/api/profile/education/${id}`)
    .then(res =>
      dispatch({
        type: GET_PROFILE,
        payload: res.data
      })
    )
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    )
}

export const createProfile = (profileData, history) => dispatch => {
  axios
    .post('/api/profile', profileData)
    .then(res => history.push('/dashboard'))
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    )
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

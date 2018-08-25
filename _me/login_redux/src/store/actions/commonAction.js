import { SET_LOADING } from '../types'

export const setLoading = status => {
  return {
    type: SET_LOADING,
    payload: status
  }
}

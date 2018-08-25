import { setLoading } from './commonAction'
import { SET_USER } from '../types'

export const loginUser = userData => dispatch => {
  dispatch(setLoading(true))

  setTimeout(() => {
    dispatch({
      type: SET_USER,
      payload: userData
    })

    dispatch(setLoading(false))
  }, 3000)
}

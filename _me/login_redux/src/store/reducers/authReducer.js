import { isEmpty } from '../../helpers'
import { SET_USER } from '../types'

const initialState = {
  isAuthenticated: false
}

export default (state = initialState, action) => {
  switch (action.type) {
    case SET_USER:
      console.log('Setou usuário')
      
      return {
        ...state,
        isAuthenticated: !isEmpty(action.payload)
      }
    default:
      return state
  }
}
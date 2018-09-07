import { combineReducers } from 'redux'

import clientReducer from './clientReducer'
import commonReducers from './commonReducers';

export default combineReducers({
  client: clientReducer,
  commons: commonReducers
})

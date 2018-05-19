import { combineReducers } from 'redux';

import users from './users_reducer';
import books from './books_reducer';

const rootReducer = combineReducers({
  users,
  books
});

export default rootReducer;

import { createStore, applyMiddleware, compose } from "redux"
import thunk from "redux-thunk"

// Reducers
import rootReducers from "./reducers"

// State
const initialState = {}

const middlewares = [thunk]

const store = createStore(
  rootReducers,
  initialState,
  compose(
    applyMiddleware(...middlewares),
    window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__()
  )
)

export default store

## Store -> Reducers
----
## Pré-requisitos
Instalar os pacotes:  
`npm i react react-redux redux-thunk`

## *App.js*
```js
import { Provider } from 'react-redux';
import store from './store';
// ...
return (
  <Provider store={ store }>
    <h1>App</h1>
  </Provider>
)
```

## */store.js*
```js
import { createStore, applyMiddleware, compose } from 'redux';
import thunk from 'redux-thunk';

const initialState = {};

const middlewares = [thunk];

// createStore(reducer, initialState, compose(middlewares, DEBUG_EXTENSION));
const store = createStore(
  rootReducer,
  initialState,
  compose(
    applyMiddleware(...middlewares),
    window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__()
  )
);

export default store;
```

## */reducers/index.js*
```js
import { combineReducers } from 'redux';

import authReducer from './authReducer';

const reducers = combineReducers({
  auth: authReducer
});

export default reducers;
```

## */reducers/authReducer.js*
```js
const initialState = {
  isAuthenticated: false,
  user: {}
};

export default (state = initialState, action) => {
  switch (action.type) {
    /*
    case SET_USER:
      return {
        ...state,
        user: action.payload
      }
    */
    default:
      return state;
  }
}
```

## Actions
----
## *actions/authActions.js*
Primeira ação  
```js
import { SET_USER } from './types.js';

export const registerUser = userData => {
  return {
    type: SET_USER,
    payload: userData
  }
};
```

## *actions/types.js*
```js
export const SET_USER = 'SET_USER';
```

## *components/auth/Register.js*
Conectando a ação ao componente
```js
// Importaação para o componente
import { registerUser } from '../../actions/authActions';

// conecta ele ao componente
import { connect } from 'react-redux'

// ...

// connect(mapStateToProps, { action_1: action_1 })
export default connect(null, { registerUser })(Register);
// registerUser agora está disponível em this.props.registerUser
```

## Importando os states '*components/auth/Register.js*'
```js
// ...

const mapStateToProps = state => ({
  // (ex: this.props.TAG_EM_PROPS)
  // TAG_EM_PROPS: STATE.REDUCER
  auth: state.auth
});

// agora 'auth' disponível em this.props.auth <-- isAuthenticated, users (do Reducer)

export default connect(mapStateToProps, { registerUser })(Register);
```

## Definindo propTypes '*components/auth/Register.js*'
```js
import PropTypes from 'prop-types';
// ...
Register.propTypes = {
  registerUser: PropTypes.func.isRequired,
  auth: PropTypes.object.isRequired
};
// ...
```
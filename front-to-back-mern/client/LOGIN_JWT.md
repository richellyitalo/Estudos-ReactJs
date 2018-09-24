## Resumo
* Requisitar token (Login)
* Recebe o token e salva no localStorage
* Define o header do axios `axios.defaults.headers.common['Authorization'] = token`
* Decodifica token e define o usuário atual

## Pré-requisitos
`npm install jwt-decode`

## *actions/authActions.js*
Requisitando token
```js
// ...
export const loginUser = userData => dispatch => {
  axios
    .post('/api/users/login', userData)
    .then(res => {
      // Recebe o Token
      const { token } = res.data;
      // Salva no localStorage
      localStorage.setItem('jwtToken', token);
      // Define o header do axios
      setAuthToken(token)
      // Decodifica o token para definir os dados do usuário
      const decoded = jwt_decode(token);
      // Define os dados do usuário
      dispatch(setCurrentUser(decoded));
    })
    .catch(err => 
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    );
}

export const setCurrentUser = userData => {
  return {
    type: SET_CURRENT_USER,
    payload: userData
  }
}
```

## *utils/setAuthToken.js*
Define o header com o **Authorization = token**
```js
import axios from 'axios';

const setAuthToken = token => {
  if (token) {
    axios.defaults.headers.common['Authorization'] = token;
  } else {
    delete axios.defaults.headers.common['Authorization'];
  }
}

export default setAuthToken;
```

## *reducers/authReducer.js*
Define se o usuário está autenticado e seus dados
```js
import isEmpty from '../validation/is-empty';
// ...
switch (action.type) {
  case SET_CURRENT_USER:
    return {
      ...state,
      isAuthenticated: !isEmpty(action.payload),
      user: action.payload
    }
  default:
    return state;
}
```

## *validation/is-empty.js*
```js
const isEmpty = value =>
  value === undefined ||
  value === null ||
  (typeof value === 'object' && Object.keys(value).length === 0) ||
  (typeof value === 'string' && value.trim().length === 0);

export default isEmpty;
```


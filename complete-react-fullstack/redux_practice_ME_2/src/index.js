import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter } from 'react-router-dom';
import Routes from './routes'

import { Provider } from 'react-redux';
import { createStore, applyMiddleware } from 'redux';
// import promiseThunk from 'redux-thunk';
import promiseMiddleware from 'redux-promise';

import reducers from './reducers';

const store = createStore(reducers, /* preloadedState, */
    window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__(),
    applyMiddleware(promiseMiddleware)
);

// Multiplos middlewares
// let mid = [promiseThunk, promiseMiddleware];
// const store = applyMiddleware(...mid)(createStore)(reducers);

const App = () => {
    return(
        <Provider store={store}>
            <BrowserRouter>
                <Routes/>
            </BrowserRouter>
        </Provider>
    )
}

ReactDOM.render(<App />, document.getElementById('root'));


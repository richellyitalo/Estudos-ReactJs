import React from 'react'
import { Provider } from 'react-redux'

import './App.css'

import Routes from './Routes'
import store from './store'

const App = () => (
  <Provider store={store}>
    <Routes />
  </Provider>
)

export default App

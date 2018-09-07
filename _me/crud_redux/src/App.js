import React from 'react'
import { Provider } from 'react-redux'
import { library } from '@fortawesome/fontawesome-svg-core';
import { faSpinner } from '@fortawesome/free-solid-svg-icons';

import './App.css'

import Routes from './Routes'
import store from './store'
import { setLoading } from './store/actions/commonActions'

library.add(faSpinner);

// const App = () => (
//   <Provider store={store}>
//     <Routes />
//   </Provider>
// )

class App extends React.Component {
  componentDidMount() {
    store.dispatch(setLoading(false))
  }

  render() {
    return (
      <Provider store={store}>
        <Routes />
      </Provider>
    )
  }
}

export default App

import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter } from 'react-router-dom';
import Routes from './routes';

// import FontAwesomeIcon from '@fortawesome/react-fontawesome'
// import bars from '@fortawesome/fontawesome-free-solid/faBars'

const App = () => (
  <BrowserRouter>
    <Routes />
  </BrowserRouter>
)

ReactDOM.render(<App />, document.getElementById('root'));
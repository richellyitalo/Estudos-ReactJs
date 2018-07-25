import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import api from './api'
import registerServiceWorker from './registerServiceWorker';

ReactDOM.render(
  <App api={api} />,
  document.getElementById('root')
);
registerServiceWorker();

import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import registerServiceWorker from './registerServiceWorker';
import 'bootstrap/scss/_utilities.scss'
import $ from 'jquery'
import 'bootstrap/dist/css/bootstrap.min.css'

window.jQuery = $
require('bootstrap/dist/js/bootstrap.bundle.min')

ReactDOM.render(<App />, document.getElementById('root'));
registerServiceWorker();

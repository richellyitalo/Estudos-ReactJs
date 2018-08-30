import React from 'react';
import ReactDOM from 'react-dom';
import registerServiceWorker from './registerServiceWorker';
import 'bootstrap/scss/_utilities.scss'
import $ from 'jquery'
import 'bootstrap/dist/css/bootstrap.min.css'

import App from './App';

window.jQuery = $
require('bootstrap/dist/js/bootstrap.bundle.min')

ReactDOM.render(<App />, document.getElementById('root'));
registerServiceWorker();

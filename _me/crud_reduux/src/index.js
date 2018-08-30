import React from 'react'
import ReactDOM from 'react-dom'
import App from './App'
import registerServiceWorker from './registerServiceWorker'
import $ from 'jquery'
import 'bootstrap/scss/_utilities.scss'
import 'bootstrap/dist/css/bootstrap.min.css'

// Bootstrap start
window.jQuery = $
require('bootstrap/dist/js/bootstrap.bundle.min')

ReactDOM.render(<App />, document.getElementById('root'))
registerServiceWorker()

import React from 'react'
import ReactDOM from 'react-dom'
// import 'antd/dist/antd.min.css'
import 'bootstrap/scss/_utilities.scss'

// A - IMPLEMENTAÇÃO DO JQUERY + BOOTSTRAP
// import $ from 'jquery'
// import 'bootstrap/dist/css/bootstrap.min.css'

import App from './App'
import registerServiceWorker from './registerServiceWorker'

// A - IMPLEMENTAÇÃO DO JQUERY + BOOTSTRAP
// window.jQuery = $
// require('bootstrap/dist/js/bootstrap.bundle.min')

ReactDOM.render(<App />, document.getElementById('root'))
registerServiceWorker()

import React from 'react'

import loadingImage from './loading.gif'

export default () => (
  <div style={style}>
    {/* ou pode ser usado com 'require()' */}
    {/* <img src={require('./loading.gif')} /> */}
    <img src={loadingImage} alt="" />
  </div>
)

const style = {
  position: 'fixed',
  top: 0,
  right: 0,
  width: '180px',
  textAlign: 'center',
  padding: '10px',
  borderRadius: '2px'
}

import React from 'react'

const Auth = (props) => {

  const pass = '1234'

  if (pass === '123') {
    return props.children
  } else {
    return <h1>Você não está autenticado</h1>
  }
}

export default Auth
import React from 'react'

const Conditional = () => {
  const idade = 30
  const valorVerdade = false

  const mostrarContainer = () => {
    return (
      valorVerdade ? 
      <div>
        <h1>Estamos dentro de um container VERDADEIRO</h1>
      </div>
      : <h1>Estamos num container NÃO verdadeiro</h1>
    )
  }

  return (
    <div>
      { mostrarContainer() }
      { idade === 30 ? 'trinta' : 'nao sei' }
      { idade === 30 ?
        <h3>Ele tem trinta</h3>
        :
        <h4>Ele não tem trina</h4>
      }
    </div>
  )
}

export default Conditional
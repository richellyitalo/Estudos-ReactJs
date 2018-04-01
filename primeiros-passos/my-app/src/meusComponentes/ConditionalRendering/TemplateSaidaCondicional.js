import React, { Component } from 'react'

class Banner extends Component {

  constructor (props) {
    super(props)
  }
  
  componentDidMount () {
    console.log('compontent_DID_mount')
  }
  
  componentWillMount () {
    console.log('compontent_WILL_mount')
  }

  render () {
    if (!this.props.texto) {
      return null
    }
  
    const elementoPraNaoEsquecer = <h1>Olá amigo {this.props.texto}</h1>
    return (
      <div>
        <h1>Aqui está o texto my friend: {this.props.texto}</h1>
        {elementoPraNaoEsquecer}
      </div>
    )
  }
}

class TemplateSaidaCondicional extends Component {

  constructor (props) {
    super(props)

    this.state = {mostrarBanner: 'Zezão da pamonha'}

    this.toggleBanner = this.toggleBanner.bind(this)
  }

  toggleBanner () {
    this.setState(prevState => ({
      mostrarBanner: prevState.mostrarBanner ? false: 'Zézão'
    }))
  }

  render () {
    return (
      <div>
        <Banner texto={this.state.mostrarBanner} />
        <button onClick={this.toggleBanner}>Alternar banner</button>
      </div>
    )
  }
}

export default TemplateSaidaCondicional
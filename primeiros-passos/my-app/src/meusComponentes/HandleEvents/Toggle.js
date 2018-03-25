import React, { Component } from 'react'

class Toggle extends Component {
  constructor(props) {
    super(props)
    this.state = {isToggleOn: false, numero: 3}

    // this.handleClick = this.handleClick.bind(this)
  }

  handleClick() {
    console.log(this)
    this.setState(prevState => ({
      isToggleOn: !prevState.isToggleOn
    }))
  }

  mudarNumero(event, numero) {
    event.preventDefault()
    alert(numero)
    this.setState({numero: numero})
  }

  render() {
    return (
      <div>
        {/* Alternativa ao uso do bind no constructor para a função chamada
        NÃO RECOMENDADO
        <button onClick={(e) => this.handleClick(e)}>
          {this.state.isToggleOn ? 'ON' : 'OFF'}
        </button> */}

        <button onClick={this.handleClick.bind(this)}>
          {this.state.isToggleOn ? 'ON' : 'OFF'}
        </button>
        <h2>O número é {this.state.numero}</h2>
        <a href="/" onClick={(e) => this.mudarNumero(e, 5)}>Mudar número</a>
      </div>
    )
  }
}

export default Toggle
import React, { Component } from 'react'

class Toggle extends Component {
  constructor(props) {
    super(props)
    this.state = {isToggleOn: false, numero: 3, parametro: 'Nenhum'}

    // this.handleClickParam = this.handleClickParam.bind(this)

    // this.handleClick = this.handleClick.bind(this)
  }

  handleClick() {
    this.setState(prevState => ({
      isToggleOn: !prevState.isToggleOn
    }))
  }

  handleClickThis() {
    console.log('This is: ', this)
    this.setState(prevState => ({
      isToggleOn: !prevState.isToggleOn
    }))
  }

  handleClickParam(param, event) {
    this.setState({
      parametro: param
    })
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
        <p>
          <button onClick={(e) => this.handleClickThis(e)}>
          Button click this
          </button>
        </p>
        <form>
          <button type="submit" onClick={this.handleClickParam.bind(this, 'Jizâs')}>
            Clique com parâmetro
          </button>
        </form>
        <h3>{this.state.parametro}</h3>

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
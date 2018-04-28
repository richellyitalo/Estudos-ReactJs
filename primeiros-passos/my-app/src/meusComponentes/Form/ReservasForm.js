import React, { Component } from 'react'

class ReservasForm extends Component {
  
  constructor(props) {
    super(props)

    this.state = {
      estaIndo: true,
      numerosDeConvidados: 0
    }

    this.handleChangeInput = this.handleChangeInput.bind(this)
    this.handleSubmit = this.handleSubmit.bind(this)
  }

  handleChangeInput(event) {
    const target = event.target
    const value = target.type === 'checkbox' ? target.checked : target.value
    const name = target.name
    // método #1
    // this.setState({
    //   [name]: value
    // })

    // metodo #2
    const newValue = {}
    newValue[name] = value
    this.setState(newValue)
  }

  handleSubmit(event) {
    const deIda = this.state.estaIndo ? 'SIM' : 'NAO';
    alert('Está de ida: ' + deIda + ' um total: ' + this.state.numerosDeConvidados)

    event.preventDefault()
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <h3>Multiplos inputs</h3>
        <label>
          Está de ida?
          <input
          type="checkbox"
          name="estaIndo"
          checked={this.state.estaIndo}
          onChange={this.handleChangeInput} />
        </label>
        <h5>Número de convidados</h5>
        <label>
          <input
          name="numerosDeConvidados"
          type="text"
          value={this.state.numerosDeConvidados}
          onChange={this.handleChangeInput} />
          <input type="submit" value="Enviar" />
        </label>
      </form>
    )
  }
}

export default ReservasForm

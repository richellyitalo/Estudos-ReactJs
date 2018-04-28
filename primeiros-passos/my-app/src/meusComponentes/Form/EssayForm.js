import React, { Component } from 'react'

class EssayForm extends Component {
  constructor(props) {
    super(props)
    this.state = {
      value: 'Por favor, digite algo aqui'
    }

    this.handleChange = this.handleChange.bind(this)
    this.handleSubmit = this.handleSubmit.bind(this)
  }

  handleChange(event) {
    this.setState({value: event.target.value})
  }

  handleSubmit(event) {
    alert('Formulário enviado com o texto ' + this.state.value)
    event.preventDefault()
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <br/>
        <label>
          Comentário:
          <textarea value={this.state.value} onChange={this.handleChange} />
        </label>
        <input type="submit" value="Enviar Comentário"/>
      </form>
    )
  }
}

export default EssayForm

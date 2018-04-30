import React, { Component } from 'react'

function FancyBorder(props) {
  return (
    <div className={'FancyBorder FancyBorder-' + props.color}>
      {props.children}
    </div>
  )
}

function Dialog(props) {
  return (
    <FancyBorder color="yellow">
      <h1 className="Dialog-title">
        {props.title}
      </h1>
      <p className="Dialog-message">
        {props.message}
      </p>
      {props.children}
    </FancyBorder>
  )
}

class WelcomeDialog extends Component {
  constructor(props) {
    super(props)

    this.state = {
      login: ''
    }

    this.handleChange = this.handleChange.bind(this)
    this.handleSignup = this.handleSignup.bind(this)
  }

  handleChange(event) {
    this.setState({login: event.target.value})
  }

  handleSignup(event) {
    alert(`Bem vindo a composição e herança de componentes! + ${this.state.login}`)
  }

  render() {
    return (
      <Dialog
      title="Bem Vindo"
      message="Olá, sem bem vindo a minha forma de estudar!" >
        <input value={this.state.login}
          onChange={this.handleChange} />

        <button onClick={this.handleSignup}>
          Cadastrar!
        </button>
      </Dialog>
    )
  }
}

export default WelcomeDialog
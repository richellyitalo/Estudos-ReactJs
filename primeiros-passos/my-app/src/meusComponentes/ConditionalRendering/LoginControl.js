import React, { Component } from 'react'
import Greeting from './Greeting';

function LoginButton (props) {
  return (
    <button onClick={props.onClick}>
      Login
    </button>
  )
}

function LogoutButton (props) {
  return (
    <button onClick={props.onClick}>
      Deslogar
    </button>
  )
}

class LoginControl extends Component {

  constructor(props) {
    super(props)

    this.state = {
      isLoggedIn: true
    }
    
    this.handleLoginClick = this.handleLoginClick.bind(this)
    this.handleLogoutClick = this.handleLogoutClick.bind(this)
  }

  handleLoginClick () {
    this.setState({isLoggedIn: true})
  }

  handleLogoutClick () {
    this.setState({isLoggedIn: false})
  }

  render () {
    const isLoggedIn = this.state.isLoggedIn

    const button = isLoggedIn ?
      <LogoutButton onClick={this.handleLogoutClick} /> :
      <LoginButton onClick={this.handleLoginClick} />
    
    return (
      <div>
        <Greeting isLoggedIn={isLoggedIn} />
        {button}
      </div>
    )
  }
}

export default LoginControl

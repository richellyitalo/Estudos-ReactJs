import React, { Component } from 'react';
import { connect } from 'react-redux';

import { userLogin } from '../../actions';

class Login extends Component {

  state = {
    error: '',
    login: 'admin@admin.com',
    password: 'admin',
    success: false
  }

  submitForm = (event) => {
    event.preventDefault();

    this.props.dispatch(userLogin(this.state));
  }

  handleInputLogin = (event) => {
    this.setState({
      login: event.target.value
    })
  }

  handleInputPassword(event) {
    this.setState({
      password: event.target.value
    })
  }

  componentWillReceiveProps(nextProps) {
    let login = nextProps.users.login;
    if (login.success) {
      localStorage.setItem('token', login.token);
      this.props.history.push('/user');
    }
  }

  render () {
    let user = this.props.users;

    return (
      <div className="rl_container">
        <form onSubmit={this.submitForm}>
          <h2>Área de Login</h2>

          <div className="form_element">
            <input
              type="text"
              placeholder="Informe seu login"
              onChange={this.handleInputLogin}
              value={this.state.login}
            />
          </div>

          <div className="form_element">
            <input
              type="password"
              placeholder="Informe sua Senha"
              onChange={(e) => this.handleInputPassword(e)}
              // onChange={this.handleInputPassword.bind(this)}
              value={this.state.password}
            />
          </div>

          <button type="submit">Logar</button>

          <div className="error">
            {
              user.login
              ? user.login.message
              : null
            }
          </div>
        </form>
      </div>
    )
  }
}

function mapStateToProps(state) {
  return {
    users: state.users
  }
}

export default connect(mapStateToProps)(Login);
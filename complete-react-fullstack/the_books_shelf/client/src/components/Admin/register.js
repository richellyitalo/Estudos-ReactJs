import React, { Component } from 'react';
import { connect } from 'react-redux';
import {name as fakerName, random, internet} from 'faker/locale/pt_BR';

import { getUsers, registerUser, clearRegisterUser } from '../../actions';

class RegisterBook extends Component {

  constructor(props) {
    super(props);

    this.state = {
      formdata: {
        name: fakerName.firstName(),
        email: internet.email(),
        password: random.number()
      },
      error: ''
    }

    props.dispatch(getUsers());
  }

  showUsers = (users) => (
    users.users
    ? users.users.map((item, i) => (
      <tr key={i}>
        <td>{item.name}</td>
        <td>{item.email}</td>
      </tr>
    ))
    : null
  )

  handleInputName = (event) => {
    this.setState({
      formdata: {
        ...this.state.formdata,
        name: event.target.value
      }
    });
  }

  handleInputEmail = (event) => {
    this.setState({
      formdata: {
        ...this.state.formdata,
        email: event.target.value
      }
    });
  }

  handleInputPassword = (event) => {
    this.setState({
      formdata: {
        ...this.state.formdata,
        password: event.target.value
      }
    });
  }

  submit = (event) => {
    event.preventDefault();

    this.props.dispatch(registerUser(this.state.formdata, this.props.users.users));
  }

  componentWillReceiveProps(nextProps) {
    if (nextProps.users.success === false) {
      this.setState({
        error: 'Erro ao cadastrar, tente novamente.'
      });
    }

    if (nextProps.users.success === true) {
      this.setState({
        formdata: {
          name: '',
          email: '',
          password: ''
        },
        error: ''
      });
    }
  }

  componentWillMount() {
    this.props.dispatch(clearRegisterUser());
  }

  render () {
    let users = this.props.users;

    return (
      <div className="rl_container">
        <form onSubmit={this.submit}>
          <h2>Adicionar Novo Usuário</h2>
          <div className="form_element">
            <input
              type="text"
              placeholder="Nome"
              value={this.state.formdata.name}
              onChange={this.handleInputName}
            />
          </div>
          <div className="form_element">
            <input
              type="email"
              placeholder="Email"
              value={this.state.formdata.email}
              onChange={this.handleInputEmail}
            />
          </div>
          <div className="form_element">
            <input
              type="password"
              placeholder="Senha"
              value={this.state.formdata.password}
              onChange={this.handleInputPassword} 
            />
          </div>
          <div className="error">
          {this.state.error}
          </div>
          <button type="submit">Cadastrar </button>
        </form>
        <hr/>
        <div className="current_users">
          <table>
            <thead>
              <tr>
                <th>Nome</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              {this.showUsers(users)}
            </tbody>
          </table>
        </div>
      </div>
    )
  }
}

function mapStateToProps(state) {
  return {
    users: state.users
  }
}

export default connect(mapStateToProps)(RegisterBook)
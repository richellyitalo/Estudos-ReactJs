import React, { Component } from 'react'
import PropTypes from 'prop-types'
import classnames from 'classnames'
import { connect } from 'react-redux'
import { withRouter } from 'react-router-dom'

// Carregando actions
import { registerUser } from '../../actions/authActions'

// Componentes
import TextFieldGroup from '../common/TextFieldGroup'

class Register extends Component {
  state = {
    name: '',
    email: '',
    password: '',
    password2: '',
    errors: {}
  }

  componentDidMount() {
    if (this.props.auth.isAuthenticated) {
      this.props.history.push('/dashboard')
    }
  }

  componentWillReceiveProps(nextProps) {
    if (nextProps.errors) {
      this.setState({ errors: nextProps.errors })
    }
  }

  onChange = e => {
    this.setState({ [e.target.name]: e.target.value })
  }

  onSubmit = e => {
    e.preventDefault()

    const newUser = {
      name: this.state.name,
      email: this.state.email,
      password: this.state.password,
      password2: this.state.password2
    }

    this.props.registerUser(newUser, this.props.history)
  }

  render() {
    const { errors } = this.state
    return (
      <div className="register">
        <div className="container">
          <div className="row">
            <div className="col-md-8 m-auto">
              <h1 className="display-4 text-center">Inscrição</h1>
              <p className="lead text-center">Crie sua conta</p>
              <form onSubmit={this.onSubmit} noValidate autoComplete="off">
                <TextFieldGroup
                  type="text"
                  placeholder="Nome"
                  name="name"
                  onChange={this.onChange}
                  value={this.state.name}
                  error={errors.name}
                />
                <TextFieldGroup
                  type="email"
                  placeholder="Email"
                  name="email"
                  onChange={this.onChange}
                  value={this.state.email}
                  error={errors.email}
                  info="Este site usa o Gravatar, então se você quiser uma imagem de perfil, use um email do Gravatar"
                />
                <TextFieldGroup
                  type="text"
                  placeholder="Nome"
                  name="name"
                  onChange={this.onChange}
                  value={this.state.name}
                  error={errors.name}
                />
                <div className="form-group">
                  <input
                    type="password"
                    className={classnames('form-control form-control-lg', {
                      'is-invalid': errors.password
                    })}
                    placeholder="Senha"
                    name="password"
                    onChange={this.onChange}
                    value={this.state.password}
                  />
                  {errors.password && (
                    <div className="invalid-feedback">{errors.password}</div>
                  )}
                </div>
                <div className="form-group">
                  <input
                    type="password"
                    className={classnames('form-control form-control-lg', {
                      'is-invalid': errors.password2
                    })}
                    placeholder="Confirmação de Senha"
                    name="password2"
                    onChange={this.onChange}
                    value={this.state.password2}
                  />
                  {errors.password2 && (
                    <div className="invalid-feedback">{errors.password2}</div>
                  )}
                </div>
                <input type="submit" className="btn btn-info btn-block mt-4" />
              </form>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

Register.propTypes = {
  registerUser: PropTypes.func.isRequired,
  auth: PropTypes.object.isRequired,
  errors: PropTypes.object.isRequired
}

const mapStateToProps = state => ({
  auth: state.auth,
  errors: state.errors
})

export default connect(
  mapStateToProps,
  { registerUser }
)(withRouter(Register))

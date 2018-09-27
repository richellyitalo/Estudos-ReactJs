import React, { Component } from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'

// Actions
import { loginUser } from '../../actions/authActions'

// Components
import TextFieldGroup from '../common/TextFieldGroup'

class Login extends Component {
  state = {
    email: '',
    password: '',
    errors: {}
  }

  componentDidMount() {
    if (this.props.auth.isAuthenticated) {
      this.props.history.push('/dashboard')
    }
  }

  componentWillReceiveProps(nextProps) {
    if (nextProps.auth.isAuthenticated) {
      this.props.history.push('/dashboard')
    }
    if (nextProps.errors) {
      this.setState({ errors: nextProps.errors })
    }
  }

  onChange = e => {
    this.setState({ [e.target.name]: e.target.value })
  }

  onSubmit = e => {
    e.preventDefault()

    const userLogin = {
      email: this.state.email,
      password: this.state.password
    }

    this.props.loginUser(userLogin)
  }

  render() {
    const { errors } = this.state

    return (
      <div className="login">
        <div className="container">
          <div className="row">
            <div className="col-md-8 m-auto">
              <h1 className="display-4 text-center">Log In</h1>
              <p className="lead text-center">
                Entre na sua conta DevConnector
              </p>
              <form onSubmit={this.onSubmit} noValidate>
                <TextFieldGroup
                  type="email"
                  placeholder="Endereço de Email"
                  name="email"
                  onChange={this.onChange}
                  value={this.state.email}
                  error={errors.email}
                />
                <TextFieldGroup
                  type="password"
                  placeholder="Senha"
                  name="password"
                  onChange={this.onChange}
                  value={this.state.password}
                  error={errors.password}
                />
                <input type="submit" className="btn btn-info btn-block mt-4" />
              </form>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

Login.propTypes = {
  loginUser: PropTypes.func.isRequired,
  auth: PropTypes.object.isRequired,
  errors: PropTypes.object.isRequired
}

const mapStateToProps = state => ({
  auth: state.auth,
  errors: state.errors
})

export default connect(
  mapStateToProps,
  { loginUser }
)(Login)

import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { connect } from 'react-redux'

import { Link } from 'react-router-dom'
import { loginUser } from '../../store/actions/authAction'
import { http } from '../../helpers'

class Login extends Component {
  state = {
    email: '',
    password: ''
  }

  componentDidMount() {
    if (this.props.auth.isAuthenticated) {
      this.props.history.push('/')
    }
  }

  componentDidUpdate(prevProps) {
    if (this.props.auth.isAuthenticated) {
      this.props.history.push('/')
    }
  }

  onSubmit = e => {
    e.preventDefault()

    this.props.loginUser(this.state)
  }

  onChange = e => {
    this.setState({
      [e.target.name]: e.target.value
    })
  }

  render() {
    return (
      <div className="col-6 mx-auto">
        {JSON.stringify(this.props.auth)}
        <form className="form" onSubmit={this.onSubmit}>
          <div className="form-group">
            <input
              type="text"
              name="email"
              className="form-control"
              placeholder="E-mail"
              onChange={this.onChange}
              value={this.state.email}
            />
          </div>
          <div className="form-group">
            <input
              type="password"
              name="password"
              className="form-control"
              placeholder="Senha"
              onChange={this.onChange}
              value={this.state.password}
            />
          </div>
          <button className="btn btn-primary btn-block">
            Logar no sistema
          </button>
        </form>
      </div>
    )
  }
}

Login.propTypes = {
  auth: PropTypes.object.isRequired
}

const mapStateToProps = state => ({
  auth: state.auth
})

export default connect(
  mapStateToProps,
  { loginUser }
)(Login)

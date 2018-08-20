import React, { Component, Fragment } from 'react'
import { Form, Icon, Input, Button, Row, Col, Alert, notification } from 'antd'
import { FormValidation } from 'calidation'
import {
  BrowserRouter as Router,
  Route,
  Switch,
  Link,
  Redirect
} from 'react-router-dom'
import axios from 'axios'
import jwt_decode from 'jwt-decode'

import './App.css'

const http = axios.create({
  baseURL: 'http://localhost:8000/api/'
})

// http.interceptors.request.use(
//   function(config) {
//     // Do something before request is sent
//     return config
//   },
//   function(error) {
//     return Promise.reject(error)
//   }
// )

http.interceptors.response.use(
  function(response) {
    // Do something with response data
    return response
  },
  function(error) {
    const { response } = error
    if (response === undefined) {
      showAlert(error.message, 'error')
    } else if ((response.status == 400)) {
      showAlert(response.data.error, 'error')
    }

    return Promise.reject(error)
  }
)

const setTokenUser = token => {
  localStorage.setItem('token', token)

  http.defaults.headers.common['Authorization'] = 'Bearer ' + token
}

const token = localStorage.getItem('token')

if (token) {
  setTokenUser(token)
}

const FormItem = Form.Item

class Header extends Component {
  logout = e => {
    e.preventDefault()

    localStorage.removeItem('token')
    delete http.defaults.headers.common['Authorization']

    showAlert('Deslogado com sucesso', 'info')
    this.props.history.push('/login')
  }

  render() {
    return (
      <div>
        <Link to="/">Início</Link> | <Link to="/login">Login</Link> |{' '}
        <a href="" onClick={this.logout}>
          Logout
        </a>
      </div>
    )
  }
}

class Home extends Component {
  componentDidMount() {
    http.get('jao').then(response => {
      alert(response.data)
    })
  }

  render() {
    return (
      <div>
        <Header {...this.props} />
        <h3>Home</h3>
      </div>
    )
  }
}

class Login extends Component {
  state = {
    email: '',
    password: ''
  }

  onChange = e => {
    this.setState({ [e.target.name]: e.target.value })
  }

  componentDidMount() {
    this.setState({
      email: 'admin@admin.com',
      password: '123456'
    })
  }

  setUser = token => {
    this.setState({
      isAuthenticated: true,
      token
    })

    setTokenUser(token)
  }

  onSubmit = e => {
    if (e.isValid) {
      http
        .post('auth/login', {
          ...this.state
        })
        .then(response => {
          showAlert('Usuário autenticado', 'success')

          this.setUser(response.data.token)

          this.props.history.push('/')
        })
        .catch(({ response }) => {
          showAlert(response.data.error, 'error')
        })

      // localStorage.setItem('authenticated', true)
      // localStorage.setItem('email', this.state.email)

      // this.props.history.push('/')
    }
  }

  render() {
    const formConfig = {
      email: {
        isRequired: 'E-mail é obrigatório',
        isEmail: 'Informe um e-mail válido'
      },
      password: {
        isRequired: 'Senha é obrigatória'
      }
    }

    const titleStyle = {
      textAlign: 'center',
      marginTop: '20px'
    }

    return (
      <Row>
        <Col span="8" offset="8">
          <h2 style={titleStyle}>Login</h2>
          <Link to="/">Tentar ir a Home</Link> |{' '}
          <Link to="/creditos">Créditos</Link>
          <FormValidation onSubmit={this.onSubmit} config={formConfig}>
            {({ fields, errors, submitted }) => (
              <Fragment>
                <FormItem>
                  <Input
                    prefix={<Icon type="user" />}
                    name="email"
                    onChange={this.onChange}
                    value={this.state.email}
                    placeholder="E-mail"
                    autoComplete="off"
                  />
                  {submitted &&
                    errors.email && (
                      <Alert type="error" message={errors.email} />
                    )}
                </FormItem>
                <FormItem>
                  <Input
                    prefix={<Icon type="lock" />}
                    type="password"
                    name="password"
                    onChange={this.onChange}
                    value={this.state.password}
                    placeholder="Senha"
                    autoComplete="off"
                  />
                  {submitted &&
                    errors.password && (
                      <Alert type="error" message={errors.password} />
                    )}
                </FormItem>
                <FormItem>
                  <Button
                    type="primary"
                    htmlType="submit"
                    className="login-form-button"
                  >
                    Logar
                  </Button>{' '}
                  Ou <Link to="register">Registre-se!</Link>
                </FormItem>
              </Fragment>
            )}
          </FormValidation>
        </Col>
      </Row>
    )
  }
}

class Register extends Component {
  state = {
    name: '',
    email: '',
    password: ''
  }
  onChange = e => {
    this.setState({
      [e.target.name]: e.target.value
    })
  }

  onSubmit = e => {
    if (e.isValid) {
      http
        .post('auth/register', {
          ...this.state
        })
        .then(response => {
          showAlert('Cadastro realizado com sucesso! Agora realize login!', 'success')

          this.props.history.push('/login')
        })
        .catch(({ response }) => {
          const errors = JSON.parse(response.data.error)
          Object.entries(errors).forEach(error => {
            errors[error[0]].forEach(errorText => {
              showAlert(errorText, 'error')
            })
          })
        })

      // localStorage.setItem('authenticated', true)
      // localStorage.setItem('email', this.state.email)

      // this.props.history.push('/')
    }
  }

  render() {
    const formConfig = {
      name: {
        isRequired: 'Nome é obrigatório'
      },
      email: {
        isRequired: 'E-mail é obrigatório',
        isEmail: 'Informe um e-mail válido'
      },
      password: {
        isRequired: 'Senha é obrigatória',
        isMinLength: {
            message: 'Deve conter pelo menos 6 caracteres',
            length: 6,
        }
      },
      password_confirmation: {
        isRequired: 'Confirmação de Senha é obrigatória',
        isEqual: ({ fields }) => ({
            message: 'Deve ser igual a senha',
            value: fields.password
        })
      }
    }

    const titleStyle = {
      textAlign: 'center',
      marginTop: '20px'
    }

    const formItemStyle = {
      marginBottom: '0px'
    }

    return (
      <Row>
        <Col span="8" offset="8">
          <h2 style={titleStyle}>Registro</h2>
          <Link to="/">Tentar ir a Home</Link> |{' '}
          <Link to="/creditos">Créditos</Link>
          <FormValidation onSubmit={this.onSubmit} config={formConfig}>
            {({ fields, errors, submitted }) => (
              <Fragment>
                <FormItem style={formItemStyle}>
                  <Input
                    prefix={<Icon type="user" />}
                    name="name"
                    onChange={this.onChange}
                    value={this.state.name}
                    placeholder="Primeiro nome"
                    autoComplete="off"
                  />
                  {submitted &&
                    errors.name && <Alert type="error" message={errors.name} />}
                </FormItem>
                <FormItem style={formItemStyle}>
                  <Input
                    prefix={<Icon type="user" />}
                    name="email"
                    onChange={this.onChange}
                    value={this.state.email}
                    placeholder="E-mail"
                    autoComplete="off"
                  />
                  {submitted &&
                    errors.email && (
                      <Alert type="error" message={errors.email} />
                    )}
                </FormItem>
                <FormItem style={formItemStyle}>
                  <Input
                    prefix={<Icon type="lock" />}
                    type="password"
                    name="password"
                    onChange={this.onChange}
                    value={this.state.password}
                    placeholder="Senha"
                    autoComplete="off"
                  />
                  {submitted &&
                    errors.password && (
                      <Alert type="error" message={errors.password} />
                    )}
                </FormItem>
                <FormItem style={formItemStyle}>
                  <Input
                    prefix={<Icon type="lock" />}
                    type="password"
                    name="password_confirmation"
                    onChange={this.onChange}
                    value={this.state.password_confirmation}
                    placeholder="Confirmação de senha"
                    autoComplete="off"
                  />
                  {submitted &&
                    errors.password_confirmation && (
                      <Alert type="error" message={errors.password_confirmation} />
                    )}
                </FormItem>
                <FormItem>
                  <Button
                    type="primary"
                    htmlType="submit"
                    className="login-form-button"
                  >
                    Registrar
                  </Button>{' '}
                  Ou <Link to="login">Já possuo conta</Link>
                </FormItem>
              </Fragment>
            )}
          </FormValidation>
        </Col>
      </Row>
    )
  }
}

const Creditos = () => (
  <Fragment>
    <Row>
      <Col span="8" offset="8">
        Autor: Richelly Italo
        <br />
        Links:
        <br />
        <a href="https://twitter.com/richellyitalo" target="_blank">
          [Twitter] https://twitter.com/richellyitalo
        </a>
        <br />
        <a href="https://github.com/richellyitalo" target="_blank">
          [Github] https://github.com/richellyitalo
        </a>
        <hr />
        <Link to="/">Voltar a Home</Link>
      </Col>
    </Row>
  </Fragment>
)

const PrivateRoute = ({ component: Component, auth, ...rest }) => {
  return (
    <Route
      {...rest}
      render={props => {
        return localStorage.getItem('token') !== null ? (
          <Component {...props} />
        ) : (
          <Redirect to="/login" />
        )
      }}
    />
  )
}

const PublicRoute = ({ component: Component, allowLogged, ...rest }) => {
  return (
    <Route
      {...rest}
      render={props => {
        const isLogged = localStorage.getItem('token') !== null

        if ((isLogged && !!allowLogged) || !isLogged) {
          return <Component {...props} />
        } else {
          return <Redirect to="/" />
        }
      }}
    />
  )
}

const showAlert = (message, type) => {
  notification[type]({
    message: message,
    description: null
  })
}

class App extends Component {
  state = {
    auth: {
      isAuthenticated: false,
      token: null
    }
  }

  render() {
    return (
      <Fragment>
        <Router>
          <Switch>
            <PublicRoute
              exact
              path="/login"
              component={Login}
              allowLogged={false}
            />
            <PublicRoute
              exact
              path="/register"
              component={Register}
              allowLogged={false}
            />
            <PublicRoute exact path="/creditos" component={Creditos} />
            <PrivateRoute
              exact
              path="/"
              auth={this.state.auth}
              component={Home}
            />
          </Switch>
        </Router>
      </Fragment>
    )
  }
}

export default App

import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import { firestoreConnect } from 'react-redux-firebase'
import PropTypes from 'prop-types'

class AddClient extends Component {
  state = {
    firstName: '',
    lastName: '',
    email: '',
    balance: '',
    phone: ''
  }

  onChange = e => {
    this.setState({
      [e.target.name]: e.target.value
    })
  }

  onSubmit = e => {
    e.preventDefault()

    const newClient = this.state

    const { firestore, history } = this.props

    if (newClient.balance === '') {
      newClient.balance = 0
    }

    firestore
      .add({ collection: 'clients' }, newClient)
      .then(() => history.push('/'))
  }

  render() {
    const { firstName, lastName, phone, email, balance } = this.state

    return (
      <div>
        <div className="row">
          <div className="col-md-6">
            <Link to="/" className="btn btn-link">
              <i className="fas fa-arrow-circle-left" />
              Voltar ao Dashboard
            </Link>
          </div>
        </div>

        <div className="card">
          <div className="card-header">Novo Cliente</div>
          <div className="card-body">
            <form onSubmit={this.onSubmit}>
              <div className="form-group">
                <label htmlFor="firstName">Primeiro Nome</label>
                <input
                  type="text"
                  className="form-control"
                  name="firstName"
                  required
                  onChange={this.onChange}
                  value={firstName}
                />
              </div>
              <div className="form-group">
                <label htmlFor="lastName">Último Nome</label>
                <input
                  type="text"
                  className="form-control"
                  name="lastName"
                  required
                  onChange={this.onChange}
                  value={lastName}
                />
              </div>
              <div className="form-group">
                <label htmlFor="email">E-mail</label>
                <input
                  type="text"
                  className="form-control"
                  name="email"
                  required
                  onChange={this.onChange}
                  value={email}
                />
              </div>
              <div className="form-group">
                <label htmlFor="phone">Telefone</label>
                <input
                  type="text"
                  className="form-control"
                  name="phone"
                  minLength="2"
                  required
                  onChange={this.onChange}
                  value={phone}
                />
              </div>
              <div className="form-group">
                <label htmlFor="balance">Saldo</label>
                <input
                  type="text"
                  className="form-control"
                  name="balance"
                  minLength="2"
                  required
                  onChange={this.onChange}
                  value={balance}
                />
              </div>
              <button className="btn btn-success">
                Adicionar Cliente
              </button>
            </form>
          </div>
        </div>
      </div>
    )
  }
}

AddClient.propTypes = {
  firestore: PropTypes.object.isRequired
}

export default firestoreConnect()(AddClient)

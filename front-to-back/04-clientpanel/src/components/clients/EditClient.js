import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import PropTypes from 'prop-types'
import { compose } from 'redux'
import { connect } from 'react-redux'
import { firestoreConnect } from 'react-redux-firebase'
import Spinner from '../layout/Spinner'

class EditClient extends Component {
  constructor(props) {
    super(props)

    this.inputFirstName = React.createRef()
    this.inputLastName = React.createRef()
    this.inputEmail = React.createRef()
    this.inputPhone = React.createRef()
    this.inputBalance = React.createRef()
  }

  onSubmit = e => {
    e.preventDefault()

    const { client, firestore, history } = this.props

    const clientUpdate = {
      firstName: this.inputFirstName.current.value,
      lastName: this.inputLastName.current.value,
      phone: this.inputPhone.current.value,
      balance:
        this.inputBalance.current.value === ''
          ? 0
          : this.inputBalance.current.value
    }

    firestore
      .update({ collection: 'clients', doc: client.id }, clientUpdate)
      .then(() => history.push('/'))
  }

  render() {
    const { client } = this.props

    if (!client) {
      return <Spinner />
    }

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
          <div className="card-header">Edição de Cliente</div>
          <div className="card-body">
            <form onSubmit={this.onSubmit}>
              <div className="form-group">
                <label htmlFor="firstName">Primeiro Nome</label>
                <input
                  type="text"
                  className="form-control"
                  name="firstName"
                  required
                  ref={this.inputFirstName}
                  defaultValue={client.firstName}
                />
              </div>
              <div className="form-group">
                <label htmlFor="lastName">Último Nome</label>
                <input
                  type="text"
                  className="form-control"
                  name="lastName"
                  required
                  ref={this.inputLastName}
                  defaultValue={client.lastName}
                />
              </div>
              <div className="form-group">
                <label htmlFor="email">E-mail</label>
                <input
                  type="text"
                  className="form-control"
                  name="email"
                  required
                  ref={this.inputEmail}
                  defaultValue={client.email}
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
                  ref={this.inputPhone}
                  defaultValue={client.phone}
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
                  ref={this.inputBalance}
                  defaultValue={client.balance}
                />
              </div>
              <button className="btn btn-success">Atualizar Cliente</button>
            </form>
          </div>
        </div>
      </div>
    )
  }
}

EditClient.propTypes = {
  firestore: PropTypes.object.isRequired
}

export default compose(
  firestoreConnect(props => [
    { collection: 'clients', storeAs: 'client', doc: props.match.params.id }
  ]),
  connect(({ firestore: { ordered } }, props) => ({
    client: ordered.client && ordered.client[0]
  }))
)(EditClient)

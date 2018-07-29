import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import { connect } from 'react-redux'
import { compose } from 'redux'
import { firestoreConnect, isLoaded, isEmpty } from 'react-redux-firebase'
import PropTypes from 'prop-types'

import Spinner from '../layout/Spinner'

class Clients extends Component {
  state = {
    totalOwed: null
  }

  static getDerivedStateFromProps(nextProps, prevState) {
    const { clients } = nextProps

    if (clients) {
      const total = clients.reduce((total, client) => {
        return total + parseFloat(client.balance.toString())
      }, 0)

      return {
        totalOwed: total
      }
    }

    return null
  }

  render() {
    const { clients } = this.props
    const { totalOwed } = this.state

    if (clients) {
      return (
        <div>
          <div className="row">
            <div className="col-md-6">
              <h2>
                <i className="fas fa-users" /> Clientes
              </h2>
            </div>
            <div className="col-md-6">
              <h5 className="text-right text-secondary">
                Total Arrecadado{' '}
                <span className="text-primary">
                  R$ {parseFloat(totalOwed).toFixed(2)}
                </span>
              </h5>
            </div>
          </div>

          <table className="table table-striped">
            <thead className="thead-inverse">
              <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Saldo</th>
                <th />
              </tr>
            </thead>
            <tbody>
              {clients.map(client => (
                <tr key={client.id}>
                  <td>
                    {client.firstName} {client.lastName}
                  </td>
                  <td>{client.email}</td>
                  <td>R$ {parseFloat(client.balance).toFixed(2)}</td>
                  <td>
                    <Link
                      to={`/client/${client.id}`}
                      className="btn btn-secondary btn-sm"
                    >
                      <i className="fas fa-arrow-circle-right" /> Detalhes
                    </Link>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
      )
    } else {
      return <Spinner />
    }
  }
}

Clients.propTypes = {
  firestore: PropTypes.object.isRequired,
  clients: PropTypes.array
}

export default compose(
  firestoreConnect([{ collection: 'clients' }]),
  connect(state => ({
    clients: state.firestore.ordered.clients
  }))
)(Clients)

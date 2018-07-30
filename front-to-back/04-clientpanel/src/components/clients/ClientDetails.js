import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import PropTypes from 'prop-types'
import { compose } from 'redux'
import { connect } from 'react-redux'
import { firestoreConnect } from 'react-redux-firebase'
import Spinner from '../layout/Spinner'
import classnames from 'classnames'

class ClientDetails extends Component {
  state = {
    showBalanceUpdate: false,
    balanceUpdateAmount: ''
  }

  onChange = e => {
    this.setState({
      [e.target.name]: e.target.value
    })
  }

  onDeleteClick = async () => {
    const { client, firestore, history } = this.props

    await firestore.delete({ collection: 'clients', doc: client.id })

    history.push('/')
  }

  onBalanceSubmit = async e => {
    e.preventDefault()

    const { client, firestore } = this.props
    const { balanceUpdateAmount } = this.state

    const clientUpdate = {
      balance: parseFloat(balanceUpdateAmount)
    }

    // Atualizar no firestore
    await firestore.update(
      { collection: 'clients', doc: client.id },
      clientUpdate
    )

    this.setState({
      showBalanceUpdate: false
    })
  }

  render() {
    const { client } = this.props
    const { showBalanceUpdate, balanceUpdateAmount } = this.state

    let balanceForm = showBalanceUpdate ? (
      <form onSubmit={this.onBalanceSubmit}>
        <div className="input-group">
          <input
            type="number"
            name="balanceUpdateAmount"
            className="form-control"
            value={balanceUpdateAmount}
            placeholder="Informe o novo saldo"
            onChange={this.onChange}
          />
          <div className="input-group-append">
            <input
              type="submit"
              value="Atualizar"
              className="btn btn-outline-dark"
            />
          </div>
        </div>
      </form>
    ) : null

    if (!client) return <Spinner />

    return (
      <div>
        <div className="row">
          <div className="col-md-6">
            <Link to="/" className="btn btn-link">
              <i className="fas fa-arrow-circle-left" />
              Voltar ao Dashboard
            </Link>
          </div>
          <div className="col-md-6">
            <div className="btn-group float-right">
              <Link to={`/client/edit/${client.id}`} className="btn btn-dark">
                Editar
              </Link>
              <button className="btn btn-danger" onClick={this.onDeleteClick}>
                Excluir
              </button>
            </div>
          </div>
        </div>
        <hr />
        <div className="card">
          <h3 className="card-header">
            {client.firstName} {client.lastName}
          </h3>
          <div className="card-body">
            <div className="row">
              <div className="col-md-8 col-sm-6">
                <h4>
                  Cliente ID:{' '}
                  <span className="text-secondary">{client.id}</span>
                </h4>
              </div>
              <div className="col-md-4 col-sm-6">
                <h3 className="pull-right text-right">
                  Saldo:{' '}
                  <span
                    className={classnames({
                      'text-danger': client.balance > 0,
                      'text-success': client.balance === 0
                    })}
                  >
                    R$ {parseFloat(client.balance).toFixed(2)}
                  </span>{' '}
                  <small>
                    <a
                      href="#1"
                      onClick={() =>
                        this.setState({
                          showBalanceUpdate: !this.state.showBalanceUpdate,
                          balanceUpdateAmount: ''
                        })
                      }
                    >
                      <i className="fas fa-pencil-alt" />
                    </a>
                  </small>
                </h3>
                {balanceForm}
              </div>
            </div>

            <hr />
            <ul className="list-group">
              <li className="list-group-item">
                E-mail de Contato: {client.email}
              </li>
              <li className="list-group-item">
                Telefone do Contato: {client.phone}
              </li>
            </ul>
          </div>
        </div>
      </div>
    )
  }
}

ClientDetails.propTypes = {
  firestore: PropTypes.object.isRequired
}

export default compose(
  firestoreConnect(props => [
    { collection: 'clients', storeAs: 'client', doc: props.match.params.id }
  ]),
  connect(({ firestore: { ordered } }, props) => ({
    client: ordered.client && ordered.client[0]
  }))
)(ClientDetails)

import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class Clients extends Component {
  render() {
    const clients = [
      {
        id: 1,
        firstName: 'jao',
        lastName: 'Sousa',
        email: 'jao@gmail.com',
        balance: 20
      },
      {
        id: 2,
        firstName: 'pedro',
        lastName: 'Sousa',
        email: 'pedro@gmail.com',
        balance: 500
      }
    ]

    if (clients) {
      return (
        <div>
          <div className="row">
            <div className="col-md-6">
              <h2>
                <i className="fas fa-users" /> Clientes
              </h2>
            </div>
            <div className="col-md-6" />
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
      return <h1>Carregando...</h1>
    }
  }
}

export default Clients

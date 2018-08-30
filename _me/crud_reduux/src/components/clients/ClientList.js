import React, { Component, Fragment } from 'react'
import { connect } from 'react-redux'
import { withRouter } from 'react-router-dom'
import PropTypes from 'prop-types'
import Pagination from 'react-js-pagination'
// require("bootstrap/less/bootstrap.less")

import { fetchClients } from '../../store/actions/clientActions'
import { dateReadable } from '../../helpers'

class ClientList extends Component {
  componentDidMount() {
    this.props.fetchClients(this.props.match.params.page)
  }

  handlePageChange = pageNumber => {
    this.props.history.push('/' + pageNumber)
    // this.props.fetchClients(pageNumber)
    // console.log(`active page is ${pageNumber}`)
  }

  componentDidUpdate(prevProps) {
    const { page } = this.props.match.params

    if (prevProps.match.params.page !== page) {
      this.props.fetchClients(page)
    }
  }

  render() {
    const {
      clients,
      pagination: { current_page, per_page, total }
    } = this.props.client

    return (
      <Fragment>
        <h2 className="text-center">
          Clientes Cadastrados <span className="badge" />
        </h2>
        <div className="row">
          <div className="col-10 mx-auto">
            <table className="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>E-mail</th>
                  <th>Telefone</th>
                  <th>Data de cadastro</th>
                  <th />
                </tr>
              </thead>
              <tbody>
                {clients
                  ? clients.map(client => (
                      <tr key={client.id}>
                        <td>{client.name}</td>
                        <td>{client.cpf}</td>
                        <td>{client.email}</td>
                        <td>{client.mobile_phone}</td>
                        <td>{dateReadable(client.created_at)}</td>
                        <td>
                          <a href="" className="btn btn-sm btn-info">
                            Editar
                          </a>{' '}
                          <a href="" className="btn btn-sm btn-danger">
                            Excluir
                          </a>
                        </td>
                      </tr>
                    ))
                  : null}
              </tbody>
            </table>
            <nav className="navigation">
              <Pagination
                activePage={current_page}
                itemsCountPerPage={per_page}
                totalItemsCount={total}
                pageRangeDisplayed={5}
                onChange={this.handlePageChange}
                itemClass={'page-item'}
                linkClass={'page-link'}
              />
            </nav>
          </div>
        </div>
      </Fragment>
    )
  }
}

ClientList.propTypes = {
  client: PropTypes.object.isRequired
}

const mapStateToProps = state => ({
  client: state.client
})

export default connect(
  mapStateToProps,
  { fetchClients }
)(withRouter(ClientList))

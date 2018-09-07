import React, { Component, Fragment } from 'react'
import { connect } from 'react-redux'
import { withRouter, Link } from 'react-router-dom'
import PropTypes from 'prop-types'
import Pagination from 'react-js-pagination'
import { Popconfirm } from 'antd'
// require("bootstrap/less/bootstrap.less")

import { fetchClients, deleteClient } from '../../store/actions/clientActions'
import { dateReadable } from '../../helpers'

class ClientList extends Component {
  componentDidMount() {
    this.props.fetchClients(this.props.match.params.page)

    // window.addEventListener('resize', this.handleResize)
  }

  // handleResize = event => {
  //   console.log(event)
  // }

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

  onConfirmDelete = id => {
    this.props.deleteClient(id)
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
          <div className="col-12 mx-auto">
            <table className="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>E-mail</th>
                  <th>Telefone</th>
                  <th>UF/Cidade</th>
                  <th>Data de cadastro</th>
                  <th />
                </tr>
              </thead>
              <tbody>
                {clients.map(client => (
                  <tr key={client.id}>
                    <td>{client.name}</td>
                    <td>{client.cpf}</td>
                    <td>{client.email}</td>
                    <td>{client.mobile_phone}</td>
                    <td>
                      {client.city.state.initials}/{client.city.city}
                    </td>
                    <td>{dateReadable(client.created_at)}</td>
                    <td>
                      <Link
                        to={`/edit/${client.id}`}
                        className="btn btn-sm btn-info"
                      >
                        Editar
                      </Link>{' '}
                      <Popconfirm
                        title="Deseja mesmo excluir esse Cliente?"
                        onConfirm={this.onConfirmDelete.bind(this, client.id)}
                        okText="Sim"
                        cancelText="Não"
                      >
                        <a href="" className="btn btn-sm btn-danger">
                          Excluir
                        </a>
                      </Popconfirm>
                    </td>
                  </tr>
                ))}
              </tbody>
            </table>
            <div className="d-flex">
              <nav className="navigation mx-auto">
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
  { fetchClients, deleteClient }
)(withRouter(ClientList))

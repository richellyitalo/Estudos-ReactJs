import React, { Component } from 'react'

import {
  BrowserRouter as Router,
  Route,
  Link
} from 'react-router-dom'

import Home from './Home'
import Sobre from './Sobre'
import Produtos from './Produtos'

class App extends Component {
  constructor(props) {
    super(props)

    this.state = {
      categorias: [],
      produtos: [],
      categoria: {}
    }

    this.fetchCategorias = this.fetchCategorias.bind(this)
    this.deleteCategoria = this.deleteCategoria.bind(this)
    this.addCategoria = this.addCategoria.bind(this)
    this.updateCategoria = this.updateCategoria.bind(this)
    this.addProduto = this.addProduto.bind(this)
    this.loadProdutos = this.loadProdutos.bind(this)
    this.getCategoria = this.getCategoria.bind(this)
    this.deleteProduto = this.deleteProduto.bind(this)
    this.getProduto = this.getProduto.bind(this)
    this.updateProduto = this.updateProduto.bind(this)
  }

  fetchCategorias() {
    this.props
      .api
      .loadCategorias()
      .then(response => {
        this.setState({
          categorias: response.data
        })
      })
  }

  addCategoria(categoria) {
    this.props.api.addCategoria(categoria)
    .then(response => {
      this.fetchCategorias()
    })
  }

  addProduto(produto) {
    return this.props.api.addProduto(produto)
  }

  deleteCategoria(id) {
    this.props
      .api
      .deleteCategoria(id)
      .then(() => {
        this.fetchCategorias()
      })
  }

  updateCategoria(categoria) {
    return this.props
      .api
      .updateCategoria(categoria)
      .then(() => {
        this.fetchCategorias()
      })
  }

  loadProdutos(categoriaID) {
    return this.props
    .api
    .loadProdutos(categoriaID)
    .then(response => {
      this.setState({
        produtos: response.data
      })
    })
  }

  getCategoria(ID) {
    return this.props.api
      .getCategoria(ID)
      .then(res => {
        this.setState({
          categoria: res.data
        })
      })
  }

  deleteProduto(id) {
    return this.props
      .api
      .deleteProduto(id)
      // .then(() => {
      //   this.loadProdutos()
      // })
  }

  getProduto(ID) {
    return this.props.api
      .readProduto(ID)
  }

  updateProduto(produto) {
    return this.props
      .api
      .updateProduto(produto)
  }

  render() {
    return (
      <Router>
        <div>
          <nav className="navbar navbar-inverse">
            <div className="container">
              <div className="navbar-header">
                <Link className="navbar-brand" to="/">Shop React</Link>
              </div>
              <ul className="nav navbar-nav">
                <li><Link to="/">Home</Link></li>
                <li><Link to="/sobre">Sobre</Link></li>
                <li><Link to="/produtos">Produtos</Link></li>
              </ul>
            </div>
          </nav>
          <div className="container">
            <Route exact path="/" component={Home} />
            <Route exact path="/sobre" component={Sobre} />
            <Route path="/produtos" render={(props) => {
              return <Produtos {...props} 
                categorias={this.state.categorias}
                produtos={this.state.produtos}
                categoria={this.state.categoria}
                fetchCategorias={this.fetchCategorias}
                deleteCategoria={this.deleteCategoria}
                addCategoria={this.addCategoria}
                updateCategoria={this.updateCategoria}
                addProduto={this.addProduto}
                loadProdutos={this.loadProdutos}
                getCategoria={this.getCategoria}
                deleteProduto={this.deleteProduto}
                getProduto={this.getProduto}
                updateProduto={this.updateProduto}
              />
            }}
            />
          </div>
        </div>
      </Router>
    )
  }
}

export default App

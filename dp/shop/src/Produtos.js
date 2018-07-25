import React, { Component } from 'react'

import { 
  Route,
  Link
} from 'react-router-dom'

import ProdutosHome from './ProdutosHome'
import ProdutosCategorias from './ProdutosCategorias'
import ProdutosNovo from './ProdutosNovo'
import ProdutoEditar from './ProdutoEditar'

class Produtos extends Component {
  constructor(props) {
    super(props)

    // this.state = {
    //   categorias: []
    // }
    this.state = {
      editingCategoriaID: null
    }

    this.handleInputCategoria = this.handleInputCategoria.bind(this)
    this.renderMenuCategorias = this.renderMenuCategorias.bind(this)
    this.editCategoria = this.editCategoria.bind(this)
    this.editingCategoria = this.editingCategoria.bind(this)
  }

  componentDidMount() {
    this.props.fetchCategorias()
  }

  editCategoria(id) {
    this.setState({
      editingCategoriaID: id
    })
    setTimeout(() => {
      this.refs['cat_' + id].focus()
    }, 100)
  }

  editingCategoria(event) {
    const { keyCode } = event

    if (keyCode === 27) { // pressionou ESC
      this.setState({
        editingCategoriaID: null
      })
    }

    if (keyCode === 13) { // pressionou ENTER
      const categoria = {
        id: this.state.editingCategoriaID,
        categoria: event.target.value
      }
      this.props.updateCategoria(categoria)
        .then(() => {
          this.setState({
            editingCategoriaID: null
          }) 
        })
    }
  }

  renderMenuCategorias(categorias) {
    return categorias.map(categoria => (
      <li key={categoria.id}>
          {
            this.state.editingCategoriaID !== categoria.id ?
            (
              <div>
                  <button className="btn btn-xs btn-danger"
                    onClick={() => this.props.deleteCategoria(categoria.id)}
                  ><span className="glyphicon glyphicon-remove"></span></button>&nbsp;
                  <Link to={`/produtos/categoria/${categoria.id}`}>{categoria.categoria}</Link>
                  <button className="btn-link"
                    onClick={() => this.editCategoria(categoria.id)}
                  ><span className="glyphicon glyphicon-pencil"></span></button>&nbsp;
              </div>
            )
            : (
              <div>
                <input className="form-control" defaultValue={categoria.categoria}
                  onKeyUp={this.editingCategoria}
                  ref={'cat_' + categoria.id}
                />
              </div>
            )
          }
        </li>
      )
    )
  }

  handleInputCategoria(event) {
    if (event.keyCode === 13) {
      this.props.addCategoria({categoria: event.target.value})

      this.refs.inputNewCategoria.value = ''
    }
  }

  render() {
    const { match, categorias, addProduto, getProduto } = this.props
    // const { categorias } = this.state

    return (
      <div className="row">
        <div className="col-md-2">
          <h2>Categorias</h2>
          <ul className="list-unstyled">
            { this.renderMenuCategorias(categorias) }
          </ul>
          <div className="well">
            <input type="text" className="form-control"
              ref="inputNewCategoria"
              onKeyUp={this.handleInputCategoria}
            />
          </div>
          <Link to="/produtos/novo" className="btn btn-primary btn-block">
            Novo Produto
          </Link>
        </div>
        <div className="col-md-10">
          <h1>Produtos</h1>
          <Route exact path={match.url} component={ProdutosHome} />
          <Route exact path={match.url + '/novo'} render={props => {
            return <ProdutosNovo {...props}
              categorias={categorias}
              addProduto={addProduto}
            />
          }}
          />
          <Route exact path={match.url + '/editar/:produtoId'} render={props => {
            return <ProdutoEditar {...props}
              categorias={categorias}
              addProduto={addProduto}
              getProduto={getProduto}
            />
          }}
          />
          <Route exact path={match.url + '/categoria/:categoriaId'} render={props => {
            return <ProdutosCategorias
              {...props} 
              produtos={this.props.produtos}
              loadProdutos={this.props.loadProdutos}
              categoria={this.props.categoria}
              getCategoria={this.props.getCategoria}
              deleteProduto={this.props.deleteProduto}
            />
          }} />
        </div>
      </div>
    )
  }
}

export default Produtos
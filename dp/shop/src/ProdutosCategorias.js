import React, { Component } from 'react'

import { Link } from 'react-router-dom'

class ProdutosCategorias extends Component {
  constructor(props) {
    super(props)    
    
    this.fetchData(this.props.match.params.categoriaId)
    this.renderProduto = this.renderProduto.bind(this)
  }

  fetchData(categoriaId) {
    this.props.loadProdutos(categoriaId)
    this.props.getCategoria(categoriaId)
  }

  componentDidUpdate(prevProps) {
    const { categoriaId } = this.props.match.params
    const prevCategoriaId = prevProps.match.params.categoriaId

    if (categoriaId !== prevCategoriaId) {
      this.fetchData(categoriaId)
    }
  }

  renderProduto(produto) {
    return (
      <div key={produto.id} className="well">
        {produto.produto}
        &nbsp;<button className="btn btn-danger btn-xs"
          onClick={
            () => this.props.deleteProduto(produto.id)
              .then(() => {
                this.fetchData(this.props.match.params.categoriaId)
              })
          }
        >
          <span className="glyphicon glyphicon-trash"></span> Excluir produto
        </button>
        <Link to={'/produtos/editar/' + produto.id} className="btn btn-info btn-xs">
          <span className="glyphicon glyphicon-pencil"></span> Editar
        </Link>
      </div>
    )
  }

  render() {
    return (
      <div>
        <h3>{this.props.categoria.categoria}</h3>
        {
          this.props.produtos.length === 0 &&
          <div className="alert alert-warning">
            Nenhum produto encontrado
          </div>
        }
        {this.props.produtos.map(this.renderProduto)}
      </div>
    )
  }
}

export default ProdutosCategorias

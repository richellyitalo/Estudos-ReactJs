import React, { Component } from 'react'

class ProdutosNovo extends Component {
  constructor(props) {
    super(props)

    this.state = {
      // loading: false,
      // produtoMeta: {
      //   categoria: '',
      //   produto: ''
      // }
    }
    // this.inputHandle = this.inputHandle.bind(this)
    this.adicionarProduto = this.adicionarProduto.bind(this)
  }

  inputHandle(event, field) {
    let newProdutoMeta =  {
      ...this.state.produtoMeta
    }
    newProdutoMeta[field] = event.target.value

    this.setState({
      produtoMeta: newProdutoMeta
    })
  }

  adicionarProduto(event) {
    event.preventDefault()

    const produto = {
      categoria: this.refs.categoria.value,
      produto: this.refs.produto.value
    } 

    this.props.addProduto(produto)
      .then(() => {
        this.props.history.push('/produtos/categoria/' + produto.categoria)
      })
  }

  render() {
    const { categorias } = this.props
    return (
      <div className="col-md-4">
        <div className="form-group">
          <label>Categoria:</label>
          <select className="form-control" ref="categoria">
          {
            categorias.map((cat, i) => (
              <option key={i} value={cat.id}>{cat.categoria}</option>
            ))
          }
          </select>
        </div>
        <div className="form-group">
          <label>Nome:</label>
          <input className="form-control" ref="produto" />
        </div>
        <div>
          <button type="submit" className="btn btn-sm btn-success"
            onClick={this.adicionarProduto}
          >
            Adicionar
          </button>
        </div>
      </div>
    )
  }
}

export default ProdutosNovo
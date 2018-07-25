import React, { Component } from 'react'

class ProdutoEditar extends Component {
  constructor(props) {
    super(props)

    this.state = {
      produto: {}
    }

    this.props.getProduto(props.match.params.produtoId)
      .then((res) => {
        this.setState({
          produto: res.data
        })
      })

    this.inputHandle = this.inputHandle.bind(this)
  }

  inputHandle(event, field) {
    let newProdutoMeta =  {
      ...this.state.produto
    }
    newProdutoMeta[field] = event.target.value

    this.setState({
      produto: newProdutoMeta
    })
  }

  render() {
    const { categorias } = this.props
    return (
      <div className="col-md-4">
        <code>{JSON.stringify(this.state.produto)}</code>
        <div className="form-group">
          <label>Categoria:</label>
          <select className="form-control" value={this.state.produto.categoria} onChange={(e) => this.inputHandle(e, 'categoria')}>
          {
            categorias.map((cat, i) => (
              <option key={i} value={cat.id}>{cat.categoria}</option>
            ))
          }
          </select>
        </div>
        <div className="form-group">
          <label>Nome:</label>
          <input className="form-control" defaultValue={this.state.produto.produto} onChange={(e) => this.inputHandle(e, 'produto')}/>
        </div>
        <div>
          <button type="submit" className="btn btn-sm btn-success"
            onClick={this.atualizarProduto}
          >
            Adicionar
          </button>
        </div>
      </div>
    )
  }
}

export default ProdutoEditar
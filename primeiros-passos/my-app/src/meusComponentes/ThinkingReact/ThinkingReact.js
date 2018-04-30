import React, { Component } from 'react'

class ProductCategoryRow extends Component {
  render () {
    const category = this.props.category
    return (
      <tr>
        <th colSpan="2">
          {category}
        </th>
      </tr>
    )
  }
}

class ProductRow extends Component {
  render() {
    const product = this.props.product
    const name = product.stocked ?
      product.name : 
      <span style={{ color: 'red' }}>
        { product.name }
      </span>
    return (
      <tr>
        <td>{name}</td>
        <td>{product.price}</td>
      </tr>
    )
  }
}

class ProductTable extends Component {
  render() {
    const filterText = this.props.filterText
    const inStockOnly = this.props.inStockOnly
    
    const rows = []
    let lastCategory = null

    this.props.products.forEach((product) => {
      if (product.name.indexOf(filterText) === -1) {
        return
      }
      if (inStockOnly && !product.stocked) {
        return
      }

      if (product.category !== lastCategory) {
        rows.push(
          <ProductCategoryRow
            category={product.category}
            key={product.category} />
        )
      }
      rows.push(
        <ProductRow
          product={product}
          key={product.name} />
      )
      lastCategory = product.category
    })

    return (
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Preço</th>
          </tr>
        </thead>
        <tbody>{rows}</tbody>
      </table>
    )
  }
}

class SearchBar extends Component {
  constructor(props) {
    super(props)
    this.handleFilterTextChange = this.handleFilterTextChange.bind(this)
    this.handleInStockChange = this.handleInStockChange.bind(this)
  }

  handleFilterTextChange(event) {
    this.props.onFilterTextChange(event.target.value)
  }

  handleInStockChange(event) {
    this.props.onInStockChange(event.target.checked)
  }

  render() {
    const filterText = this.props.filterText
    const inStockOnly = this.props.inStockOnly

    return (
      <form>
        <input 
          type="text" 
          placeholder="Buscar..." 
          value={filterText}
          onChange={this.handleFilterTextChange} />
        <p>
          <input type="checkbox" checked={inStockOnly} 
          onChange={this.handleInStockChange} />
          {' '}
          Buscar apenas produtos no estoque
        </p>
      </form>
    )
  }
}

class FilterableProductTable extends Component {
  constructor(props) {
    super(props)
    this.state = {
      filterText: '',
      inStockOnly: false
    }

    this.handleFilterTextChange = this.handleFilterTextChange.bind(this)
    this.handleInStockChange = this.handleInStockChange.bind(this)
  }

  handleFilterTextChange(filterText) {
    this.setState({
      filterText: filterText
    })
  }

  handleInStockChange(inStockOnly) {
    this.setState({
      inStockOnly: inStockOnly
    })
  }

  render() {
    return (
      <div>
        <SearchBar 
          filterText={this.state.filterText}
          inStockOnly={this.state.inStockOnly}
          onFilterTextChange={this.handleFilterTextChange}
          onInStockChange={this.handleInStockChange} />
        <ProductTable
          products={this.props.products} 
          filterText={this.state.filterText}
          inStockOnly={this.state.inStockOnly}/>
      </div>
    )
  }
}

export default FilterableProductTable
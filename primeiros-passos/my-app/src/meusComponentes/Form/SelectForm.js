import React, { Component } from 'react'

class SelectForm extends Component {

  constructor(props) {
    super(props)
    this.state = {value: 'coco', valueMultiple: 'goiaba'}

    this.handleChange = this.handleChange.bind(this)
    this.handleChangeMultiple = this.handleChangeMultiple.bind(this)
    this.handleSubmit = this.handleSubmit.bind(this)
  }

  handleChange(event) {
    this.setState({value: event.target.value})
  }

  handleChangeMultiple(event) {
    this.setState({valueMultiple: event.target.value})
  }

  handleSubmit(event) {
    alert('Formulário com SELECT enviou ' + this.state.value)
    event.preventDefault()
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <h3>Opção atual: {this.state.value}</h3>
        <label>
          Fruta
          <select value={this.state.value} onChange={this.handleChange}>
            <option value="coco">Côco</option>
            <option value="manga">Manga</option>
            <option value="goiaba">Goiaba</option>
          </select>
        </label>
        <h4>Multiplas escolhas {this.state.valueMultiple} </h4>
        <label>
          Frutas
          <select multiple={true} value={[this.state.valueMultiple]} onChange={this.handleChangeMultiple}>
            <option value="coco">Côco</option>
            <option value="manga">Manga</option>
            <option value="goiaba">Goiaba</option>
          </select>
        </label>
        <input type="submit" value="Enviar SELECT" />
      </form>
    )
  }
}

export default SelectForm
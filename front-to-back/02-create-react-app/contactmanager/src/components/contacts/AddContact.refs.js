import React, { Component } from 'react';

class AddContact extends Component {
  constructor(props) {
    super(props)

    this.inputName = React.createRef()
    this.inputEmail = React.createRef()
    this.inputPhone = React.createRef()
  }

  static defaultProps = {
    name: 'Jao',
    email: 'jao@gmail.com',
    phone: '(84) 8888-9999'
  }

  onSubmit = e => {
    e.preventDefault();

    const contact = {
      name: this.inputName.current.value,
      email: this.inputEmail.current.value,
      phone: this.inputPhone.current.value,
    }

    console.log(contact)
  }

  render() {
    const { name, email, phone } = this.props

    return (
      <div className="card mb-3">
        <div className="card-header">Novo Contato</div>
        <div className="card-body">
          <form onSubmit={this.onSubmit}>
            <div className="form-group">
              <label htmlFor="name">Nome</label>
              <input
                type="text"
                name="name"
                className="form-control form-control-lg"
                placeholder="Informe o Nome..."
                defaultValue={name}
                ref={this.inputName}
              />
            </div>
            <div className="form-group">
              <label htmlFor="email">E-mail</label>
              <input
                type="text"
                name="email"
                className="form-control form-control-lg"
                placeholder="Informe o E-mail..."
                defaultValue={email}
                ref={this.inputEmail}
              />
            </div>
            <div className="form-group">
              <label htmlFor="phone">Telefone</label>
              <input
                type="text"
                name="phone"
                className="form-control form-control-lg"
                placeholder="Informe o Telefone..."
                defaultValue={phone}
                ref={this.inputPhone}
              />
            </div>
            <div className="form-group">
              <input
                type="submit"
                value="Adicionar contato"
                className="btn btn-light btn-block"
              />
            </div>
          </form>
        </div>
      </div>
    );
  }
}

export default AddContact;

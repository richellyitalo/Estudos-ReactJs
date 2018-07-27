import React, { Component } from 'react';
import axios from 'axios'

import { Consumer } from '../../context';
import TextInputGroup from '../layout/TextInputGroup';

class EditContact extends Component {
  state = {
    id: null,
    name: '',
    email: '',
    phone: '',
    errors: {}
  };

  async componentDidMount() {
    const { id } = this.props.match.params
    const res = await axios.get(`https://jsonplaceholder.typicode.com/users/${id}`)

    const contact = res.data

    this.setState({
      ...contact,
      id
    })

  }

  // usado para cada campo diferente
  // onNameChange = e => this.setState({ name: e.target.value })

  // maneira generica de usar
  onChange = e => this.setState({ [e.target.name]: e.target.value });

  onSubmit = async (dispatch, e) => {
    e.preventDefault();

    const { name, email, phone } = this.state;

    if (name === '') {
      this.setState({
        errors: {
          name: 'Nome é obrigatório'
        }
      })

      return ;
    }
    if (email === '') {
      this.setState({
        errors: {
          email: 'E-mail é obrigatório'
        }
      })

      return ;
    }
    if (phone === '') {
      this.setState({
        errors: {
          phone: 'Telefone é obrigatório'
        }
      })

      return ;
    }

    const contactDataUpt = {
      name,
      email,
      phone
    };
    
    const res = await axios.put(`https://jsonplaceholder.typicode.com/users/${this.state.id}`, contactDataUpt)
    
    dispatch({ type: 'UPDATE_CONTACT', payload: res.data })

    // CLEARS
    this.setState({
      id: null,
      name: '',
      email: '',
      phone: '',

      errors: {
        name: '',
        email: '',
        phone: ''
      }
    })

    this.props.history.push('/')
  }

  render() {
    const { name, email, phone, errors } = this.state;

    return (
      <Consumer>
        {value => {
          const { dispatch } = value;

          return (
            <div className="card mb-3">
              <div className="card-header">Edição de Contato</div>
              <div className="card-body">
                <form onSubmit={this.onSubmit.bind(this, dispatch)}>
                  <TextInputGroup
                    label="Nome"
                    name="name"
                    placeholder="Informe o Nome..."
                    value={name}
                    onChange={this.onChange}
                    error={errors.name}
                  />
                  <TextInputGroup
                    label="E-mail"
                    name="email"
                    placeholder="Informe o E-mail..."
                    value={email}
                    onChange={this.onChange}
                    error={errors.email}
                  />
                  <TextInputGroup
                    label="Telefone"
                    name="phone"
                    placeholder="Informe o Telefone..."
                    value={phone}
                    onChange={this.onChange}
                    error={errors.phone}
                  />
                  <div className="form-group">
                    <input
                      type="submit"
                      value="Atualizar contato"
                      className="btn btn-light btn-block"
                    />
                  </div>
                </form>
              </div>
            </div>
          );
        }}
      </Consumer>
    );
  }
}

export default EditContact

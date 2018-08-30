import React, { Component } from 'react'
import { connect } from 'react-redux'
import { withRouter } from 'react-router-dom'
import PropTypes from 'prop-types'
import {
  name as fakerName,
  random,
  internet,
  address
} from 'faker/locale/pt_BR'

import FormInputText from '../../elements/helpers/FormInputText'
import { fetchStates, fetchCities } from '../../store/actions/commonActions'
import { addClient } from '../../store/actions/clientActions'
import { setAlert, clearAlert } from '../../store/actions/commonActions'

// import commonService from '../../services/commonService'

class ClientAdd extends Component {
  state = {
    name: fakerName.firstName(),
    cpf: random.number(11111111111, 99999999999),
    email: internet.email(),
    mobile_phone: random.number(21111111111, 99999999999),
    cep: random.number(11111111, 99999999),
    address: address.streetAddress(),
    district: address.secondaryAddress(),
    city_id: ''
  }

  componentDidMount() {
    this.props.fetchStates()
  }

  onChange = e => {
    this.setState({
      [e.target.name]: e.target.value
    })
  }

  onChangeState = ({ target: { value } }) => {
    if (value) {
      this.props.fetchCities(value)
    } else {
      this.setState({
        cities: []
      })
    }
  }

  onSubmit = e => {
    e.preventDefault()

    this.props.addClient(this.state, this.props.history)
  }

  render() {
    const {
      name,
      cpf,
      email,
      mobile_phone,
      address,
      cep,
      district,
      city_id
    } = this.state

    const { states, cities } = this.props

    return (
      <React.Fragment>
        <h2 className="text-center">Novo Cliente</h2>
        {/* <button
          className="btn btn-info btn-sm"
          onClick={() =>
            this.props.setAlert('Mensagem' + new Date().getTime(), 'warning')
          }
        >
          Testar alert
        </button>
        {' '}
        <button
          className="btn btn-warning btn-sm"
          onClick={() =>
            this.props.clearAlert()
          }
        >
          Limpar
        </button> */}
        <div className="row">
          <form className="col-8 mx-auto" onSubmit={this.onSubmit}>
            <FormInputText
              label="Nome Completo"
              name="name"
              value={name}
              onChange={this.onChange}
            />

            <FormInputText
              label="CPF"
              name="cpf"
              value={cpf}
              col={4}
              onChange={this.onChange}
            />

            <FormInputText
              label="E-mail"
              name="email"
              type="email"
              value={email}
              col={4}
              onChange={this.onChange}
            />

            <FormInputText
              label="Telefone"
              name="mobile_phone"
              type="text"
              value={mobile_phone}
              col={4}
              onChange={this.onChange}
            />

            <FormInputText
              label="CEP"
              name="cep"
              type="text"
              value={cep}
              col={3}
              onChange={this.onChange}
            />

            <FormInputText
              label="Endereço"
              name="address"
              value={address}
              onChange={this.onChange}
            />

            <FormInputText
              label="Bairro"
              name="district"
              value={district}
              onChange={this.onChange}
            />

            {/* localizacao */}
            <div className="form-group row">
              <label htmlFor={name} className="col-3 col-form-label text-right">
                Estado/Cidade
              </label>
              <div className="col-4">
                <select
                  id="state_id"
                  className="form-control"
                  onChange={this.onChangeState}
                >
                  <option>Selecione um estado</option>
                  {states.map(state => (
                    <option key={state.state} value={state.id}>
                      {state.state}
                    </option>
                  ))}
                </select>
              </div>

              <div className="col-5">
                <select
                  name="city_id"
                  value={city_id}
                  className="form-control"
                  onChange={this.onChange}
                >
                  <option>Selecione uma cidade</option>
                  {cities.map(city => (
                    <option key={city.city} value={city.id}>
                      {city.city}
                    </option>
                  ))}
                </select>
              </div>
            </div>
            <div className="form-group row">
              <div className="col-3" />
              <div className="col-3">
                <button className="btn btn-success">Cadastrar Cliente</button>
              </div>
            </div>
          </form>
        </div>
      </React.Fragment>
    )
  }
}

const mapStateToProps = state => ({
  states: state.commons.states,
  cities: state.commons.cities
})

ClientAdd.propTypes = {
  states: PropTypes.array.isRequired,
  cities: PropTypes.array.isRequired
}

export default connect(
  mapStateToProps,
  {
    fetchStates,
    fetchCities,
    addClient,
    setAlert,
    clearAlert
  }
)(withRouter(ClientAdd))

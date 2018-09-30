import React, { Component } from 'react'
import { Link, withRouter } from 'react-router-dom'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'

// Helpers
import TextFieldGroup from '../common/TextFieldGroup'
import TextAreaFieldGroup from '../common/TextAreaFieldGroup'

// Ações
import { addExperience } from '../../actions/profileActions'

class AddExperience extends Component {
  state = {
    title: '',
    company: '',
    location: '',
    from: '',
    to: '',
    current: false,
    description: '',
    disabled: false,
    errors: {}
  }

  onChange = e => {
    this.setState({
      [e.target.name]: e.target.value
    })
  }

  onCheck = e => {
    this.setState({
      disabled: !this.state.disabled,
      current: !this.state.current
    })
  }

  onSubmit = e => {
    e.preventDefault()

    const newExp = {
      title: this.state.title,
      company: this.state.company,
      location: this.state.location,
      from: this.state.from,
      to: this.state.to,
      current: this.state.current,
      description: this.state.description
    }

    this.props.addExperience(newExp, this.props.history)
  }

  componentWillReceiveProps(nextProps) {
    if (nextProps.errors) {
      this.setState({ errors: nextProps.errors })
    }
  }

  render() {
    const { errors } = this.state

    return (
      <div className="add-experience">
        <div className="container">
          <div className="row">
            <div className="col-md-8 m  -auto">
              <Link to="/dashboard" className="btn btn-light">
                Voltar
              </Link>
              <h1 className="display-4 text-center">Adicionar Experiência</h1>
              <p className="lead text-center">
                Adicione algum trabalho ou ocupação que você exerceu no passado
              </p>
              <small className="d-block pb-3">* = campos obrigatórios</small>
              <form onSubmit={this.onSubmit}>
                <TextFieldGroup
                  type="text"
                  name="title"
                  placeholder="* Título"
                  onChange={this.onChange}
                  value={this.state.title}
                  error={errors.title}
                />

                <TextFieldGroup
                  type="text"
                  name="company"
                  placeholder="* Empresa"
                  onChange={this.onChange}
                  value={this.state.company}
                  error={errors.company}
                />

                <TextFieldGroup
                  type="text"
                  name="location"
                  placeholder="* Localização"
                  onChange={this.onChange}
                  value={this.state.location}
                  error={errors.location}
                />

                <h3>Data de</h3>

                <TextFieldGroup
                  type="date"
                  name="from"
                  onChange={this.onChange}
                  value={this.state.from}
                  error={errors.from}
                />

                <TextFieldGroup
                  type="date"
                  name="to"
                  onChange={this.onChange}
                  value={this.state.to}
                  disabled={this.state.disabled}
                  error={errors.to}
                />

                <div className="form-check mb-4">
                  <input
                    type="checkbox"
                    className="form-check-input"
                    name="current"
                    value={this.state.current}
                    checked={this.state.current}
                    onChange={this.onCheck}
                    error={errors.onCheck}
                    id="current"
                  />
                  <label htmlFor="current" className="form-check-label">
                    Trabalho Atual
                  </label>
                </div>

                <TextAreaFieldGroup
                  name="description"
                  placeholder="Descrição"
                  onChange={this.onChange}
                  value={this.state.description}
                  error={errors.description}
                />

                <input
                  type="submit"
                  className="btn btn-info btn-block"
                  value="Adicionar experiência"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

AddExperience.propTypes = {
  errors: PropTypes.object.isRequired,
  addExperience: PropTypes.func.isRequired
}

const mapStateToProps = state => ({
  profile: state.profile,
  errors: state.errors
})

export default connect(mapStateToProps, { addExperience })(withRouter(AddExperience))

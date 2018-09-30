import React, { Component } from 'react'
import { Link, withRouter } from 'react-router-dom'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'

// Helpers
import TextFieldGroup from '../common/TextFieldGroup'
import TextAreaFieldGroup from '../common/TextAreaFieldGroup'

// Ações
import { addEducation } from '../../actions/profileActions'

class AddEducation extends Component {
  state = {
    school: '',
    degree: '',
    fieldofstudy: '',
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
      school: this.state.school,
      degree: this.state.degree,
      fieldofstudy: this.state.fieldofstudy,
      from: this.state.from,
      to: this.state.to,
      current: this.state.current,
      description: this.state.description
    }

    this.props.addEducation(newExp, this.props.history)
  }

  componentWillReceiveProps(nextProps) {
    if (nextProps.errors) {
      this.setState({ errors: nextProps.errors })
    }
  }

  render() {
    const { errors } = this.state

    return (
      <div className="add-education">
        <div className="container">
          <div className="row">
            <div className="col-md-8 m  -auto">
              <Link to="/dashboard" className="btn btn-light">
                Voltar
              </Link>
              <h1 className="display-4 text-center">Adicionar Escolaridade</h1>
              <p className="lead text-center">
                Adicione seu histórico de estudos
              </p>
              <small className="d-block pb-3">* = campos obrigatórios</small>
              <form onSubmit={this.onSubmit}>
                <TextFieldGroup
                  type="text"
                  name="school"
                  placeholder="* Escola/Centro de estudo"
                  onChange={this.onChange}
                  value={this.state.school}
                  error={errors.school}
                />

                <TextFieldGroup
                  type="text"
                  name="degree"
                  placeholder="* Grau"
                  onChange={this.onChange}
                  value={this.state.degree}
                  error={errors.degree}
                />

                <TextFieldGroup
                  type="text"
                  name="fieldofstudy"
                  placeholder="* Campo de estudo"
                  onChange={this.onChange}
                  value={this.state.fieldofstudy}
                  error={errors.fieldofstudy}
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
                    Estudando atualmente
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
                  value="Adicionar estudo"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

AddEducation.propTypes = {
  errors: PropTypes.object.isRequired,
  addEducation: PropTypes.func.isRequired
}

const mapStateToProps = state => ({
  profile: state.profile,
  errors: state.errors
})

export default connect(mapStateToProps, { addEducation })(withRouter(AddEducation))

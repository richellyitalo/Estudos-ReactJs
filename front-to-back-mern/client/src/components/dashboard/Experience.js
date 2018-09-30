import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { connect } from 'react-redux'
import Moment from 'react-moment'

// Ações
import { deleteExperience } from '../../actions/profileActions'

class Experience extends Component {
  onDeleteClick = id => {
    this.props.deleteExperience(id)
  }

  render() {
    const experiences = this.props.experience.map(exp => (
      <tr key={exp._id}>
        <td width="30%">{exp.company}</td>
        <td width="30%">{exp.title}</td>
        <td>
          <Moment format="DD/MM/YYYY" date={exp.from} />
          {' - '}
          {exp.current || exp.to === null ? (
            'Atual'
          ) : (
            <Moment format="DD/MM/YYYY" date={exp.to} />
          )}
        </td>
        <td>
          <button
            className="btn btn-danger btn-sm"
            onClick={() => this.onDeleteClick(exp._id)}
          >
            Excluir
          </button>
        </td>
      </tr>
    ))

    return (
      <div>
        <h4 className="mb-4">Suas experiências</h4>
        <table className="table">
          <thead>
            <tr>
              <th>Empresa</th>
              <th>Título</th>
              <th>Período</th>
              <th />
            </tr>
          </thead>
          <tbody>
            {experiences}
            {experiences.length === 0 && (
              <tr>
                <td colSpan="100%" className="text-center">
                  Nenhuma experiência atribuida
                </td>
              </tr>
            )}
          </tbody>
        </table>
      </div>
    )
  }
}

Experience.propTypes = {
  experience: PropTypes.array.isRequired,
  deleteExperience: PropTypes.func.isRequired
}

export default connect(
  null,
  { deleteExperience }
)(Experience)

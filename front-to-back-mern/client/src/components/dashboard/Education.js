import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { connect } from 'react-redux'
import Moment from 'react-moment'

// Ações
import { deleteEducation } from '../../actions/profileActions'

class Education extends Component {
  onDeleteClick = id => {
    this.props.deleteEducation(id)
  }

  render() {
    const educations = this.props.education.map(edu => (
      <tr key={edu._id}>
        <td width="30%">{edu.school}</td>
        <td width="30%">{edu.degree}</td>
        <td>
          <Moment format="DD/MM/YYYY" date={edu.from} />
          {' - '}
          {edu.current || edu.to === null ? (
            'Atual'
          ) : (
            <Moment format="DD/MM/YYYY" date={edu.to} />
          )}
        </td>
        <td>
          <button className="btn btn-danger btn-sm"
            onClick={() => this.onDeleteClick(edu._id)}
          >Excluir</button>
        </td>
      </tr>
    ))

    return (
      <div>
        <h4 className="mb-4">Seus estudos</h4>
        <table className="table">
          <thead>
            <tr>
              <th>Escola</th>
              <th>Grau</th>
              <th>Período</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            {educations}
            {educations.length === 0 && (
              <tr>
                <td colSpan="100%" className="text-center">
                  Nenhuma escolaridade atribuida
                </td>
              </tr>
            )}
          </tbody>
        </table>
      </div>
    )
  }
}

Education.propTypes = {
  education: PropTypes.array.isRequired,
  deleteEducation: PropTypes.func.isRequired
}

export default connect(null, { deleteEducation })(Education)

import React, { Component } from 'react'
import PropTypes from 'prop-types'
import Moment from 'react-moment'

class ProfileCreds extends Component {
  render() {
    const { experience, education } = this.props.profile

    const expItems = experience.map(exp => (
      <li key={exp._id} className="list-group-item">
        <h4>{exp.company}</h4>
        <p>
          <Moment format="DD/MM/YYYY" data={exp.from} /> -
          {exp.to === null || exp.current ? (
            'Atual'
          ) : (
            <Moment format="DD/MM/YYYY" data={exp.to} />
          )}
        </p>
        <p>
          <strong>Posição: </strong> {exp.title}
        </p>
        <p>
          {exp.location === '' ? null : (
            <span>
              <strong>Localização: </strong>
              {exp.location}
            </span>
          )}
        </p>
        <p>
          {exp.description === '' ? null : (
            <span>
              <strong>Descrição: </strong>
              {exp.description}
            </span>
          )}
        </p>
      </li>
    ))

    const eduItems = education.map(edu => (
      <li key={edu._id} className="list-group-item">
        <h4>{edu.school}</h4>
        <p>
          <Moment format="DD/MM/YYYY" data={edu.from} /> -
          {edu.to === null || edu.current ? (
            'Atual'
          ) : (
            <Moment format="DD/MM/YYYY" data={edu.to} />
          )}
        </p>
        <p>
          <strong>Grau: </strong> {edu.degree}
        </p>
        <p>
          {edu.fieldofstudy === '' ? null : (
            <span>
              <strong>Campo de estuado: </strong>
              {edu.fieldofstudy}
            </span>
          )}
        </p>
        <p>
          {edu.description === '' ? null : (
            <span>
              <strong>Descrição: </strong>
              {edu.description}
            </span>
          )}
        </p>
      </li>
    ))

    return (
      <div className="row">
        <div className="col-md-6">
          <h3 className="text-center text-info">Experiências</h3>
          <ul className="list-group">{expItems}</ul>
        </div>
        <div className="col-md-6">
          <h3 className="text-center text-info">Estudos</h3>
          <ul className="list-group">{eduItems}</ul>
        </div>
      </div>
    )
  }
}

ProfileCreds.propTypes = {
  profile: PropTypes.object.isRequired
}

export default ProfileCreds

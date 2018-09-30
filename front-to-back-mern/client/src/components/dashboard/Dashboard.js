import React, { Component } from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'
import { Link } from 'react-router-dom'

// Componentes
import Spinner from '../common/Spinner'
import ProfileActions from './ProfileActions'
import Experience from './Experience'
import Education from './Education'

// Ações
import { getCurrentProfile, deleteAccount } from '../../actions/profileActions'

class Dashboard extends Component {
  componentDidMount() {
    this.props.getCurrentProfile()
  }

  onDeleteClick = e => {
    e.preventDefault()

    if (window.confirm('Deseja mesmo excluir sua conta?')) {
      this.props.deleteAccount()
    }
  }

  render() {
    const { user } = this.props.auth
    const { profile, loading } = this.props.profile

    let dashboardContent

    if (profile === null || loading) {
      dashboardContent = <Spinner />
    } else {
      if (Object.keys(profile).length > 0) {
        dashboardContent = (
          <div>
            <p className="lead text-muted">
              Bem vindo,{' '}
              <Link to={`/profile/${profile.handle}`}>{user.name}</Link>
            </p>

            <ProfileActions />

            <Experience experience={profile.experience} />
            <Education education={profile.education} />

            <div style={{ marginBottom: '60px' }} />
            <button onClick={this.onDeleteClick} className="btn btn-danger">
              Excluir minha conta
            </button>
          </div>
        )
      } else {
        dashboardContent = (
          <div>
            <p className="lead text-muted"> Bem vindo, {user.name}!</p>
            <p>
              Você ainda não configurou um perfil, por favor adicione algumas
              informações.
            </p>
            <Link to="/create-profile" className="btn btn-lg btn-info">
              Criar perfil
            </Link>
          </div>
        )
      }
    }

    return (
      <div className="dashboard">
        <div className="contain">
          <div className="row">
            <div className="col-md-12">
              <h1 className="display-4">Dashboard</h1>
              {dashboardContent}
            </div>
          </div>
        </div>
      </div>
    )
  }
}

Dashboard.propTypes = {
  getCurrentProfile: PropTypes.func.isRequired,
  deleteAccount: PropTypes.func.isRequired,
  auth: PropTypes.object.isRequired,
  profile: PropTypes.object.isRequired
}

const mapStateToProps = state => ({
  auth: state.auth,
  profile: state.profile
})

export default connect(
  mapStateToProps,
  { getCurrentProfile, deleteAccount }
)(Dashboard)

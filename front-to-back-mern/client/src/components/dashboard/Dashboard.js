import React, { Component } from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'
import { Link } from 'react-router-dom'

// Componentes
import Spinner from '../common/Spinner'

// Ações
import { getCurrentProfile } from '../../actions/profileActions'

class Dashboard extends Component {
  componentDidMount() {
    this.props.getCurrentProfile()
  }

  render() {
    const { user } = this.props.auth
    const { profile, loading } = this.props.profile

    let dashboardContent

    if (profile === null || loading) {
      dashboardContent = <Spinner />
    } else {
      if (Object.keys(profile).length > 0) {
        dashboardContent = <h3>TODO: Informações do perfil</h3>
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
  auth: PropTypes.object.isRequired,
  profile: PropTypes.object.isRequired
}

const mapStateToProps = state => ({
  auth: state.auth,
  profile: state.profile
})

export default connect(
  mapStateToProps,
  { getCurrentProfile }
)(Dashboard)

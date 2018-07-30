import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { connect } from 'react-redux'
import { Link } from 'react-router-dom'

import {
  setAllowRegistration,
  setDisableBalanceOnAdd,
  setDisableBalanceOnEdit
} from '../../actions/settingsActions'

class Settings extends Component {
  allowRegistrationChange = () => {
    this.props.setAllowRegistration()
  }

  disableBalanceOnAddChange = () => {
    this.props.setDisableBalanceOnAdd()
  }

  disableBalanceOnEditChange = () => {
    this.props.setDisableBalanceOnEdit()
  }

  render() {
    const {
      allowRegistration,
      disableBalanceOnAdd,
      disableBalanceOnEdit
    } = this.props.settings

    return (
      <div>
        <div className="row">
          <div className="col-md-6">
            <Link to="/" className="btn btn-link">
              <i className="fas fa-arrow-circle-left" /> Back To Dashboard
            </Link>
          </div>
        </div>

        <div className="card">
          <div className="card-header">Configurações</div>
          <div className="card-body">
            <form>
              <div className="form-group">
                <label>
                  Permitir Registro{' '}
                  <input
                    type="checkbox"
                    name="allowRegistration"
                    checked={!!allowRegistration}
                    onChange={this.allowRegistrationChange}
                  />
                </label>
              </div>
              <div className="form-group">
                <label>
                  Desativar Saldo no Cadastro{' '}
                  <input
                    type="checkbox"
                    name="disableBalanceOnAdd"
                    checked={!!disableBalanceOnAdd}
                    onChange={this.disableBalanceOnAddChange}
                  />
                </label>
              </div>
              <div className="form-group">
                <label>
                  Desativar Saldo na Edição{' '}
                  <input
                    type="checkbox"
                    name="disableBalanceOnEdit"
                    checked={!!disableBalanceOnEdit}
                    onChange={this.disableBalanceOnEditChange}
                  />
                </label>
              </div>
            </form>
          </div>
        </div>
      </div>
    )
  }
}

Settings.propTypes = {
  setDisableBalanceOnAdd: PropTypes.func.isRequired
}

const mapStateToProps = (state, props) => ({
  settings: state.settings
})

export default connect(
  mapStateToProps,
  {
    setAllowRegistration,
    setDisableBalanceOnAdd,
    setDisableBalanceOnEdit
  }
)(Settings)

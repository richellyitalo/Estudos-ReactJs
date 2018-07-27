import React, { Component } from 'react'
import PropTypes from 'prop-types'
import axios from 'axios'
import { Link } from 'react-router-dom'

import { Consumer } from '../../context'

class Contact extends Component {
  // static propTypes = {
  //   name: PropTypes.string.isRequired,
  //   email: PropTypes.string.isRequired,
  //   phone: PropTypes.string.isRequired
  // }
  state = {
    showContactInfo: false
  }

  onDeleteClick = async (id, dispatch) => {
    try {
      const res = await axios.delete(`https://jsonplaceholder.typicode.com/users/${id}`)
      dispatch({ type: 'DELETE_CONTACT', payload: id })
    } catch(e) {
      dispatch({ type: 'DELETE_CONTACT', payload: id })
    } finally {

    }
  }

  // deleteClick = () => {
  //   this.props.deleteContactHandler()
  // }

  render() {
    // DISTRUCTURING
    const { id, name, email, phone } = this.props.contact
    const { showContactInfo } = this.state

    return (
      <Consumer>
        {value => {
          const { dispatch } = value

          return (
            <div className="card card-body mb-3">
              <h4>
                {name + ' '}
                <i
                  onClick={() =>
                    this.setState({
                      showContactInfo: !showContactInfo
                    })
                  }
                  className="fa fa-sort-down"
                  style={{ cursor: 'pointer' }}
                />
                {/* <i className="fa fa-times"
                  style={styleDelete}
                  onClick={this.deleteClick}
                ></i> */}
                <i
                  className="fa fa-times"
                  style={styleDelete}
                  onClick={this.onDeleteClick.bind(this, id, dispatch)}
                />
                <Link to={`/edicao-contato/${id}`}
                  style={styleEdit}
                >
                  <i className="fa fa-pencil-alt"></i>
                </Link>
              </h4>
              {showContactInfo ? (
                <ul className="list-group">
                  <li className="list-group-item">Email: {email}</li>
                  <li className="list-group-item">Telefone: {phone}</li>
                </ul>
              ) : null}
            </div>
          )
        }}
      </Consumer>
    )
  }
}

// Contact.propTypes = {
//   name: PropTypes.string.isRequired,
//   email: PropTypes.string.isRequired,
//   phone: PropTypes.string.isRequired
// }
Contact.propTypes = {
  contact: PropTypes.object.isRequired
  // deleteContactHandler: PropTypes.func.isRequired
}

const styleDelete = {
  color: 'tomato',
  float: 'right',
  cursor: 'pointer'
}

const styleEdit = {
  float: 'right',
  cursor: 'pointer',
  marginRight: '10px'
}

export default Contact

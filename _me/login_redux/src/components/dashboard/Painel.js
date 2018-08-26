import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import { http } from '../../helpers'

class Painel extends Component {
  componentDidMount() {
    http.get('jao')
  }

  render() {
    return (
      <div>
        <h1>Painel</h1>
        <Link to="/login">Login</Link>
      </div>
    )
  }
}

export default Painel

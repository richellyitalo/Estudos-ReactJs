import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class Sidebar extends Component {
  render() {
    return (
      <Link to="/cliente/add" className="btn btn-success btn-block">
        <i className="fas fa-plus"></i> Novo Cliente
      </Link>
    )
  }
}

export default Sidebar
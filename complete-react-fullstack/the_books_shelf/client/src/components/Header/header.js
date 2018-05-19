import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import Fontawesome from 'react-fontawesome';

import Sidenav from './Sidenav/sidenav';

class Header extends Component {

  state = {
    showNav: false
  }

  hideNav () {
    this.setState({
      showNav: false
    })
  }

  showNav () {
    this.setState({
      showNav: true
    })
  }

  render () {
    return (
      <header>
        <div className="open_nav">
          <Fontawesome name="bars"
            style={{
              color: '#fff',
              padding: '10px',
              cursor: 'pointer'
            }}
            onClick={ () => this.showNav() }
          />
          <Sidenav
            showNav={ this.state.showNav }
            onHideNav={ () => this.hideNav() }
          />
        </div>
        <Link to="/" className="logo">
            The Book Shelf
        </Link>
      </header>
    )
  }
}

export default Header;
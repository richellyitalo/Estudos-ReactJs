import React , { Component } from 'react';

import Header from '../../components/Header/header';

import './layout.css';

class Layout extends Component {

  constructor(props) {
    super(props)

    this.state = {
      showNav: false
    }

    this.handleShowNav = this.handleShowNav.bind(this)
  }

  handleShowNav(action) {
    this.setState({
      showNav: action
    })
  }

  render() {
    return (
      <div>
        <Header
          showNav={this.state.showNav}
          onOpenNav={this.handleShowNav.bind(this, true)}
          onHideNav={() => this.handleShowNav(false)}
          />
        {this.props.children}
        <footer>Rodapé</footer>
      </div>
    );
  }
}

export default Layout;
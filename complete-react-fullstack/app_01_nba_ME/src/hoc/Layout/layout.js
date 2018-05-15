import React , { Component } from 'react';

import './layout.css';

import Header from '../../components/Header/header';
import Footer from '../../components/Footer/footer'

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
        <Footer />
      </div>
    );
  }
}

export default Layout;
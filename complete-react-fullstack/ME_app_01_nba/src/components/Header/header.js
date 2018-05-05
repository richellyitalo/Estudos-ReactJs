import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import FontAwesomeIcon from '@fortawesome/react-fontawesome'
import bars from '@fortawesome/fontawesome-free-solid/faBars'

import SideNavigation from './SideNavigation/sideNavigation';

import styles from './header.css';

const NavBars = (props) => (
  <div className={styles.bars}>
    <FontAwesomeIcon
      icon={bars}
      onClick={props.onOpenNav}
    />
  </div>
)

const Logo = () => (
  <Link
    className={styles.logo}
    to="/">
    <img src="/images/nba_logo.png" alt="NBA logo" />
  </Link>
)



class Header extends Component {
  
  render() {

    // const logo = () => {
    //   return (
    //     <Link
    //       className={styles.logo}
    //       to="/">
    //       <img src="/images/nba_logo.png" alt="NBA logo" />
    //     </Link>
    //   )
    // }

    return (
      <header className={styles.header}>
        <SideNavigation {...this.props} />
        <div className={styles.headerItem}>
          <NavBars {...this.props} />         
          <Logo />
        </div>
      </header>
    );
  }
}

export default Header;
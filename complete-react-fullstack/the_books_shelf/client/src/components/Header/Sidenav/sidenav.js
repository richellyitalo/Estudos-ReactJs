import React from 'react';
import Sidenav from 'react-simple-sidenav';

import SidenavItems from './sidenav_items';

const Nav = (props) => {
  return (
    <Sidenav
      showNav={props.showNav}
      onHideNav={props.onHideNav}
      navStyle={{
        background: '#242424',
        maxWidth: '220px',
        color: '#eee'
      }}
    >
      <SidenavItems hideNav={props.onHideNav} />
    </Sidenav>
  )
}

export default Nav;
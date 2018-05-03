import React from 'react';
import SimpleSideNav from 'react-simple-sidenav';

import SideNavItems from './sideNavItems'

const SideNav = (props) => {
  return (
    <div>
      <SimpleSideNav
        showNav={ props.showNav }
        onHideNav={ props.onHideNav }
        onOpenNav={ props.onOpenNav }
        navStyle={{
          background: '#242424',
          color: '#a4a4a4'
        }}
      >
        <SideNavItems />
      </SimpleSideNav>
    </div>
  );
}

export default SideNav;
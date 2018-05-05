import React from 'react';
import SideNav from 'react-simple-sidenav';

import SideNavigationItems from './sideNavigationItems' 

const SideNavigation = (props) => {
  return (
    <div>
      <SideNav
        showNav={props.showNav}
        onHideNav={props.onHideNav}
        navStyle={{
          background: '#030303',
          color: '#d4d4d4'
        }}
        >
        <SideNavigationItems />
      </SideNav>
    </div>
  );
}

export default SideNavigation;
import React from 'react'

import SimpleSideNav from 'react-simple-sidenav'

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
      
      </SimpleSideNav>
    </div>
  )
}

export default SideNav
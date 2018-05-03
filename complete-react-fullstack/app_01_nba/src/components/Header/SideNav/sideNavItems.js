import React from 'react';
import { Link } from 'react-router-dom';
import FontAwesome from 'react-fontawesome'

import styles from './sideNavItems.css'

const SideNavItems = () => {

  const items = [
    {
      type: styles.option,
      icon: 'sign-out',
      path: '/sign-out',
      text: 'Sign Out'
    },
    {
      type: styles.option,
      icon: 'home',
      path: '/',
      text: 'Home'
    },
    {
      type: styles.option,
      icon: 'file-text-o',
      path: '/news',
      text: 'News'
    },
    {
      type: styles.option,
      icon: 'play',
      path: '/videos',
      text: 'Videos'
    }
  ]

  const sideItems = () => (
    items.map((item, i) => (
      <div
        key={i}
        className={item.type}>
        <Link to={item.path}>
          <FontAwesome name={item.icon} />
          {item.text}
        </Link>
      </div>
    ))
  )
  
  return (
    <div>
      {sideItems()}
    </div>
  );
}

export default SideNavItems;
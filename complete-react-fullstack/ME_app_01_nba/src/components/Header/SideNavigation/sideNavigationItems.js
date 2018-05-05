import React from 'react';
import { Link } from 'react-router-dom';
import FontAwesomeIcon from '@fortawesome/react-fontawesome'
import { faHome, faPlay, faFileAlt, faSignOutAlt } from '@fortawesome/fontawesome-free-solid'

import styles from './sideNavigationItems.css';

const menus = [
  {
    type: styles.option,
    path: '/sign-out',
    icon: faSignOutAlt,
    text: 'Deslogar'
  },
  {
    type: styles.option,
    path: '/',
    icon: faHome,
    text: 'Início'
  },
  {
    type: styles.option,
    path: '/news',
    icon: faFileAlt,
    text: 'Notícias'
  },
  {
    type: styles.option,
    path: '/videos',
    icon: faPlay,
    text: 'Vídeos'
  }
]

const NavigationItems = () => {
  return (
    menus.map((item, i) => (
      <div
        key={i}
        className={item.type}>
        <Link to={item.path}>
          <FontAwesomeIcon icon={item.icon} />
          {item.text}
        </Link>
      </div>  
    ))
  )
}

const SideNavigationItems = () => (
    <NavigationItems />
)

export default SideNavigationItems;
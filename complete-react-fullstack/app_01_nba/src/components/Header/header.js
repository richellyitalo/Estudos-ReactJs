import React from 'react'

import style from './header.css'

import { Link } from 'react-router-dom'
import FontAwesome from 'react-fontawesome'

const Header = () => {

  const navBars = () => (
    <div className={style.bars}>
      <FontAwesome
        name="bars"
        style={{
          color: '#dfdfdf',
          padding: '10px',
          cursor: 'pointer'
        }}
        />
    </div>
  )

  const logo = () => (
    <Link
      to="/home"
      className={style.logo}>
      <img alt="NBA Logo" src="/images/nba_logo.png" />
    </Link>
  )
  
  return (
    <header className={style.header}>
      <div className={style.headerOpt}>
        { navBars() }
        { logo() }
      </div>
    </header>
  )
}

export default Header;
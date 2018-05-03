import React from 'react';
import { Link } from 'react-router-dom';

import { CURRENT_YEAR } from '../../config'

import styles from './footer.css'

const Footer = () => (
  <div className={styles.footer}>
    <Link to="/" className={styles.logo}>
      <img alt="NBA logo" src="/images/nba_logo.png" />
    </Link>
    <div className={styles.right}>
      @NBA {CURRENT_YEAR} All righs reserved
    </div>
  </div>
)

export default Footer;
import React from 'react';
import { Link } from 'react-router-dom';

import { CURRENT_YEAR } from '../../config';

import styles from './footer.css';

const Footer = () => (
  <div className={styles.footer}>
    <Link
      className={styles.logo}
      to="/">
      <img src="/images/nba_logo.png" alt="NBA logo" />
    </Link>
    <div className={styles.right}>
      NBA {CURRENT_YEAR} All rights reserverd.
    </div>
  </div>
)

export default Footer;
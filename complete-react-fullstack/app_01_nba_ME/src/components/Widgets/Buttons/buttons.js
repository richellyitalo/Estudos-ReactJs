import React from 'react';
import { Link } from 'react-router-dom';

import styles from './buttons.css';

const Buttons = (props) => {
  let template = null;

  switch (props.type) {
    case 'loadMore':
      template = (
        <div
          className={styles.buttonBlue}
          onClick={props.loadMore}>
          {props.text}
        </div>
      )
      break;
    case 'link':
      template = (
        <Link
          className={styles.buttonBlue}
          to={props.linkTo}
        >
          {props.text}
        </Link>
      )
      break;
    default:
      template = null;
  }

  return template;
}

export default Buttons;
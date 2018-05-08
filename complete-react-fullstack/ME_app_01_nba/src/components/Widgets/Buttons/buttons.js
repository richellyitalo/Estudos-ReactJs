import React from 'react';

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
    default:
      template = null;
  }

  return template;
}

export default Buttons;
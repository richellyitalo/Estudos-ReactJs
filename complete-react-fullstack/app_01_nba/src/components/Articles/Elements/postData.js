import React from 'react';

import styles from '../articles.css';

const postData = (props) => (
  <div className={styles.articlePostData}>
    <div>
      Date:
      <strong>{props.data.date}</strong>
    </div>
    <div>
      Author:
      <strong>{props.data.author}</strong>
    </div>
  </div>
)


export default postData;
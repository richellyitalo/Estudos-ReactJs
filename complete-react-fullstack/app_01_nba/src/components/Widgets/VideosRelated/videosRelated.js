import React from 'react';

import VideosListTemplate from '../VideosList/videosListTemplate';

import styles from './videosRelated.css';

const videosRelated = (props) => {
  return (
    <div className={styles.videosRelatedWrapper}>
      <VideosListTemplate
        data={props.data}
        teams={props.teams}
      />
    </div>
  )
}

export default videosRelated;
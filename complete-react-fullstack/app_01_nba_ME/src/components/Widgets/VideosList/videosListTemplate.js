import React from 'react';

import styles from './videosListTemplate.css';

const VideosListTemplate = (props) => {

  const videosList = props.data.map((item, i) => {
    return (
      <div
        key={i}
        className={styles.videoListWrapper}>
        <div className={styles.left}
          style={{
            backgroundImage: `url(/images/videos/${item.id}.jpg`
          }}>
          <div></div>
        </div>
        <div
          className={styles.right}>
        {item.title}
        </div>
      </div>
    )
  })
  return videosList;
}

export default VideosListTemplate;
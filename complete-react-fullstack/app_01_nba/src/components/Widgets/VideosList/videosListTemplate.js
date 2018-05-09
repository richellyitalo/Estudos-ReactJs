import React from 'react';
import { Link } from 'react-router-dom';

import CardInfo from '../CardInfo/cardInfo';
import { TransitionGroup, CSSTransition } from 'react-transition-group';

import styles from './videosListTemplate.css';

const VideosListTemplate = (props) => {
  const videosItems = props.data.map((item, i) => (
    <CSSTransition
      key={i}
      timeout={500}
      classNames={{
        enter: styles.VideosListEnter,
        enterActive: styles.VideosListEnterActive
      }}>
      <Link
        className={styles.videosListTemplateWrapper}
        to={`/videos/${item.id}`}>
        <div className={styles.left}
          style={{
            background: `url(/images/videos/${item.id}.jpg`
          }}>
          <div></div>
        </div>
        <div className={styles.right}>
          <CardInfo
            teams={props.teams}
            team={item.team}
            date={item.date}
          />
          <h2>{item.title}</h2>
        </div>
      </Link>
    </CSSTransition>
  ))

  return <TransitionGroup>{videosItems}</TransitionGroup>
}

export default VideosListTemplate;
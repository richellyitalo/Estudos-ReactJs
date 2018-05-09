import React from 'react';
import FontAwesome from 'react-fontawesome';

import styles from './cardInfo.css';

const CardInfo = (props) => {

  const teamName = (teams, teamId) => {
    let team = teams.find((item) => {
      return item.id === props.team;
    });

    if (team) {
      return team.name;
    }
  }

  return (
    <div className={styles.cardInfoItem}>
      <span className={styles.cardInfoTeam}>
        { teamName(props.teams, props.team) }
      </span>
      <span className={styles.cardInfoDate}>
        <FontAwesome name="calendar" />
        { props.date }
      </span>
    </div>
  )
}

export default CardInfo;
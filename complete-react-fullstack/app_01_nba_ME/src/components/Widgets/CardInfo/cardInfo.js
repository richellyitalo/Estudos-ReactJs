import React from 'react';

import styles from './cardInfo.css';

const CardInfo = (props) => {

  const teamName = (teams, teamId) => {
    const team = teams.find((item) => {
      return item.id === teamId;
    });

    if (team) {
      return team.name;
    }
  }

  return (
    <div className={styles.cardInfo}>
      <span className={styles.cardInfoTeam}>
        {teamName(props.teams, props.team)}
      </span>
      <span className={styles.cardInfoDate}>
        {props.date}
      </span>
    </div>
  )
}

export default CardInfo;
import React from 'react';

import TeamInfo from '../../Elements/teamInfo';

const header = (props) => {

  const renderTeam = (team) => {
    return team
      ? <TeamInfo team={team} />
      : null;
  }

  return (
    <div>
      { renderTeam(props.team) }
    </div>
  )
}

export default header;
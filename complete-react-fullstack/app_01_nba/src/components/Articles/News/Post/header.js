import React from 'react';

import TeamInfo from '../../Elements/teamInfo';
import PostData from '../../Elements/postData';

const header = (props) => {

  const teamInfo = (team) => {    
    return team
      ? <TeamInfo team={team} />
      : null;
  }

  const postData = (date, author) => {
    // return <PostData date={date} author={author} />
    return <PostData data={{date, author}} />
  }

  return (
    <div>
      { teamInfo(props.team) }
      { postData(props.date, props.author) }
    </div>
  )
}

export default header;
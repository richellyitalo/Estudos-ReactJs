import React from 'react';

import VideosList from '../../../Widgets/VideosList/videosList';

const VideosMain = () => {
  return (
    <VideosList
      type="card"
      start={0}
      amount={10}
      title={false}
      showMore={true}
    />
  )
}

export default VideosMain;
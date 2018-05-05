import React from 'react';

import NewsSlider from '../Widgets/NewsSlider/newsSlider';

const Home = () => {
  return (
    <div>
      <NewsSlider
        type="featured"
        start="0"
        amount="4"
        settings={{
          dots: true
        }}
        />
    </div>
  )
}

export default Home
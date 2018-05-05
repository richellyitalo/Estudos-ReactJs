import React from 'react';

import NewsSlider from '../Widgets/NewsSlider/newsSlider';

const Home = () => {
  return (
    <div>
      <NewsSlider
        start="0"
        amount="3"
        type="featured"
        settings={{
          dots: true
        }}
      />
    </div>
  );
}

export default Home;
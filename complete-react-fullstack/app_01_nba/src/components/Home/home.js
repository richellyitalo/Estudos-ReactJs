import React from 'react';

import NewsSlider from '../Widgets/NewsSlider/newsSlider';
import NewsList from '../Widgets/NewsList/newsList';

const Home = () => {
  return (
    <div>
      <NewsSlider
        type="featured"
        start={0}
        amount={3}
        settings={{
          dots: true
        }}
        />
        <NewsList
          type={"card"}
          start={3}
          amount={3}
          showMore={true}
        />
    </div>
  )
}

export default Home
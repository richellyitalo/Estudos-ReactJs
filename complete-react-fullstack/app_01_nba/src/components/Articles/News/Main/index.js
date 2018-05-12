import React from 'react';

import NewsSlider from '../../../Widgets/NewsSlider/newsSlider';
import NewsList from '../../../Widgets/NewsList/newsList';

const NewsMain = () => (
  <div>
    <NewsSlider
      type="featured"
      settings={{dots: false}}
      start={0}
      amount={3}
    />
    <NewsList
      type="cardMain"
      start={3}
      amount={3}
    />
  </div>
)

export default NewsMain;
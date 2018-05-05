import React from 'react';
import Slick from 'react-slick';
import { Link } from 'react-router-dom';

import styles from './newsSliderTemplate.css';

const NewsSliderTemplate = (props) => {
  let template = null;
  const settings = {
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    ...props.settings
  };

  switch(props.type) {
    case 'featured':
      template = props.data.map((item, i) => {
        return (
          <div
            key={i}
            className={styles.featuredItem}>
            <div
              className={styles.featuredImage}
              style={{
                background: `url(../images/articles/${item.id}.jpg`
              }}
            >
            </div>
            <Link
              to={`/articles/${item.id}`}>
              <div className={styles.featuredTitle}>
                {item.title}
              </div>
            </Link>
          </div>
        )
      })
      break;
    default:
      template = null;
      break;
  }

  return (
    <div className={styles.sliderContainer}>
      <Slick {...settings}>
        {template}
      </Slick>
    </div>
  );
}

export default NewsSliderTemplate;
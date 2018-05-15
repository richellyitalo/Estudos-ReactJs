import React from 'react';
import ReactSlickSlider from 'react-slick';
import { Link } from 'react-router-dom';

import styles from './newsSliderTemplate.css';

// TODO ver como importar estilos do slide para esse component

// require('slick-carousel/slick/slick.css');
// require('slick-carousel/slick/slick-theme.css');

const NewsSliderTemplate = (props) => { 
  let template = null;
  const settings = {
    dots: true,
    infinite: true,
    speed: 200,
    slidesToShow: 1,
    slidesToScroll: 1,
    ...props.settings
  }

  switch(props.type) {
    case 'featured':
      template = props.data.map((item, i) => {
        return (
          <div
            key={i}
            className={styles.sliderItem}>
            <div
              className={styles.sliderImage}
              style={{
                background: `url(../images/articles/${item.id}.jpg)`
              }}>
            </div>
            <div
              className={styles.sliderTitle}>
              <Link to={`/articles/${item.id}`}>
                {item.title}
              </Link>
            </div>
          </div>
        );
      })
      break;
    default:
      template = null;
      break;
  }

  return (
    <ReactSlickSlider {...settings}>
      {template}
    </ReactSlickSlider>
  )
}

export default NewsSliderTemplate;
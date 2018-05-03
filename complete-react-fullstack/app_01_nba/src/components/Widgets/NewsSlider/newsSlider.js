import React, { Component } from 'react';
import axios from 'axios';

import NewsSliderTemplate from './newsSliderTemplate';

class NewsSlider extends Component {
  state = {
    news: []
  }

  constructor(props) {
    super(props);

    axios.get('http://localhost:3004/articles?_start=0&_end=3')
      .then(({data}) => {
        this.setState({
          news: data
        });
      });
  }

  render() {
    return (
      <NewsSliderTemplate data={this.state.news} />
    )
  }
}

export default NewsSlider;
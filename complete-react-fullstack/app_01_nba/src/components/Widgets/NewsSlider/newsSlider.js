import React, { Component } from 'react';
import axios from 'axios';

import { URL } from '../../../config';

import NewsSliderTemplate from './newsSliderTemplate';

class NewsSlider extends Component {
  state = {
    news: []
  }

  constructor(props) {
    super(props);

    axios.get(`${URL}/articles?_start=${props.start}&_end=${props.start + props.amount}`)
      .then(({data}) => {
        this.setState({
          news: data
        });
      });
  }

  render() {
    return (
      <NewsSliderTemplate
        type={this.props.type}
        data={this.state.news}
        settings={this.props.settings}
        />
    )
  }
}

export default NewsSlider;
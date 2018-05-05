import React, { Component } from 'react';
import axios from 'axios';

import  NewsSliderTemplate from './newsSliderTemplate';

class NewsSlider extends Component {

  state = {
    news: []
  }

  constructor(props) {
    super(props);

    axios.get(`http://localhost:3004/articles?_start=${props.start}&_end=${props.start + props.amount}`)
      .then(({ data }) => {
        this.setState({
          news: data
        })
      })

  }

  render() {
    return (
      <NewsSliderTemplate
        data={this.state.news}
        type={this.props.type}
        settings={this.props.settings}
      />
    );
  }
}

export default NewsSlider;
import React, { Component } from 'react';
import axios from 'axios';

import { URL } from '../../../config';

class NewsList extends Component {

  constructor(props) {
    super(props);
    
    this.state = {
      items: [],
      start: props.start,
      end: props.start + props.amount,
      amount: props.amount
    }

    axios.get(`${URL}/articles?_start=${this.state.start}&_end=${this.state.end}`)
      .then((result) => {
        this.setState({
          items: [
            ...this.state.items,
            ...result.data
          ]
        })
      });
  }

  render() {
    return (
      <h1>List</h1>
    );
  }
}

export default NewsList;
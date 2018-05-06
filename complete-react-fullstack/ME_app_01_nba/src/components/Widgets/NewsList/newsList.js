import React, { Component } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

import { URL } from '../../../config';

import styles from './newsList.css';

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
      .then((response) => {
        console.log(response);
        this.setState({
          items: [
            ...this.state.items,
            ...response.data
          ]
        })
      })

  }

  renderNews = (type) => {  
    let template = null;

    switch(type) {
      case 'card':
        template = this.state.items.map((item, i) => (
          <div className={styles.newsListItem}>
            <h2>
              <Link to={`/articles/${item.id}`}>
                {item.title}
              </Link>
            </h2>
          </div>
        ));
        break;
      default:
        template = null;
    }

    return template;
  }

  render() {
    return (
      <h1>{ this.renderNews() }</h1>
    )
  }
}

export default NewsList;
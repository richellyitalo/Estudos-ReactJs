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

    this.request(this.state.start, this.state.end);

  }

  request = (start, end) => {
    axios.get(`${URL}/articles?_start=${start}&_end=${end}`)
      .then((response) => {
        this.setState({
          items: [
            ...this.state.items,
            ...response.data
          ]
        })
      })
  }

  loadMore = () => {
    let newEnd = this.state.end + this.state.amount;
    this.request(this.state.end, newEnd);
  }

  renderNews = (type) => {
    let template = null;

    switch(type) {
      case 'card':
        template = this.state.items.map((item, i) => (
          <div
            key={i}
            className={styles.newsListItem}>
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
      <div>
        { this.renderNews(this.props.type) }
        <div
          className={styles.showMore}
          onClick={() => this.loadMore()}>
          Show More
        </div>
      </div>
    )
  }
}

export default NewsList;
import React, { Component } from 'react';
import axios from 'axios';
import { TransitionGroup ,CSSTransition } from 'react-transition-group';
import { Link } from 'react-router-dom';

import { URL } from '../../../config';
import Button from '../Buttons/buttons';

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
      .then((result) => {
        this.setState({
          items: [
            ...this.state.items,
            ...result.data
          ]
        })
      });
  }

  loadMore = () => {
    let newEnd = this.state.end + this.state.amount;
    this.request(this.state.end, newEnd);
  }

  renderNews = (type) => {
    let template = null;

    switch (type) {
      case 'card':
        template = this.state.items.map((item, i) => (
          <CSSTransition
            key={i}
            classNames={{
              enter: styles.newsListWrapper,
              enterActive: styles.newsListWrapperEnter
            }}
            timeout={500}
          >
            <div>
              <div className={styles.newsListItem}>
                <Link to={`/articles/${item.id}`}>
                  {item.title}
                </Link>
              </div>
            </div>
          </CSSTransition>
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
        <TransitionGroup
          component="div"
          className="list">
          { this.renderNews(this.props.type) }
        </TransitionGroup>
        <Button
          type="loadMore"
          loadMore={() => this.loadMore()}
          text={"Load More News"}
        />
      </div>
    );
  }
}

export default NewsList;
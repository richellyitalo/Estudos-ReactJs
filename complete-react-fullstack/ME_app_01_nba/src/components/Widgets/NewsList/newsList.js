import React, { Component } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';
import { TransitionGroup, CSSTransition } from 'react-transition-group';

import { URL } from '../../../config';
import Button from '../Buttons/buttons';

import styles from './newsList.css';
import CardInfo from '../CardInfo/cardInfo';

class NewsList extends Component {

  constructor(props) {
    super(props);

    this.state = {
      teams: [],
      items: [],
      start: props.start,
      end: props.start + props.amount,
      amount: props.amount
    }

    this.request(this.state.start, this.state.end);
    this.fetchTeams();
  }

  fetchTeams = () => {
    axios.get(`${URL}/teams`)
      .then((response) => {
        this.setState({
          teams: response.data
        })
      })
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
          <CSSTransition
            key={i}
            timeout={500}
            classNames={{
              enter: styles.newsListWrapper,
              enterActive: styles.newsListWrapperEnter
            }}
          >
            <div
              className={styles.newsListItem}>
              <h2>
                <Link to={`/articles/${item.id}`}>
                  <CardInfo
                    teams={this.state.teams}
                    team={item.team}
                    date={item.date}
                  />
                  {item.title}
                </Link>
              </h2>
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
        <TransitionGroup>
          { this.renderNews(this.props.type) }
        </TransitionGroup>
        <Button
          type={"loadMore"}
          loadMore={() => this.loadMore()}
          text={"Show More News"}
        />
      </div>
    )
  }
}

export default NewsList;
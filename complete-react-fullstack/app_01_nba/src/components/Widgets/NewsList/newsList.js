import React, { Component } from 'react';
import axios from 'axios';
import { TransitionGroup ,CSSTransition } from 'react-transition-group';
import { Link } from 'react-router-dom';

import { URL } from '../../../config';
import Button from '../Buttons/buttons';
import CardInfo from '../CardInfo/cardInfo';

import styles from './newsList.css';

class NewsList extends Component {

  constructor(props) {
    super(props);
    
    this.state = {
      items: [],
      teams: [],
      start: props.start,
      end: props.start + props.amount,
      amount: props.amount
    }

    this.request(this.state.start, this.state.end);
    this.fetchTeams();
  }

  request = (start, end) => {
    axios.get(`${URL}/articles?_start=${start}&_end=${end}`)
      .then((result) => {
        this.setState({
          items: [
            ...this.state.items,
            ...result.data,
          ],
          start,
          end
        })
      });
  }

  fetchTeams = () => {
    axios.get(`${URL}/teams`)
      .then((result) => {
        this.setState({
          teams: result.data
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
                <CardInfo
                  teams={this.state.teams}
                  team={item.team}
                  date={item.date}
                />
                <Link to={`/articles/${item.id}`}>
                  {item.title}
                </Link>
              </div>
            </div>
          </CSSTransition>
        ));
        break;
      case 'cardMain':
        template = this.state.items.map((item, i) => (
          <CSSTransition
            key={i}
            classNames={{
              enter: styles.newsListWrapper,
              enterActive: styles.newsListWrapperEnter
            }}
            timeout={500}
          >
            <Link to={`/articles/${item.id}`}>
              <div className={styles.flex_wrapper}>
                <div className={styles.left}
                  style={{
                    background: `url(/images/articles/${item.image})`
                  }}>
                  <div></div>
                </div>
                <div className={styles.right}>
                  <CardInfo
                    teams={this.state.teams}
                    team={item.team}
                    date={item.date}
                  />
                  <h2>{item.title}</h2>
                </div>
              </div>
            </Link>
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
          type="cardMain"
          loadMore={() => this.loadMore()}
          text={"Load More News"}
        />
      </div>
    );
  }
}

export default NewsList;
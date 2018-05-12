import React , { Component } from 'react';
import axios from 'axios';

import { URL } from '../../../../config';
import Header from './header';

import styles from './../../articles.css';

class NewsArticles extends Component {
  constructor(props) {
    super(props);

    this.state = {
      article: {},
      team: null
    }

    this.fetchArticle();
  }

  fetchArticle() {
    const articleId = this.props.match.params.id;
    axios.get(`${URL}/articles/${articleId}`)
      .then((response) => {
        let article = response.data;

        axios.get(`${URL}/teams/${article.team}`)
          .then((responseTeam) => {
            this.setState({
              article,
              team: responseTeam.data
            })
          });
      });
  }

  render() {
    const article = this.state.article;
    
    return (
      <div className={styles.newsArticleWrapper}>
        <Header
          team={this.state.team}
          date={this.state.article.date}
          author={this.state.article.author}
        />
        <div className={styles.articleBody}>
          <h1>{ article.title }</h1>
          <div
            className={styles.articleImage}
            style={{
              backgroundImage: `url(/images/articles/${article.image})`
            }}></div>
          <div className={styles.articleText}>
          { article.body }
          </div>
        </div>
      </div>
    );
  }
}

export default NewsArticles;
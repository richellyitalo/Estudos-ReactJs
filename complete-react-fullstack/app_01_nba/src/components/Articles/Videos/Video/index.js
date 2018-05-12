import React, { Component } from 'react';
import axios from 'axios';

import {URL} from '../../../../config';

import Header from './header';
import VideosRelated from '../../../Widgets/VideosRelated/videosRelated';

import styles from './../../articles.css';

class videoArticle extends Component {

  constructor(props) {
    super(props);
    this.state = {
      video: {},
      team: null,
      teams: [],
      related: []
    }

    this.fetch();
  }

  fetch() {
    axios.get(`${URL}/videos/${this.props.match.params.id}`)
      .then(response => {
        let video = response.data;

        axios.get(`${URL}/teams/${video.team}`)
          .then(response => {
            this.setState({
              video,
              team: response.data
            })

            this.getRelated();
          });
      });
  }

  getRelated = () => {
    axios.get(`${URL}/teams`)
      .then(response => {
        let teams = response.data;

        axios.get(`${URL}/videos?q=${this.state.team.city}&_limit=3`)
          .then(response => {
            this.setState({
              teams,
              related: response.data
            })
          })
      });
  }

  render() {
    const video = this.state.video;
    return (
      <div className={styles.newsArticleWrapper}>
        <Header
          team={this.state.team}
          date={video.date}
          author={video.author}
        />
        <div className={styles.videoWrapper}>
          <h1>{video.title}</h1>
          <iframe
            title={video.title}
            width="100%"
            height="300"
            src={`http://youtube.com/embed/${video.url}`}
          >
          </iframe>
        </div>
        <VideosRelated
          data={this.state.related}
          teams={this.state.teams}
        />
      </div>
    )
  }
}

export default videoArticle;
import React, { Component } from 'react';
import axios from 'axios';

import { URL } from '../../../config';
import VideosListTemplate from './videosListTemplate';
import Button from '../Buttons/buttons';

import styles from './videosList.css';

class VideosList extends Component {

  constructor(props) {
    super(props);

    this.state = {
      videos: [],
      teams: [],
      start: props.start,
      amount: props.amount,
      end: props.start + props.amount
    };

    this.request(this.state.start, this.state.end);
    this.fetchTeams();
  }

  request = (start, end) => {
    axios.get(`${URL}/videos?_start=${start}&_end=${end}`)
      .then(({data}) => {
        this.setState({
          videos: [
            ...this.state.videos,
            ...data
          ],
          start,
          end
        })
      })
  }

  fetchTeams = async () => {
    const response = await axios.get(`${URL}/teams`);
    this.setState({
      teams: response.data
    });
  }

  loadMore() {
    const newEnd = this.state.end + this.state.amount;

    this.request(this.state.end, newEnd);
  }

  renderTitle = () => {
    return this.props.title
      ? <div className={styles.videosListTitle}>
         <strong>NBA</strong> Videos
        </div>
      : null;
  }

  renderVideos = () => {
    let template = null;

    switch(this.props.type) {
      case 'card':
        template = <VideosListTemplate
          data={this.state.videos}
          teams={this.state.teams}
          />
        break;
      default:
        template = null;
        break;
    }

    return template;
  }

  renderMore = () => {
    return this.props.loadMore
    ? <Button
        type="loadMore"
        loadMore={this.loadMore.bind(this)}
        text="Load More Videos"
      />
    : <Button
      type="link"
      linkTo="/videos"
      text="Show More Videos"
    />;
  }

  render () {

    return (
      <div>
        { this.renderTitle() }
        { this.renderVideos() }
        { this.renderMore() }
      </div>
    )
  }
}

export default VideosList;
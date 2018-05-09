import React, { Component } from 'react';
import axios from 'axios';

import { URL } from '../../../config';
import Button from '../Buttons/buttons';
import VideosListTemplate from './videosListTemplate';

import styles from './videosList.css';

class VideosList extends Component {

  constructor (props) {
    super(props);
    
    this.state = {
      videos: [],
      teams: [],
      start: props.start,
      end: props.start + props.amount,
      amount: props.amount
    }

    this.request(this.state.start, this.state.end);
    this.fetchTeams();
  }

  request = (start, end) => {
    axios.get(`${URL}/videos?_start=${start}&_end=${end}`)
      .then((response) => {
        this.setState({
          videos: [
            ...this.state.videos,
            ...response.data
          ],
          start,
          end
        })
      });
  }

  fetchTeams = () => {
    axios.get(`${URL}/teams`)
      .then((response) => {
        this.setState({
          teams: response.data
        })
      });
  }

  renderTitle = () => {
    return this.props.title
      ? <h3><strong>NBA</strong> Videos</h3>
      : null;
  }

  renderVideos = () => {
    let template = null;

    switch (this.props.type) {
      case 'card':
        template = <VideosListTemplate
          data={this.state.videos}
          teams={this.state.teams}
          />;
        break;
      default:
        template = null;
    }

    return template;
  }

  renderButton = () => {
    return this.props.showMore
      ? <Button 
          type="loadMore"
          text="Load More Videos"
          loadMore={() => this.loadMore()}
        />
      : <Button
          type="linkTo" 
          text="More Videos"
          linkTo="/videos" />;
  }

  loadMore = () => {
    let newEnd = this.state.end + this.state.amount;
    this.request(this.state.end, newEnd);
  }

  render() {
    return (
      <div className={styles.videosListWrapper}>
        { this.renderTitle() }
        { this.renderVideos() }
        { this.renderButton() }
      </div>
    );
  }
}

export default VideosList;
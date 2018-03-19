import React, { Component } from 'react';

const Avatar = props => <img className="Avatar" src={props.author.avatarUrl} alt={props.author.name} height="150"/>;

const Info = props => {
  return (
    <div className="UserInfo-name">
      By: {props.author.name}
    </div>
  );
};

const Text = props => {
  return (
    <div className="Comment-text">
      "{props.content}"
    </div>
  );
};

const Date = props => {
  return (
    <div className="Comment-date">
      #: {props.content}
    </div>
  );
};

class UserInfo extends Component {
  render () {
    return (
        <div className="UserInfo">
          <Avatar author={this.props.author} />
          <Info author={this.props.author} />
        </div>
    );
  }
}


class Comment extends Component {
  render() {
    return (
      <div className="Comment">
        <UserInfo author={this.props.comment.author} />
        <Text content={this.props.comment.content} />
        <Date content={this.props.comment.date} />
      </div>
    );
  }
}

export default Comment;
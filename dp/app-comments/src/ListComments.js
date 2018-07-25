import React, { Component } from 'react'

import Comment from './Comment'

class ListComments extends Component {
  renderComment(key, comment) {
    return <Comment key={key} comment={comment} />
  }

  render() {
    return (
      <div>
        <ul className="m-t-10 list-unstyled">
          {
            Object.keys(this.props.comments)
              .reverse()
              .map(key => this.renderComment(key, this.props.comments[key]))
          }
        </ul>
      </div>
    )
  }
}

export default ListComments
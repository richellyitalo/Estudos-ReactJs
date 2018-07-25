import React, { Component } from 'react'
import 'bootstrap-css-only'

import './App.css'

import NewComment from './NewComment'
import ListComments from './ListComments'

import base from './base'

class App extends Component {
  constructor(props) {
    super(props)

    this.state = {
      comments: {
      }
    }

    base.syncState('comments', {
      context: this,
      state: 'comments'
    })

    this.postNewComment = this.postNewComment.bind(this)
  }

  postNewComment(comment) {
    let comments = {...this.state.comments}
    const timestamp = Date.now()

    comments[`cmt-${timestamp}`] = comment

    this.setState({
      comments
    })
  }

  render() {
    return (
      <div className="container">
        <div className="row">
          <div className="offset-md-3 col-md-6">
            <h2>App Comentários | Firebase</h2>
            <NewComment postNewComment={this.postNewComment} />
            <ListComments comments={this.state.comments} />
          </div>
        </div>
      </div>
    )
  }
}

export default App

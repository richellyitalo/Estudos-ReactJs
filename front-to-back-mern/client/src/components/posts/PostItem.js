import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { connect } from 'react-redux'
import { Link } from 'react-router-dom'
import classnames from 'classnames'

// Ações
import { deletePost, addLike, removeLike } from '../../actions/postActions'

class PostItem extends Component {
  onDeleteClick = id => {
    this.props.deletePost(id)
  }

  onClickLike = id => {
    this.props.addLike(id)
  }

  onClickUnlike = id => {
    this.props.removeLike(id)
  }

  userInLikes = likes => {
    const { auth } = this.props

    return likes.some(like => like.user === auth.user.id)
  }

  render() {
    const { post, auth, showActions } = this.props

    return (
      <div className="card card-body mb-3">
        <div className="row">
          <div className="col-md-2">
            <a href="profile.html">
              <img
                className="rounded-circle d-none d-md-block"
                src={post.avatar}
                alt=""
              />
            </a>
            <br />
            <p className="text-center">{post.name}</p>
          </div>
          <div className="col-md-10">
            <p className="lead">{post.text}</p>
            {showActions && (
              <span>
                <button
                  onClick={() => this.onClickLike(post._id)}
                  type="button"
                  className="btn btn-light mr-1"
                >
                  <i
                    className={classnames('fas fa-thumbs-up', {
                      'text-info': this.userInLikes(post.likes)
                    })}
                  />
                  <span className="badge badge-light">{post.likes.length}</span>
                </button>
                <button
                  onClick={() => this.onClickUnlike(post._id)}
                  type="button"
                  className="btn btn-light mr-1"
                >
                  <i className="text-secondary fas fa-thumbs-down" />
                </button>
                <Link to={`/post/${post._id}`} className="btn btn-info mr-1">
                  Comentários
                </Link>
                {post.user === auth.user.id && (
                  <button
                    type="button"
                    onClick={() => this.onDeleteClick(post._id)}
                    className="btn btn-danger mr-1"
                  >
                    <i className="fas fa-times" />
                  </button>
                )}
              </span>
            )}
          </div>
        </div>
      </div>
    )
  }
}

PostItem.defaultProps = {
  showActions: true
}

PostItem.propTypes = {
  auth: PropTypes.object.isRequired,
  post: PropTypes.object.isRequired,
  deletePost: PropTypes.func.isRequired,
  addLike: PropTypes.func.isRequired,
  removeLike: PropTypes.func.isRequired,
  showActions: PropTypes.bool
}

const mapStateToProps = state => ({
  auth: state.auth
})

export default connect(
  mapStateToProps,
  { deletePost, addLike, removeLike }
)(PostItem)

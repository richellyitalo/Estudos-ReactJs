import React, { Component } from 'react';
import { connect } from 'react-redux';
import moment from 'moment';
import { Link } from 'react-router-dom';
import Fontawesome from 'react-fontawesome';

import { getUserPosts } from '../../actions';

class Reviews extends Component {

  renderPosts = (user) => (
    user.usersPosts
    ? user.usersPosts.map((item, i) => (
      <tr key={i}>
        <td>
          <Link to={`/user/edit-post/${item.id}`}>
            {item.name}
            <Fontawesome name="pencil" />
          </Link>
        </td>
        <td>{item.author}</td>
        <td>{moment(item.created).format('D/M/Y')}</td>
      </tr>
    ))
    : null
  )

  constructor(props) {
    super(props);

    props.dispatch(getUserPosts(props.user.id));
  }

  render () {
    return (
      <div className="user_posts">
        <h4>Seus Posts</h4>
        <table>
          <thead>
            <tr>
              <th>Nome</th>
              <th>Autor</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody>
            { this.renderPosts(this.props.users) }
          </tbody>
        </table>
      </div>
    )
  }
}

function mapStateToProps(state) {
  return {
    users: state.users
  }
}

export default connect(mapStateToProps)(Reviews);
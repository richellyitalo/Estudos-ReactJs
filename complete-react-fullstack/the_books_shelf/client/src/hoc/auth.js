import React, { Component } from 'react';
import { connect } from 'react-redux';

import { auth } from '../actions';

export default function (ComposedComponent, reload = null) {
  class Authentication extends Component {

    constructor(props) {
      super(props);
      this.state = {
        loading: true
      }

      props.dispatch(auth());
    }

    componentWillReceiveProps(nextProps) {
      this.setState({loading: false});
      if (!nextProps.users.login) {
        if (reload) {
          nextProps.history.push('/login')
        }
      } else {
        if (reload === false) {
          nextProps.history.push('/user');
        }
      }
    }

    render () {
      if (this.state.loading) {
        return <div className="loader">Carregando...</div>;
      }
      return (
        <ComposedComponent {...this.props} user={this.props.users.login} />
      )
    }
  }

  function mapStateToProps(state) {
    return {
      users: state.users
    }
  }

  return connect(mapStateToProps)(Authentication);
}

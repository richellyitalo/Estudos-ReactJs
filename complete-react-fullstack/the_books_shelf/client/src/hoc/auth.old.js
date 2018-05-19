import React, { Component } from 'react';
import { connect } from 'react-redux';

import { auth } from '../actions';

export default function (ComposedComponent) {
  class AuthenticationCheck extends Component {

    constructor(props) {
      super(props);

      this.state = {
        loading: true
      }

      props.dispatch(auth());
    }

    componentWillReceiveProps(nextProps) {
      if (nextProps.users.login.isAuth) {
        this.setState({
          loading: false
        });
      } else {
        this.props.history.push('/login')
      }
    }
    
    render() {
      if (this.state.loading) {
        return (<div className="loader">Carregando...</div>);
      }
      return <ComposedComponent {...this.props} user="" />;
    }
  }

  function mapStateToProps(state) {
    return {
      users: state.users
    }
  }

  return connect(mapStateToProps)(AuthenticationCheck);
}
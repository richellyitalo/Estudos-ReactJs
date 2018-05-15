import React, { Component } from 'react';
import axios from 'axios';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';

import Search from '../components/search';
import Artistlist from '../components/artistlist';

import { artistList } from '../actions';

class HomeContainer extends Component { 

    componentWillMount() {
      this.props.artistList();
    }


    getKeywords = (event) => {
        let key = event.target.value;

        console.log(key)
    }

    render(){
        console.log(this.props);
        return (
            <div>
                <Search keywords={this.getKeywords}/>
                <Artistlist artists={ this.props.artists.artistsList }/>
            </div>
        )
    }
    
}

function mapStateToProps (state) {
  return {
    artists: state.artists
  }
}

function mapDispatchToprops (dispatch) {
  return bindActionCreators({artistList}, dispatch);
}

export default connect(mapStateToProps, mapDispatchToprops)(HomeContainer);
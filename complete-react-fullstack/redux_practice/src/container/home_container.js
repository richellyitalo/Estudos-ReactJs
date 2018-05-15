import React, { Component } from 'react';

import Search from '../components/search';
import ArtistList from '../components/artistlist';

import { connect } from 'react-redux';
import { artistListAll, artistList } from '../actions';
import { bindActionCreators } from 'redux';

class HomeContainer extends Component { 

    componentWillMount() {
      this.props.artistListAll();
    }


    getKeywords = (event) => {
        let key = event.target.value;
        this.props.artistList(key);
    }

    render(){
        return (
            <div>
                <Search keywords={this.getKeywords}/>
                <ArtistList artists={this.props.artists.artistList} />
            </div>
        )
    }
    
}

function mapStateToProps(state) {
  return {
    artists: state.artists
  }
}

function mapDispatchToProps(dispatch) {
  return bindActionCreators({artistListAll, artistList}, dispatch);
}

export default connect(mapStateToProps, mapDispatchToProps)(HomeContainer);
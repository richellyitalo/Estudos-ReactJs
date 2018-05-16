import React, { Component } from 'react';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';

import Search from '../components/search';
import Artistlist from '../components/artistlist';

import { artistsAll, artistsSearch } from '../actions';

class Home extends Component {

    componentWillMount() {
      this.props.artistsAll();
    }

    getKeywords = (event) => {
        let key = event.target.value;

        this.props.artistsSearch(key);
    }

    render(){
        return (
            <div>
                <Search keywords={ this.getKeywords }/>
                <Artistlist artists={ this.props.artists.artistsAll }/>
            </div>
        )
    }
    
}

function mapStateToProps(state) {
  return {
    artists: state.artists
  }
}

// function mapDispatchToProps(dispatch) {
//   return {
//     artistsAll: () => {
//       dispatch(artistsAll())
//     }
//   }
// }
function mapDispatchToProps(dispatch) {
  return bindActionCreators({
    artistsAll,
    artistsSearch
  }, dispatch);
}

export default connect(mapStateToProps, mapDispatchToProps)(Home);
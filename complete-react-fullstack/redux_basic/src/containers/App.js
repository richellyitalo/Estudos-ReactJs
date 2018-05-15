import React, { Component } from 'react';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';

// para ser usado diretamento como mapDispatchToProps
// import * as mapsDispatchToProps from './actions';

// Aqui iremos fazer um bindActionCreators
import { dirList, moviesList } from '../actions';
import MoviesList from '../components/MoviesList';

class App extends Component {

  constructor(props) {
    super(props);

    this.props.moviesList();
    this.props.dirList();
  }

  renderDirectors = (directors) => (
    directors
    ? directors.map((item, i) => (
      <div key={i}>{item.id} - {item.name}</div>
    ))
    : null
  )

  render() {
    return (
      <div>
        <MoviesList {...this.props} />
        <h2>Diretores</h2>
        { this.renderDirectors(this.props.data.directors) }
      </div>
    );
  }
}

const mapStateToProps = (state) => {
  return {
    data: state.movies
  }
}

const mapDispatchToProps = (dispatch) => {
  return bindActionCreators({
    moviesList,
    dirList
  }, dispatch);
}

export default connect(
  mapStateToProps,
  mapDispatchToProps
)(App);
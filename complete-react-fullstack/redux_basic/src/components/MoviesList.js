import React from 'react';

const MoviesList = (props) => {

  const renderMovies = (movies) => (
    movies
    ? movies.map((item, i) => (
      <div key={i}>{item.id} - {item.name}</div>
    ))
    : null
  )

  return (
    <div>
      <h2>Filmes</h2>
      { renderMovies(props.data.movies) }
    </div>
  )
}

export default MoviesList;
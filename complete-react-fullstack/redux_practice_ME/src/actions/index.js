import axios from 'axios';
const URL = 'http://localhost:3004';

export function artistList () {
  const request = axios.get(`${URL}/artists?_limit=6`)
    .then(response => response.data);

  return {
    type: 'GET_ARTISTS_ALL',
    payload: request
  }
}

export function artist(key) {
  const request = axios.get(`${URL}/artists?q=${key}`)
    .then(response => response.data);

  return {
    type: 'GET_ARTISTS',
    payload: request
  };
}

export function artistDetail(id) {
  const request = axios.get(`${URL}/artists/${id}`)
    .then(response => response.data);

  return {
    type: 'GET_ARTIST_DETAIL',
    payload: request
  };
}

export function clearArtistDetail() {
  return {
    type: 'CLEAR_ARTIST_DETAIL',
    payload: null
  }
}
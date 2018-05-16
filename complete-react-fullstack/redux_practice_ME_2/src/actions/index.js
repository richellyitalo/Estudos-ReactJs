import axios from 'axios';

const URL = 'http://localhost:3004';

export function artistsAll() {
  const response = axios.get(`${URL}/artists`)
      .then(response => response.data);

  return {
    type: 'ARTISTS_ALL',
    payload: response
  }
}

export function artistsSearch(keyword) {
  const response = axios.get(`${URL}/artists?q=${keyword}`)
      .then(response => response.data);

  return {
    type: 'ARTISTS_SEARCH',
    payload: response
  }
}

export function artistDetail(id) {
  const response = axios.get(`${URL}/artists/${id}`)
      .then(response => response.data);

  return {
    type: 'ARTIST_DETAIL',
    payload: response
  }
}

export function clearArtist(id) {
  return {
    type: 'CLEAR_ARTIST',
    payload: null
  }
}
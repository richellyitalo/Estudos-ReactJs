import axios from 'axios';

const URL = 'http://localhost:3004';

export function artistListAll() {
  const request = axios.get(`${URL}/artists`)
    .then(response => response.data);
  
  return {
    type: 'GET_ARTISTS_ALL',
    payload: request
  }
}

export function artistList(key) {
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
  }
}

export function clearArtist() {
  return {
    type: 'CLEAR_ARTIST',
    payload: null
  }
}
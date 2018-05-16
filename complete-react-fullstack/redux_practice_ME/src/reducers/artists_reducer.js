export default function(state = {}, action) {
  switch (action.type) {
    case 'GET_ARTISTS_ALL': {
      return { ...state, artistsList: action.payload }
    }
    case 'GET_ARTISTS': {
      return { ...state, artistsList: action.payload }
    }
    case 'GET_ARTIST_DETAIL': {
      return { ...state, artistDetail: action.payload }
    }
    case 'CLEAR_ARTIST_DETAIL': {
      return { ...state, artistDetail: action.payload }
    }
    default: {
      return state;
    }
  }
}
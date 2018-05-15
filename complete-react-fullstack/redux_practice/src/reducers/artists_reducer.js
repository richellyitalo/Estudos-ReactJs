export default (state = {}, action) => {
  switch (action.type) {
    case 'GET_ARTISTS_ALL':
      return { ...state, artistList: action.payload };
    case 'GET_ARTISTS':
      return { ...state, artistList: action.payload };
    case 'GET_ARTIST_DETAIL':
      return { ...state, artistDetail: action.payload };
    case 'CLEAR_ARTIST':
      return { ...state, artistDetail: action.payload };
    default:
      return state;
  }
}
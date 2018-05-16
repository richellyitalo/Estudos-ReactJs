export default function(state = {}, action) {
  console.log(action);
  switch (action.type) {
    case 'ARTISTS_ALL':
      return { ...state, artistsAll: action.payload};
    case 'ARTISTS_SEARCH':
      return { ...state, artistsAll: action.payload};
    case 'ARTIST_DETAIL':
      return { ...state, artistDetail: action.payload};
    case 'CLEAR_ARTIST':
      return { ...state, artistDetail: action.payload};
    default:
      return state;
  }
}
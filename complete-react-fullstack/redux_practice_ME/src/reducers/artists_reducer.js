export default function(state = {}, action) {
  switch (action.type) {
    case 'GET_ARTISTS_ALL': {
      console.log(action);
      return { ...state, artistsList: action.payload }
    }
    default: {
      return state;
    }
  }
}
export default function (state = {}, action) {
  switch (action.type) {
    case 'GET_BOOKS':
      return {
        ...state,
        list: action.payload
      }
    case 'GET_BOOK_WITH_REVIEWER':
      return {
        ...state,
        book: action.payload.book,
        reviewer: action.payload.reviewer
      }
    case 'CLEAR_BOOK_WITH_REVIEWER':
      return {
        ...state,
        book: action.payload.book,
        reviewer: action.payload.reviewer
      }
    case 'ADD_BOOK':
      return {
        ...state,
        newbook: action.payload
      }
    case 'CLEAR_NEWBOOK':
      return {
        ...state,
        newbook: action.payload
      }
    case 'GET_BOOK':
      return {
        ...state,
        book: action.payload
      }
    case 'UPDATE_BOOK':
      return {
        ...state,
        updateBook: action.payload.success,
        book: action.payload.book
      }
    case 'DELETE_BOOK':
      return {
        ...state,
        deletedBook: action.payload.success
      }
    case 'CLEAR_BOOK':
      return {
        ...state,
        book: action.payload.book,
        deletedBook: action.payload.deletedBook,
        updateBook: action.payload.updateBook
      }
    default:
      return state;
  }
}
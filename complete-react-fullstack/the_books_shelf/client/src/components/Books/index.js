import React, { Component } from 'react';
import { connect } from 'react-redux';

import { getBookWithReviewer, clearBookWithReviewer } from '../../actions';

class BookView extends Component {

  constructor(props) {
    super(props);

    props.dispatch(getBookWithReviewer(props.match.params.id));
  }

  renderBook(books) {
    return books.book
    ? <div className="br_container">
      <div className="br_header">
        <h2>{ books.book.name }</h2>
        <h5>{ books.book.author }</h5>
        <div className="br_viewer">
          <span>Revisão por:</span> { books.reviewer.name} { books.reviewer.email }
        </div>
        <div className="br_box">
          <div className="left">
            <div>
              <span>Páginas:</span> { books.book.pages } 
            </div>
            <div>
              <span>Valor:</span> { books.book.price } 
            </div>
          </div>
          <div className="right">
            <span>Rating</span>
            <div>{books.book.rating}</div>
          </div>
        </div>
      </div>
    </div>
    : null
  }

  render() {
    return (
      <div>
        { this.renderBook(this.props.books) }
      </div>
    )
  }

  componentWillUnmount() {
    this.props.dispatch(clearBookWithReviewer());
  }
}

function mapStateToProps(state) {
  return {
    books: state.books
  }
}

export default connect(mapStateToProps)(BookView);
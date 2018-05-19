import React, { Component } from 'react';
import { connect } from 'react-redux';

import { getBooks } from '../actions';
import BookItem from '../widgetUI/book_item';

class HomeContainer extends Component {

  constructor(props) {
    super(props);

    props.dispatch(getBooks(1, 0, 'desc'));
  }

  renderItems(books) {
    return (
      books.list
      ? books.list.map((item, i) => (
        <BookItem {...item} key={i} />
      )) 
      : null
    )
  }

  loadMore = () => {
    let count = this.props.books.list.length;

    this.props.dispatch(getBooks(1, count, 'desc', this.props.books.list));
  }

  renderLoadMore() {
    return (
      <div className="loadmore"
        onClick={this.loadMore}>
        Carregar Mais
      </div>
    )
  }

  render () {
    return (
      <div>
        { this.renderItems(this.props.books) }
        { this.renderLoadMore() }
      </div>
    )
  }
}

function mapStateToProps(state) {
  return {
    books: state.books
  }
}

export default connect(mapStateToProps)(HomeContainer);
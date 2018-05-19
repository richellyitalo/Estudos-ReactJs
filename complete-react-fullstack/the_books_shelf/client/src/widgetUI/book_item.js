import React from 'react';
import { Link } from 'react-router-dom';

const BookItem = (props) => {
  return (
    <Link to={`/books/${props.id}`} className="book_item">
      <div className="book_header">
        <h2>{props.name}</h2>
      </div>
      <div className="book_items">
        <div className="book_author">{props.author}</div>

        <div className="book_bubble">
          <strong>Valor</strong> $ {props.price}
        </div>

        <div className="book_bubble">
          <strong>Páginas</strong> | {props.pages}
        </div>

        <div className="book_bubble rating">
          <strong>Notas</strong> | {props.rating}
        </div>
      </div>
    </Link>
  )
}

export default BookItem;
import React, { Component } from 'react';
import { connect } from 'react-redux';
import { getBook, updateBook, deletePost, clearBook } from '../../actions';
import { Link } from 'react-router-dom';

class EditReview extends Component {

  constructor(props) {
    super(props);

    const bookId = props.match.params.id;

    this.state = {
      formdata: {
        id: bookId,
        name: '',
        author: '',
        review: '',
        pages: '',
        rating: '',
        price: ''
      }
    }

    props.dispatch(getBook(bookId));
  }

  handleInput = (event, name) => {
    const newFormdata = {
      ...this.state.formdata
    }

    newFormdata[name] = event.target.value;
    this.setState({
      formdata: newFormdata
    })
  }

  // showNewBook = (newbook) => (
  //   newbook.book ? <div className="conf_link">
  //     Perfeito!
  //     <Link to={`/books/${newbook.book.id}`}>
  //       Clique aqui para ver o post
  //     </Link>
  //   </div>
  //   : null
  // )

  deletePost = () => {
    this.props.dispatch(deletePost(this.props.match.params.id));
  }

  redirectUser = () => {
    setTimeout(()=> {
      this.props.history.push('/user/user-reviews');
    }, 2000);
  }

  submit = (event) => {
    event.preventDefault();

    // let book = {
    //   ...this.state.formdata,
    //   ownerId: this.props.user.id
    // }
    this.props.dispatch(updateBook(this.state.formdata));
  }

  componentWillReceiveProps(nextProps) {
    console.log(nextProps);
    let book = nextProps.books.book;

    this.setState({
      formdata: {
        id: book.id,
        name: book.name,
        author: book.author,
        review: book.review,
        pages: book.pages,
        rating: book.rating,
        price: book.price
      }
    })

  }

  componentWillUnmount() {
    this.props.dispatch(clearBook());
  }

  render () {
    let books = this.props.books;
    return (
      <div className="rl_container article">
      {
        books.updateBook
        ? <div className="edit_confirm">
          Post atualizado, 
          <Link to={`/books/${books.book.id}`}>
            Clique para ver o Post
          </Link>
        </div>
        : null
      }

      {
        books.deletedBook
        ? <div className="red_tag">
          Revisão Removida
          {this.redirectUser()}
        </div>
        : null
      }
        <form onSubmit={this.submit}>
          <h2>Edição de Review</h2>

          <div className="form_element">
            <input
              type="text"
              placeholder="Nome"
              onChange={(e) => this.handleInput(e, 'name')}
              value={this.state.formdata.name}
            />
          </div>

          <div className="form_element">
            <input
              type="text"
              placeholder="Autor"
              onChange={(e) => this.handleInput(e, 'author')}
              value={this.state.formdata.author}
            />
          </div>

          <textarea
            placeholder="Crítica"
            onChange={(e) => this.handleInput(e, 'review')}
            value={this.state.formdata.review}
          ></textarea>

          <div className="form_element">
            <input
              type="number"
              placeholder="Páginas"
              onChange={(e) => this.handleInput(e, 'pages')}
              value={this.state.formdata.pages}
            />
          </div>

          <div className="form_element">
            <p style={{textAlign: 'center'}}>Rating</p>
            <select
              onChange={(e) => this.handleInput(e, 'rating')}
              style={{
                padding: '10px'
              }}
              value={this.state.formdata.rating}
            >
              <option val="1">1</option>
              <option val="2">2</option>
              <option val="3">3</option>
              <option val="4">4</option>
              <option val="5">5</option>
            </select>
          </div>

          <div className="form_element">
            <input
              onChange={(e) => this.handleInput(e, 'price')}
              type="text"
              placeholder="Preço"
              value={this.state.formdata.price}
            />
          </div>

          {/* { 
            this.props.books.newbook
            ? this.showNewBook(this.props.books.newbook) 
            : null
          } */}

          <button type="submit">Atualizar</button>
          
          <div className="delete_post">
            <div className="button"
              onClick={this.deletePost}
            >
              Excluir Post
            </div>
          </div>

        </form>
      </div>
    )
  }

  // componentWillUnmount() {
  //   this.props.dispatch(clearNewbook());
  // }
}

function mapStateToProps(state) {
  return {
    books: state.books
  }
}

export default connect(mapStateToProps)(EditReview);
